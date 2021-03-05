@extends('layout.master')

@section('content')


    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-primary">Login</div>
                        @if(\Illuminate\Support\Facades\Session::get('fail'))
                            <div class="alert alert-danger text-center">
                                {{\Illuminate\Support\Facades\Session::get('fail')}}
                            </div>
                        @endif
                        @if(\Illuminate\Support\Facades\Session::get('success'))
                            <div class="alert alert-success text-center">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                            </div>
                        @endif


                        <div class="card-body">
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email" required autofocus>
                                    </div>
                                </div>

                                     <br>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                   <br>
                                <div class="form-group row">

                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                  <br>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <a href="#" class="btn btn-link">
                                        Forgot Your Password?
                                    </a>

                                </div>
                                <div class="col-md-3 offset-10">
                                    <a class="btn btn-link" href="{{route('register')}}">Create an account</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>

@endsection
