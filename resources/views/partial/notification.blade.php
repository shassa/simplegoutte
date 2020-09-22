@if(session('success'))
    <div class="alert alert-success alert-dismissible m-25" role="alert">
        <ul class="m-b-none">
            <li>{!! session('success') !!}</li>
        </ul>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible m-25" role="alert">
        <ul class="m-b-none">
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
