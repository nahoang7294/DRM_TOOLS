<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Employee;
use App\WorkDay;

class ReadFileShiftWork extends Controller
{
    public static $companyName = "KIS VIETNAM";
    public static $companyAddress = "Tầng 7 LogiGear, 1A Phan Xích Long, Phú Nhuận, Hồ Chí Minh";
    private static $employee_list = array();
    private static $workDay_list = array();
    public function readFileExcel()
    {
        $path = base_path('public/files/tmp-xls/20180713041919_shift_work_list.xls');
        $rows = Excel::load($path, function ($reader) {})->get()->toArray();

          foreach ($rows as $row) {
              $employee = array('employee_code'           => $row['employee_code'],
                                'name'                    => $row['name'],
                                'company_name'            => $row['company_name'],
                                'group_name'              => $row['group_name'],
                                'payment_date_group_name' => $row['payment_date_group_name'],
                                'position_name'           => $row['position_name']);
              if(!in_array($employee, self::$employee_list)){
                  array_push(self::$employee_list, $employee);
              }
              $workday = array(
                              'employee_code'                     => $row['employee_code'],
                              'date'                              => $row['date'],
                              'start_work_schedule'               => $row['start_work_schedule'],
                              'work_schedule_end'                 => $row['work_schedule_end'],
                              'start_work_record'                 => $row['start_work_record'],
                              'end_of_work_record'                => $row['end_of_work_record'],
                              'early_extension_extended'          => $row['early_extension_extended'],
                              'extension_of_premature_extension'  => $row['extension_of_premature_extension'],
                              'extended_start'                    => $row['extended_start'],
                              'end_of_extension'                  => $row['end_of_extension'],
                              'starting_embossing'                => $row['starting_embossing'],
                              'end_of_embossing'                  => $row['end_of_embossing'],
                              'start_break1'                      => $row['start_break1'],
                              'end_break1'                        => $row['end_break1'],
                              'start_break2'                      => $row['start_break2'],
                              'end_break2'                        => $row['end_break2'],
                              'start_break3'                      => $row['start_break3'],
                              'end_break3'                        => $row['end_break3'],
                              'work_time'                         => $row['work_time'],
                              'break'                             => $row['break'],
                              'late_time'                         => $row['late_time'],
                              'leave_early_time'                  => $row['leave_early_time'],
                              'duty_hours_in_normal_working_hours' => $row['duty_hours_in_normal_working_hours'],
                              'night_period'                      => $row['night_period'],
                              'night_period_overtime'             => $row['night_period_overtime'],
                              'overtime_during_legal_overtime'    => $row['overtime_during_legal_overtime'],
                              'overtime_hours_outside_statutory'  => $row['overtime_hours_outside_statutory'],
                              'overtime_during_overnight_legal'   => $row['overtime_during_overnight_legal'],
                              'midnight_law_overtime_overtime'    => $row['midnight_law_overtime_overtime'],
                              'commutation_allowance'             => $row['commutation_allowance'],
                              'transportation_expense'            => $row['transportation_expense'],
                              'amount_of_salary'                  => $row['amount_of_salary'],
                              'normal_working_hours_salary'       => $row['normal_working_hours_salary'],
                              'extra_normal_working_hours_salary' => $row['extra_normal_working_hours_salary'],
                              'attendance_location_latitude'      => $row['attendance_location_latitude'],
                              'attendance_location_longitude'     => $row['attendance_location_longitude'],
                              'leave_work_location_latitude'      => $row['leave_work_location_latitude'],
                              'leave_work_location_longitude'     => $row['leave_work_location_longitude']
                            );
              //$key = array_search($employee, self::$employee_list);
              //self::$employee_list[$key]['work_days'] = $workday;
              array_push(self::$workDay_list, $workday);
          }
          for ($index = 0; $index < count(self::$employee_list); $index++) {
              $employee_workday = array();
                  foreach(self::$workDay_list as $wordDay){
                    if($wordDay['employee_code'] == self::$employee_list[$index]['employee_code']){
                      array_push($employee_workday, $wordDay);
                  }
              }
              self::$employee_list[$index]['work_days'] = $employee_workday;
          }
        //dd(self::$employee_list);
        $this->createFileTimeKeeping();

    }

    private function getWorkDayOfEmployee(String $employee_code){
        $workDayOfEmployee = array();
        foreach (self::$workDay_list as $value) {
            if($value['employee_code'] == $employee_code){
              array_push($workDayOfEmployee, $value);
            }
        }
        return $workDayOfEmployee;
    }

    private function createFileTimeKeeping(){
        $dayOfMonth = $this->getDayWorkInMonth(self::$workDay_list[0]['date']);
        // $shiftWork = $this->rowShiftWork();
        Excel::create('Shift_Work_List', function($excel){
            $excel->sheet('', function($sheet){
                foreach(self::$employee_list as $employee){
                  $shiftWork = $employee['work_days'];
                  dd($shiftWork);
                  $i = 1;
                  foreach ($shiftWork as $row) {
                      $j = 'A';
                      foreach($row as $value) {
                          $sheet->cell($j.$i, function($cell) use ($value) {
                              $cell->setValue($value);
                              $cell->setBorder('thin','thin','thin','thin');
                              if($value == "9:00"){
                                  $cell->setBackground('#FF5300');
                              }
                          });
                          $j++;
                      }
                      $i++;
                  }
                }
            });
        })->export('xls');
    }

    private function rowShiftWork(){
        $rows = array();
        foreach (self::$employee_list as $emp) {
            foreach (self::$workDay_list as $wordDay) {
                if($wordDay['employee_code'] == $emp['employee_code']){
                   array_push($emp, $wordDay['work_time']);
                }
            }
            array_push($rows, $emp);
        }
        return $rows;
    }

    private function getDayWorkInMonth(String $date){ //2018-06-01
        $d = date_parse_from_format("Y-m-d", $date);
        $num = cal_days_in_month(CAL_GREGORIAN, $d['month'], $d['year']);
        return $num;
    }

    private function getDayInString(String $date){ //2018-06-01
        $d = date_parse_from_format("Y-m-d", $date);
        return $d['day'];
    }

    private function getDayOfWeek(String $date){
        $date_convert = date('l', strtotime($date)); // Thursday
        switch ($date_convert) {
          case 'Sunday':
            return 'CN';
          case 'Monday':
            return 'T2';
          case 'Tuesday':
            return 'T3';
          case 'Wednesday':
            return 'T4';
          case 'Thursday':
            return 'T5';
          case 'Friday':
            return 'T6';
          case 'Saturday':
            return 'T7';
        }
    }

    // public function getDemo(){
    //   $record = array('school' => 'HD', 'address' => 'CHU VAN AN');
    //   $records = array('name' => 'Volvo', 'age' => 8);
    //   // foreach ($record as $key => $value) {
    //       $records['trung'] = $record;
    //   // };
    //   // dd($records);
    //   Excel::create('Output', function($excel) use ($records) {
    //    $excel->sheet('Records', function($sheet) use ($records) {
    //      $i = 1;
    //      foreach ($records as $record) {
    //          $j = 'A';
    //          foreach($record as $value) {
    //              $sheet->cell($j.$i, function($cell) use ($value) {
    //                  $cell->setValue($value);
    //                   if($value == 10){
    //                     $cell->setBackground('#FF5300');
    //                   }
    //              });
    //              $j++;
    //          }
    //          $i++;
    //      }
    //    });
    //  })->export('xls');
    // }
}
