   <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark text-light inline inc-border">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12">
                    <marquee behavior="alternate" loop="infinite" direction="left" style="font-size: 30px; padding:5px 0px; color:red">
                        This site is underconstruction.
                    </marquee>
                </div>


                <div class="col-lg-7 col-md-12 left-info">
                    <div class="item-flex">
                        <ul class="list">
                            <li>
                                <i class="fas fa-phone"></i><a href="callto:+8801795122874">01795-122874</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i><a href="mailto:banasreeiqra@gmail.com">hsmmedu@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 right-info">
                    <div class="item-flex">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/hsmm2015" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky dark bootsnav header-back">
            <div class="container-full">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <form action="#">
                        <input type="text" placeholder="Search" class="form-control" name="text">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('userFrontend/assets/img/logo/hsmm-logo.png')}}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('honorable_teacher') }}">Our Honorable teachers</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('aim') }}">Our Aim</a></li>
                                <li><a href="{{ route('management_message') }}">management message</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('info_for_parents') }}">Information for parents</a></li>
                                <li>
                                    <a href="{{ route('rules_and_regulation') }}">rules and regulation</a>
                                </li>
                                <li>
                                    <a href="{{ route('extra_curricular_activities') }}">extra curricular activities</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('online_admission') }}">Online Admission</a>
                        </li>
                        <li>
                            <a href="{{ route('notices') }}">Notices</a>
                        </li>
                        <li>
                            <a href="{{ route('news_events') }}">News & Events</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('gallery') }}">Galley</a></li>
                                <li><a href="{{ route('video') }}">Video</a></li>
                                <!-- <li><a href="magazine.html">magazine</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->