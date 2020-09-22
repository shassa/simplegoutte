
<style>#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  font-size:20px;
  margin-left: -250px;
  background: #37474F;}
  .sidl{
  list-style:none;
  padding-top:100px;

  }
 #li{
    padding-top:30px;
  }
  #btn{
  text-align:center;
  height:120px;
}
  .col-4{
  background-color:;
  padding-left:20px;
  margin:10px;
}
.container{
    padding-top:100px;


}

</style>
@extends('index.index')
<ul id="sidebar" class="sidl">
        
        <li id="li">
          <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
        <li  id="li">
          <a href="{{route('about')}}"> About</a>
        </li>
        
        <li  id="li">
          <a href="{{route('contact.index')}}">Contact</a>
        </li>
        
        <li  id="li">
          <a href="{{route('services')}}"> Services </a>
        </li>
        <li  id="li">
          <a href="{{route('course.index')}}">Course</a>
        </li>
        <li  id="li">
          <a href="{{route('company.index')}}">Companies</a>
        </li>
        
      </ul>
    
@section('connect')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
      <form action="{{route('company.index')}}">

      <div class="row">
      <div class="col-2">
      <lapel></label>
      </div>
     <div class="col-4">
       <button class="btn btn-info btn-block" id="btn">
        <div class="row">
          <div class="col-10">
           <label style="color:red;font-size:20px"><b>{{count($company)}}</b></label><br>
           <label><b>Companies</b></label><br>
          </div> 
           <div class="col-2">
            <i class="fas fa-link"id="one"></i>
           </div>
        </div>   
           <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:{{count($company)}}%" aria-valuenow="{{count($company)}}" aria-valuemin="0" 
            aria-valuemax="100"></div>
            </div>
        
       </button>
     </div>
</form>

     <div class="col-4">
     <form action="{{route('course.index')}}">

          <button class="btn btn-info btn-block" id="btn">
            <div class="row">
              <div class="col-10">
                  <label style="color:red;font-size:20px"><b>{{count($courses)}}</b></label><br>
                  <label><b>Courses</b></label><br>
               </div>   
                  <div class="col-2">
                <i class="fas fa-leaf"id="one"></i>
                  </div>
             </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width:{{count($courses)}}%" aria-valuenow="{{count($courses)}}" 
                    aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
               </div>
             <div>
             
        </button>
      </div>
  </div>
  </form>
  <form action="{{route('dashbaord.contacts')}}">
  <div class="row">
      <div class="col-2">
      <lapel></label>
      </div>

     <div class="col-4">
       <button class="btn btn-info btn-block"  id="btn">
        <div class="row">
          <div class="col-10">
          <label style="color:red;font-size:20px"><b>{{count($contact)}}</b></label><br>
           <label><b>Contact Massages</b></label><br>
           </div>
           <div class="col-2">
            <i class="fas fa-calendar"id="one"></i>
         </div>
       </div>
           <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:{{count($contact)}}%" aria-valuenow="{{count($contact)}}" aria-valuemin="0" 
            aria-valuemax="100"></div>
            </div>
       </button>
     </div>
</form>

     <div class="col-4">
     <form action="{{route('users')}}">

          <button class="btn btn-info btn-block"  id="btn">
            <div class="row">
              <div class="col-10">
              <label style="color:red;font-size:20px"><b>{{count($user)}}</b></label><br>
                  <label><b>Users</b></label><br>
             </div>
             <div class="col-2">
                <i class="fas fa-shopping-cart"id="one"></i>
             </div>
          </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{count($user)}}%" aria-valuenow="{{count($user)}}" 
                    aria-valuemin="0" aria-valuemax="100" name="myprogressbar"></div>
                 </div>
               </div> 
        </button>
      </div>
  </div>
</form> 
      </div>
    </section>
    
  
@endsection
