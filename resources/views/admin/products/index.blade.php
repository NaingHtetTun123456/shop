@extends('adminlayout')
@section('title')
    index of Product
@endsection
@section('content')

        <div class="content-wrapper">
            @if (session('created'))
            
                <div class=" alert alert-success" role="alert">
                    {{ session('created') }}
                </div>
            @endif
        <div class="container">
            <div class="row justify-content-center">
                <table class="table col-10 mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Price</th> 
                            <th><a href="{{ route('product.create') }}" class="btn btn-success col-5">Create</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ asset('storage/products')}}/{{ $product->image }}" alt="" width="60px" height="70px"></td>
                            <td>{{ $product->title }}</td>
                            <td>${{ $product->price }}</td>
                            <td>
                                <a href="{{ route('product.show',$product->id) }}" class="btn btn-outline-primary">Show Detail</a>
                            </td>
                        </tr> 
                        @endforeach
                       
                    </tbody>
                   
                </table>
                 
            </div>
             <div class="ms-5">
                {{ $products->links() }}
             </div>
        </div> 
       
    </div>
@endsection