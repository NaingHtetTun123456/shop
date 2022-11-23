@extends('layouts.customerauth')

@section('content')   
        <form action="{{route('register_submit')}}"method="POST">
        @csrf
        <div class="container col-4  mt-5">
            <div id="img" class="card">
                <div class="card-body text-center">
                    <h1>Register</h1> 
                </div>
                    <div class="d-flex justify-content-around row text-primary">
                        <div class="form-group col-10">
                            <label for="name">Full name</label>
                            <input type="text" name="name" class="form-control" placeholder="Full name">
                        </div>                   
                        <div class="form-group col-10">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="form-group col-10 ">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group col-10 ">
                            <label for="password">Confirm password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                        </div>
                            <button class="btn btn-primary text-lg col-5">register</button>
                                 <div class="text-center mr-3 mt-2 mb-3">        
                                         Do have an account?   <a href="login" class="text-decoration-none">Login</a>
                                 </div>
                                  <div class="card-footer text-center mb-3">
                                        <a href="" class="text-white mr-4"><i class="fa-brands fa-google fa-lg"></i></a>
                                        <a href="" class="text-white mr-4"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                        <a href="" class="text-white mr-4"><i class="fa-brands fa-twitter fa-lg"></i></a>
                                        <a href="" class="text-white"><i class="fa-brands fa-youtube fa-lg"></i></a>
                                  </div>
                    </div>
                    </form>
            </div>
        </div>
@stop