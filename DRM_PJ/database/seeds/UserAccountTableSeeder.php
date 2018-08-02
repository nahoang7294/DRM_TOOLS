<?php

use Illuminate\Database\Seeder;

class UserAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_account')->insert([
        	[
            'email' => 'trungnh@gmail.com@gmail.com',
            'password' => bcrypt('123456'),
            'personal_in_charge' => 'Nguyen Huu Trung',
            'status' => '1',
            'phone_number' => '01269681458',
            'company_name' => 'KIS VN',
            'company_address' => '1A Phan Xich Long, Phu Nhuan, Ho Chi Minh',
            'create_datetime' => new DateTime(),
            'exprired' => '2018/09/04',
        	],
        	[
            'email' => 'hoangnaE@gmail.com',
            'password' => bcrypt('123456'),
            'personal_in_charge' => 'Nguyen Anh Hoang',
            'status' => '2',
            'phone_number' => '01259682452',
            'company_name' => 'KIS Japan',
            'company_address' => 'Tokyo, Japan',
            'create_datetime' => new DateTime(),
            'exprired' => '2018/10/04',
        	],
        	[
            'email' => 'anta@gmail.com',
            'password' => bcrypt('123456'),
            'personal_in_charge' => 'Huynh The An',
            'status' => '0',
            'phone_number' => '01259682452',
            'company_name' => 'KIS HN',
            'company_address' => 'Ba Dinh, Ha Noi',
            'create_datetime' => new DateTime(),
            'exprired' => '2018/08/04',
        	],
        	[
            'email' => 'nguyendda@gmail.com',
            'password' => bcrypt('123456'),
            'personal_in_charge' => 'Dao Duong Anh Nguyet',
            'status' => '3',
            'phone_number' => '01259682452',
            'company_name' => 'Cho Ba Chieu',
            'company_address' => 'Phu Nhuan, Ho Chi Minh',
            'create_datetime' => new DateTime(),
            'exprired' => '2018/08/01',
        	]
        ]);
    }
}
