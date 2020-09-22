@extends('index.index')
@section('title')
    Servies
@endsection
@section('connect')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Services</h1>
        <div class="custom-breadcrumbs">
          <a href="{{route('jobs.index')}}">Home</a> <span class="mx-2 slash">/</span>
          <span class="text-white"><strong>Services</strong></span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="site-section services-section bg-light block__62849" id="next-section">
  <div class="container">
    
    <div class="row">
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a href="{{route('contact.index')}}" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><span class="icon-magnet d-block"></span></span>
          <h3>Become a Coach Partner</h3>
          <p>make your Coach center apart of our trust centers ,It helps your center to be more and more wide.</p>

        </a>

      </div>
      
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
        
        <a href="{{route('contact.index')}}" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><span class="icon-laptop d-block"></span></span>
          <h3>Career Coaching</h3>
          <p>Learning the real need of your dream job, in career coashing we offer courses to centers which we trust.</p>
        </a>            

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
        
        <a href="{{route('contact.index')}}" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><span class="icon-search d-block"></span></span>
          <h3>Become a Partner</h3>
          <p>make your web site apart of our search ,It helps your site to be more and more wide.</p>
        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
        
        <a href="{{route('contact.index')}}" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><span class="icon-paper-plane d-block"></span></span>
          <h3>Have a Claim </h3>
          <p> your claim is important for us and It's so kind of you to make us growth more and more.</p>

        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
        
        <a href="{{route('company.index')}}" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><span class="icon-trophy d-block"></span></span>
          <h3>Our Partners</h3>
          <p>In this setion we will explore the companys and the coaching center that we already deal with.</p>

        </a>            

      </div>
    
    </div>
  </div>
</section>
@endsection