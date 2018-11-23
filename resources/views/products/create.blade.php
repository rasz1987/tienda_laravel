@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear producto
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('products.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="price" min="0" >
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="{{route('products.index')}}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection