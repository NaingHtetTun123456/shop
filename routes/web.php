<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return (Customer::all());
    // dd (auth('customer')->check());
    return view('welcome');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/fontend',[FontendController::class,'welcome'])->name('fontend');
    Route::get('/',[AdminController::class,'dashboard'])->name('admin');
    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product',ProductController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/auth', [HomeController::class, 'auth'])->name('auth');

Route::prefix('customer')->middleware('guest:customer')->group(function (){
Route::get('/register', [CustomerController::class, 'registerView'])->name('customer_register');
Route::post('/register', [CustomerController::class, 'register'])->name('register_submit');
Route::get('/login', [CustomerController::class, 'loginView'])->name('customer_loginView');
Route::post('/login',[CustomerController::class, 'login'])->name('customer_login');
});


Route::get('customer/logout', [CustomerController::class, 'logout'])->middleware('customer')->name('customer_logout');

Route::get('customer/test', [CustomerController::class, 'test']);