@extends('layout.master')

@section('content')


    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-primary">Register</div>
                        @if(\Illuminate\Support\Facades\Session::get('fail'))
                            <div class="alert alert-danger text-center">
                                {{\Illuminate\Support\Facades\Session::get('fail')}}
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="{{route('createUser')}}" method="get">
                                @csrf
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name" required autofocus>
                                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right" >E-Mail Address</label>
                                    <div class="col-md-6"><input type="text" id="email" class="form-control" placeholder="Enter your email"name="email" required autofocus>
                                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right" >Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required>
                                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Confirm password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password2" class="form-control" name="password2" placeholder="Confirm your password"required>
                                        <span class="text-danger">@error('password2'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                <br>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>


                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
