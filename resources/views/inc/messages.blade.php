
@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    {{$error}}
                </div>
            </div>
        </div>    
    @endforeach
@endif

@if(session('success')) 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        </div>
    </div>
@endif

@if(session('error')) 
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        </div>
    </div>
@endif
