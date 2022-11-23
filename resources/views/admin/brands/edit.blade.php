@extends('adminlayout')
@section('title')
    Edit product
@endsection
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="{{ route('brand.update',$brand->id) }}" method="POST">
                        @csrf
                        @method("PATCH")
                       <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $brand->title }}">
                        </div>
                       
                   
                    <button class="btn btn-success">Edit</button>
                 </form>
                </div>
            </div>
        </div>
@endsection