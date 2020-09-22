@extends('index.index')
@section('title')
    About
@endsection
@section('connect')
     <!-- HOME -->
     <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-white font-weight-bold">About Us</h1>
              <div class="custom-breadcrumbs">
                <a href="{{route('jobs.index')}}">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>About Us</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>
  
     
      
      <section class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                <span class="play-icon"><span class="icon-play"></span></span>
                <img src="{{asset('images/sq_img_6.jpg')}}" alt="Image" class="img-fluid img-shadow">
              </a>
            </div>
            <div class="col-lg-5 ml-auto">
              <h2 class="section-title mb-3">Jop search engine</h2>
              <p>Search engines work by crawling hundreds of billions of pages using their own web crawlers. These web crawlers are commonly referred to as search engine bots or spiders. A search engine navigates the web by downloading web pages and following links on these pages to discover new pages that have been made available and this crawler build to work all the time.
</p>
              <p>In our search we use the crawler not to downlod all the web site pages and store it in our database .Its some different in this application ,we use the web site search engine and get the specific data that the user already need before we scrap that page.
</p>
            </div>
          </div>
        </div>
      </section>
  
      
     
      <section class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">Our Team</h2>
            </div>
          </div>
  
          <div class="row align-items-center block__69944">
  
            <div class="col-md-6">
              <img src="{{asset('images/person_6.jpg')}}" alt="Image" class="img-fluid mb-4 rounded">
            </div>
  
            <div class="col-md-6">
              <h3>Nashwa Hassan</h3>
              <p>last year student made the http requests , the crawler with goutte and the css-selectors </p>
              <div class="social mt-4">
                <a href="https://web.facebook.com/dalaa.albe"><span class="icon-facebook"></span></a>
                <a href="https://github.com/shassa"><span class="icon-github"></span></a>
                <a href="https://www.linkedin.com/in/n-hassan-b1139b159/"><span class="icon-linkedin"></span></a>
              </div>
            </div>
  
            <div class="col-md-6 order-md-2 ml-md-auto">
              <img src="https://avatars0.githubusercontent.com/u/3964752?s=460&u=7fe863fbe392aeec603941dd355dc17da838be9a&v=4" alt="Image" class="img-fluid mb-4 rounded">
            </div>
  
            <div class="col-md-6">
              <h3>Moustafa Gouda</h3>
              <p>Experienced Web Developer with a demonstrated history of working in the information technology and services industry. Skilled in PHP, WordPress, jQuery, Drupal, Magneto and Laravel.</p>

              <div class="social mt-4">
                <a target="_blank" href="http://fb.com/bafii"><span class="icon-facebook"></span></a>
                <a target="_blank" href="https://www.linkedin.com/in/moustafagouda"><span class="icon-linkedin"></span></a>
                <a target="_blank" href="https://github.com/bafi"><span class="icon-github"></span></a>
              </div>
            </div>
            </div>
            <div class="row align-items-center block__69944">
            <div class="col-md-6">
              <img src="{{asset('images/noha.jpg')}}" alt="Image" class="img-fluid mb-4 rounded">
            </div>

            <div class="col-md-6">
              <h3>Noha El-sayed</h3>
              <p>last year student made log-in system and the front-ent for the bages </p>
              <div class="social mt-4">
                <a href="https://github/Noha Elsayed"><span class="icon-github"></span></a>
                <a href="https://www.linkedin.com/in/noha-elsayed-347932193/"><span class="icon-linkedin"></span></a>

                <a href="https://www.facebook.com/profile.php?id=100007656077111"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/NohaElsayed534"><span class="icon-twitter"></span></a>

                
              </div>
            </div>
  <div>
            
            
        </div>
      </section>
@endsection
