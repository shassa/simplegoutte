@extends('index.index')
@section('title')
Jobs Gallary
@endsection
@section('connect')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Companies List</h1>
      </div>
    </div>
  </div>
</section>

<section class="site-section" id="next-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header text-center bg-success text-light">
            <p class="h1">wazeefa</p>
          </div>
          <div class="card-body">
            <table class="table table-dark text-center table-hover">
              <thead class="thead-dark">
                <tr>
                  <th>image</th>
                  <th>Company Name</th>
                  <th>Email</th>
                  <th>Location</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($company as $company)
                <tr>
                  
                  <td> <button class="btn btn-outline-success"><a href="{{$company->email}}">{!!$company->email!!} </a></button> </td>
                  <td>{!!$company->Company_Name!!}</td>            
                  <td>{!!$company->Location!!}</td>

                  {{-- <td>{!!$company->desciption!!}</td>  --}}
                  <td><!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                      Details
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                           <button class="btn btn-outline-success">
                            <h5 class="modal-title" id="exampleModalLabel">Company Details</h5>
                          </button> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-light bg-dark">
                            <p>{!!$company->desciption!!}</p>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
