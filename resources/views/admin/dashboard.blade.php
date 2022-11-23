@extends('adminlayout')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-around">
            <a href="{{ route('category.index') }}" class="col-3 text-decoration-none text-dark mt-3">
                <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fa-sharp fa-solid fa-list"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Categories</span>
                  <span class="info-box-number">{{ $categories->count() }}</span>
                </div>
              </div>
            </a>
            <a href="{{ route('brand.index') }}" class="col-3 text-decoration-none text-dark mt-3">
                <div class="info-box">
                <span class="info-box-icon bg-primary"><i class="fa-sharp fa-solid fa-tags"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Brands</span>
                  <span class="info-box-number">{{ $brands->count() }}</span>
                </div>
              </div>
            </a>
            <a href="{{ route('product.index') }}" class="col-3 text-decoration-none text-dark mt-3">
                <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fa-brands fa-shopify"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Products</span>
                  <span class="info-box-number">{{ $products->count() }}</span>
                </div>
              </div>
            </a>
        </div>
    </div>
@endsection
