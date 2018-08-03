@extends('client.master')
@include('form.login')
@include('form.signup')
@section('content')
    <div id="header">
        <div class="overlay">
            <div class="container">
                <div class="row scroll-me">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center ">

                        <h1 data-scroll-reveal="enter from the bottom after 0.2s">DOREMING CONVERTER TOOLS
                        </h1>

                        <h4 data-scroll-reveal="enter from the bottom after 0.4s">Công cụ tự động chuyển đổi dữ liệu từ hệ thống quản lý Doreming

                        </h4>
                        <a data-scroll-reveal="enter from the bottom after 0.6s" href="#" class="btn set-bk-clr">Đăng ký dùng thử</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--HEADER SECTION END  -->
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>CHỨC NĂNG CÔNG CỤ CHUYỂN ĐỔI EXCEL FILE</strong></h2>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae

                </div>
            </div>
            <div class="row text-center pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="col-md-4 intro-tool">
                    <i class="ion-ios-cloud-outline"></i>
                    <h4><strong>Service Name # 1 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                     <a data-scroll-reveal="enter from the bottom after 0.6s" href="#" class="btn set-bk-clr pad-top">Đăng ký dùng thử</a>
                </div>
                <div class="col-md-4 intro-tool">
                    <i class="ion-card "></i>
                    <h4><strong>Service Name # 2 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                     <a data-scroll-reveal="enter from the bottom after 0.6s" href="#" class="btn set-bk-clr pad-top">Đăng ký dùng thử</a>
             </div>
                <div class="col-md-4 intro-tool">
                    <i class="ion-speedometer"></i>
                    <h4><strong>Service Name # 3 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                     <a data-scroll-reveal="enter from the bottom after 0.6s" href="#" class="btn set-bk-clr pad-top">Đăng ký dùng thử</a>
                </div>

            </div>

        </div>


    </section>
    <!-- SERVICES SECTION END  -->

    <section id="works">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>DOREMING LÀ GÌ</strong></h2>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae

                </div>
            </div>



            <div class="row text-center" id="portfolio-div" >

                <div class="col-md-4 col-sm-12 html">
                    <p>
                        Strength
                        Our payroll system is real time, cloud-based, and All-in-One: HR-Attendance-Payroll.
                        It sounds simple, but the real time payroll calculation and process is very difficult.
                        Our team has a 22-year experience in payroll system development and banking integration.
                        Our team members introduced the first single-instance multi-tenant service in Japan in 2000.
                        Today, we develop a ‘Wage Wallet’ with the latest blockchain technology.
                    </p>
                     <a data-scroll-reveal="enter from the bottom after 0.6s" href="#" class="btn set-bk-clr pad-top">Dùng thử Doreming</a>
                </div>
                <div class="col-md-8 col-sm-12 css">

                        <a class="fancybox-media" title="Image Title Goes Here" href="assets/img/portfolio/2.jpg">

                            <img src="assets/img/portfolio/2.jpg" class="img-responsive " alt="" />
                        </a>


                </div>


            </div>
        </div>
    </section>
@endsection
