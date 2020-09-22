@extends('index.index')
@section('title')
Jobs Search
@endsection
@section('connect')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Jobs Search</h1>
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
              <thead>
                <tr>
                  <th>image</th>
                  <th>job title</th>
                  <th>company</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                @if(!count($items))
                  <tr>
                    <td colspan="4">No result found, please try again with another keyword.</td>
                  </tr>
                @endif
                @foreach ($items as $item)
                <tr>
                  <td>
                    @if ($item['image'])
                      <div class="col-md-3"><img src="{!! $item['image'] !!}" class="img-circle elevation-2" height="50">
                      </div>
                    @endif
                </td>
                  <td> <button class="btn btn-outline-success"><a href="{!! $item['url'] !!}">{!! $item['title'] !!} </a></button> </td>
                  <td>{!! $item['company'] !!}</td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                      Details
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                           <button class="btn btn-outline-success">
                            <h5 class="modal-title" id="exampleModalLabel">Details Jobs</h5>
                          </button> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-light bg-dark">
                            <p>{!! \Illuminate\Support\Arr::get($item, 'description') !!}</p>
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
