<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
class FontendController extends Controller
{
   public function welcome(){
    $brands =Brand::all();
    $categories =Category::all();
    $products =Product::all();
    return view('admin.fontend', compact('brands','categories','products'));

   }
}
