@extends('adminlayout')
@section('title')
 {{ $product->title }}
@endsection
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="row justify-content-center">
                        <img src="{{ asset('storage/products') }}/{{ $product->image }}" alt="{{ $product->title }}" class="col-6 mt-3">
                    </div>
                     <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Title : {{ $product->title }}</li>
                            <li class="list-group-item">Description : {{ $product->description }}</li>
                            <li class="list-group-item">Price : ${{ $product->price }}</li>
                            <li class="list-group-item">Brand : {{ $product->brand->title }}</li>
                            <li class="list-group-item">Category : {{ $product->category->title }}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection