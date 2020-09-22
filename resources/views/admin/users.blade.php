@extends('index.index')
@section('title')
Users
@endsection
@section('connect')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Users List</h1>
      </div>
    </div>
  </div>
</section>
@include('partial.notification')
<section class="site-section" id="next-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header text-center bg-success text-light">
            <p class="h1">Users</p>
          </div>
          <div class="card-body">
            <table class="table table-dark text-center table-hover">
              <thead class="thead-dark">
                <tr>
                  <th> Name</th>
                  <th>Email</th>
                  <th colspan="2" style="text-align:center;">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($user as $user)

                <tr>
                <td>{!!$user->name!!}</td>            

                  <td> {{ $user->email }} </td>
                  <td>
                <form method="post" action="{{route('user.delete',$user->id)}}">
                  @csrf
                  @method('delete')
                <button type="submit" class="btn btn-primary">Delete</button>
                
                 </form>
                 </td>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
