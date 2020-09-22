<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">

    <link rel="stylesheet" href="{{asset('css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- MAIN CSS -->
</head>
<body id="top">
    <div class="site-wrap">
        <!-- NAVBAR -->
        <header class="site-navbar mt-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6"><a href="/">Tawzeef</a></div>

                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                            <li><a href="{{route('jobs.index')}}" class="nav-link active">Home</a></li>
                            <li class="has-children">
                            <a href="#">Gallery</a>
                            <ul class="dropdown">
                            <li><a href="{{route('company.index')}}">Companies</a></li>
                            <li><a href="{{route('course.index')}}">Courses</a></li>
                            </ul>
                            </li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="{{route('contact.index')}}">Contact</a></li>
                            <li><a href="{{route('dashboard')}}">Dashboard</a></li>

                        </ul>
                    </nav>

                  
                    @if(auth()->check())
                    <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                        <div class="ml-auto">
                           <li class="dropdown dropdown-user nav-item">
                               <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                   <span class="mr-1">Welcome
                                       <span class="user-name text-bold-700"> {{ Auth::user()->name}} </span>
                                   </span>
                                   <span class="avatar avatar-online">
                                       <img style="height: 35px;" src="" alt=""><i></i></span>

                               </a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                               </div>
                           </li>
                        </div>
                        <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                    </div>
                    @endif
                </div>
            </div>
        </header>

        <!-- HOME -->
        
         @yield('connect') 
      
         
    </div>
    <footer class="site-footer align-self-center text-center">
    <div class="footer-social">
              <a href="https://www.facebook.com/Tawzeef-102062884953977/?modal=admin_todo_tour"><span class="icon-facebook"></span></a>
              <a href="http://twitter.com/home"><span class="icon-twitter"></span></a>
              <a href="https://www.instagram.com/tawzeef134/"><span class="icon-instagram"></span></a>
            </div>
    <div >
                <blockquote>
                  <h3> Hope you found your Goal</h3>
                </blockquote>
              </div>
    </footer>
    <!-- SCRIPTS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/stickyfill.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>

    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    

</body>
</html>

