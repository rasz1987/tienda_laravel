@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Listado de productos
                        <a href="{{route('products.create')}}" class="btn btn-success btn-sm float-right">Nuevo Producto</a>
                    </div>
                    <div class="card-body">
                        @include('inc.messages')
                        <table class="table table-hover table-sm">
                            <thead>
                                <th>Description<th>
                                <th>Price<th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            {{$product->description}}
                                        </td>
                                        <td>
                                            {{$product->price}}
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
@endsection
    