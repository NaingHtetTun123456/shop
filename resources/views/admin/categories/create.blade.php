@extends('adminlayout')
@section('title')
    Create
@endsection
@section('content')
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                       <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                       <button class="btn btn-success">Apply Now</button>
                    </form>
                    
                
                </div>
            </div>
        </div>
@endsection