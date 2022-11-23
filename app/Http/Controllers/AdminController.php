<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::all();
        return view('admin.dashboard',compact('products','categories','brands'));
    }
}
