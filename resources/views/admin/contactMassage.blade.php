@extends('index.index')
@section('title')
Contact Messages
@endsection
@section('connect')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Messages</h1>
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
            <p class="h1">Contact Messages</p>
          </div>
          <div class="card-body">
            <table class="table table-dark text-center table-hover">
              <thead class="thead-dark">
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Delete</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->message }}</td>
                <td>
                <form method="post" action="{{route('delete.contact', $item->id)}}">
                  @csrf
                  @method('delete')
                <button type="submit" class="btn btn-primary">Delete</button>
                
                 </form>
                 </td>
                 </tr>
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
