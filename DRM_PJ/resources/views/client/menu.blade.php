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
                @if (Auth::guest())
                    <ul class="nav navbar-nav navbar-right">
                        <li>  <a  data-toggle="modal" href='#login'>LOGIN</a></li>
                        <li> <a data-toggle="modal" href='#signin'>SIGN IN</a></li>
                    </ul>   
                @else
                     <ul class="nav navbar-nav navbar-right">
                        <li><a  data-toggle="modal">{{ Auth::user()->personal_in_charge }}</a></li>
                        <li><a  data-toggle="modal" href='{!! url('logout') !!}'>LOG OUT</a></li>
                    </ul>
                @endif
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->


