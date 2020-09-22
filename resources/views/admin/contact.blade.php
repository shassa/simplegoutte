@extends('index.index')
@section('title')
    Contact US
@endsection
@section('connect')
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Contact Us</h1>
            <div class="custom-breadcrumbs">
              <a href="{{route('jobs.index')}}">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Contact Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('partial.notification')
    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="{{route('contact.store')}}" method="POST">
              @csrf
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" name="first_name" class="form-control @error('frist') is-invalid @enderror" required autocomplete="frist" autofocus>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="last_name" class="form-control @error('last') is-invalid @enderror" required autocomplete="last" autofocus >
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black"  for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus >
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror"required autocomplete="subject" autofocus>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." required autocomplete="message" autofocus></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-md text-white">Send Message</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 El-nasr st,Cairo,Egypt</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">tawzeef@tawzeef.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </section>

    
@endsection
