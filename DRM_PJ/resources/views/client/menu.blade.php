<body data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="navbar navbar-default navbar-fixed-top scroll-me">
        <!-- pass scroll-me class above a tags to starts scrolling -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo_drm.png"  alt=""/>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                @if(Session::has('login') && Session::get('login') == true)
                    <ul class="nav navbar-nav navbar-right">
                        <li><a  data-toggle="modal">Xin chào {{ Session::get('name')}}</a></li>
                        <li><a  data-toggle="modal" href='{!! url('logout') !!}'>LOGOUT</a></li>
                    </ul>
                      
                @else
                    <ul class="nav navbar-nav navbar-right">
                        <li>  <a  data-toggle="modal" href='#login-modal'>LOGIN</a></li>
                        <li> <a data-toggle="modal" href='#signup'>SIGNUP</a></li>
                    </ul> 
                @endif
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->


