@extends('layouts.customerauth')

@section('content')
    <form action="{{ route('customer_login') }}" method="POST">
        @csrf
        <div class="container col-4" style="margin-top: 150px">
            <div id="img" class="card">
                <div class="card-header text-center">
                    <h1>Login</h1>
                </div>
                <div class="d-flex justify-content-around row">
                    <div class="form-group col-10">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="email">
                    </div>
                </div>
                <div class="d-flex justify-content-around row">
                    <div class="form-group col-10">
                        <label for="password">password</label>
                        <input type="password" name="password" class="form-control" placeholder="password">
                       
                    </div> <a href="" class="ml-5">forget password</a>
                        <button class="btn btn-primary text-lg col-4">login</button>
                        <div class="text-center text-info mr-3 mt-2 mb-3">        
                            Don't have an account?   <a href="register" class="text-center">register</a>
                        </div>
                        <div class="card-footer text-center mb-3">
                                    <a href="" class="text-white mr-4"><i class="fa-brands fa-google fa-lg"></i></a>
                                    <a href="" class="text-white mr-4"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                    <a href="" class="text-white mr-4"><i class="fa-brands fa-twitter fa-lg"></i></a>
                                    <a href="" class="text-white"><i class="fa-brands fa-youtube fa-lg"></i></a>
                              </div>
                        </div>
                </div> 
            </div>
        </div>
    </form>
</html>