<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VueJs Laravel Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700"
        rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/public/asset/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/asset/css/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/asset/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/public/asset/css/jcarousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/asset/css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/asset/css/style.css') }}" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/public/asset/ico/apple-touch-icon-144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/public/asset/ico/apple-touch-icon-114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/public/asset/ico/apple-touch-icon-72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/public/asset/ico/apple-touch-icon-57-precomposed.png')}}" />
    <link rel="shortcut icon" href="{{ asset('assets/public/asset/ico/favicon.png')}}" />

   
</head>

<body>
   


    <div id="app">
        <div id="wrapper">
            <!-- toggle top area -->
            <div class="hidden-top">
                <div class="hidden-top-inner container">
                    <div class="row">
                        <div class="span12">
                            <ul>
                                <li><strong>We are available for any custom works this month</strong></li>
                                <li>Main office: Springville center X264, Park Ave S.01</li>
                                <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end toggle top area -->
            <!-- start header -->
            <header>
                <div class="container ">
                    <!-- hidden top area toggle link -->
                    <div id="header-hidden-link">
                        <a href="#" class="toggle-link" title="Click me you'll get a surprise"
                            data-target=".hidden-top"><i></i>Open</a>
                    </div>
                    <!-- end toggle link -->
                    <div class="row nomargin">
                        <div class="span12">
                            <div class="headnav">
                                <ul>
                                    <li><router-link to="/login"><i class="icon-user"></i> Sign in</router-link></li>
                                    <li><a href="#mySignin">Sign up</a></li>
                                </ul>
                            </div>
                           
                         
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('assets/public/asset/img/logo.png') }}" alt=""
                                        class="logo" /></a>
                                <h1>Flat and trendy bootstrap template</h1>
                            </div>
                        </div>
                        <div class="span8">
                            <div class="navbar navbar-static-top">
                                <div class="navigation">
                                    <nav>
                                        <ul class="nav topnav">
                                            
                                            <li>
                                                <a href="">Home </a>
                                            </li>
                                            <li>
                                                    <a href=""><router-link to="/blog">Blog</router-link></a>
                                            </li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end navigation -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
    
            <home-main></home-main>
    
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="span3">
                            <div class="widget">
                                <h5 class="widgetheading">Browse pages</h5>
                                <ul class="link-list">
                                    <li><a href="#">About our company</a></li>
                                    <li><a href="#">Our services</a></li>
                                    <li><a href="#">Meet our team</a></li>
                                    <li><a href="#">Explore our portfolio</a></li>
                                    <li><a href="#">Get in touch with us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget">
                                <h5 class="widgetheading">Important stuff</h5>
                                <ul class="link-list">
                                    <li><a href="#">Press release</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Career center</a></li>
                                    <li><a href="#">Flattern forum</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget">
                                <h5 class="widgetheading">Important stuff</h5>
                                <ul class="link-list">
                                    <li><a href="#">Press release</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Career center</a></li>
                                    <li><a href="#">Flattern forum</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget">
                                <h5 class="widgetheading">Get in touch with us</h5>
                                <address>
                                    <strong>Flattern studio, Pte Ltd</strong><br>
                                    Springville center X264, Park Ave S.01<br>
                                    Semarang 16425 Indonesia
                                </address>
                                <p>
                                    <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                                    <i class="icon-envelope-alt"></i> email@domainname.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <div class="copyright">
                                    <p>
                                        
                                    </p>
                                    <div class="credits">
                                       <a href="https://github.com/sakibmd/vuejs-laravel-blog/" target="_blank">Sakib's Blog Using Vue.js and Laravel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <ul class="social-network">
                                    <li><a href="#" data-placement="bottom" title="Facebook"><i
                                                class="icon-facebook icon-square"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Twitter"><i
                                                class="icon-twitter icon-square"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Linkedin"><i
                                                class="icon-linkedin icon-square"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Pinterest"><i
                                                class="icon-pinterest icon-square"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Google plus"><i
                                                class="icon-google-plus icon-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jcarousel/jquery.jcarousel.min.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/google-code-prettify/prettify.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/portfolio/jquery.quicksand.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/portfolio/setting.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jquery.ba-cond.min.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/jquery.slitslider.js') }}"></script>
    <script src="{{ asset('assets/public/asset/js/animate.js')}}"></script>

    <!-- Template Custom JavaScript File -->
    <script src="{{ asset('assets/public/asset/js/custom.js')}}"></script>

</body>

</html>