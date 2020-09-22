
<!doctype html>
<html lang="en">
  <head>
    <title>Tawzeef</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">

    <link rel="stylesheet" href="{{asset('css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">  
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="">Tawzeef</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                <li><a href="{{route('jobs.index')}}" class="nav-link active">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('jobsgallary.index')}}">jobsgallery</a></li>
                <li><a href="{{route('contact.index')}}">Contact</a></li>
            </ul>
        </nav>
          @if(!auth()->check())
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="{{route('login')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>
          @endif
        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
              
            </div>
            <form class="search-jobs-form" action="{{route('jobs.search')}}">
              <div class="row mb-5" style="justify-content: center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-4 mb-lg-0">
                  <input type="text" name="keyword" class="form-control form-control-lg" placeholder="Job title, Company...">
                </div>
                
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <section class="bg-light mt-1 testimony-full">
        
        <div class="owl-carousel single-carousel">

        
          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                <p>&ldquo;Tawzeef it the best web site ,It minimaze my seatching time,ether I was have to sarf many web set it make it easy and quick to get ther result in one place.&rdquo;</p>

                  <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/person_transparent_2.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;Tawzeef it the best web site ,It minimaze my seatching time,ether I was have to sarf many web set it make it easy and quick to get ther result in one place.&rdquo;</p>
                  <p><cite> &mdash; Chris Peters, @Google</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/person_transparent.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

      </div>

    </section>

    
    <footer class="site-footer align-self-center text-center">
    <div >
                <blockquote>
                  <h3> Hope you found your Goole</h3>
                </blockquote>
              </div>
    </footer>
  
  </div>

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

     
  </body>
</html>
