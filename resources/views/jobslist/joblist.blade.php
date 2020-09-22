@extends('index.index')
@section('title')
    Jobs
@endsection

@section('connect')


<section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

  <div class="container">
  
      <div class="row align-items-center justify-content-center">
      
          <div class="col-md-12">
              <div class="mb-5 text-center">
               
    
        
        <div  class="owl-carousel single-carousel ">

        <div class="container"style="height:300px;">
            <div class="row">
            <div class="col-lg-8 align-self-end text-center ">
                <img  src="images/bayt.png" alt="Image">
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
            <div  class="col-lg-8 align-self-end text-center ">
                <img  src="images/wuzzuf.png" alt="Image">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
            <div class="col-lg-8 align-self-end text-center ">
                <img src="images/tanqeep.png" alt="Image">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              
              <div class="col-lg-8 align-self-end text-center ">
                <img  src="images/indeed.jpg" alt="Image">
              </div>
            </div>
          </div>

          
      </div>

                  <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
                 
              </div>
              <form class="search-jobs-form" action="{{route('jobs.search')}}">
                  <div class="row mb-5" style="justify-content: center">
                      <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-4 mb-lg-0 ml-5 l-5">
                          <input type="text" name="keyword" class="form-control form-control-lg" placeholder="Job title, Company...">
                      </div>
                      
                      <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                          <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>

 @endsection       
