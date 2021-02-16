@extends('layouts.app')

@section('content')

<!-- Card Login -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">

                        <!-- cover -->
                        <div class="col-lg-7 d-none d-lg-block position-relative">
                            <img src="{{ asset('loginPage/assets/vector-cover.png')}}" width="100%" height="100%" class="cover">

                        </div>

                        <!-- form login -->
                        <div class="col-lg-5">
                            <div class="p-5">
                                <div class="text-center mt-5">
                                    <h1 class="h1 judul text-bold">USER LOGIN</h1>
                                    <p class="desc">Welcome to the website</p>
                                </div>
                                <form method="POST" name="myForm" action="{{ route('login') }}">
                                    @csrf
                                    <div class="card mt-4 rounded-pill">
                                        <div class="card-body p-0">
                                            <div class="input-group">
                                                <span class="input-group-text icon"><i
                                                        class="bi bi-person-fill"></i></span>
                                                <input type="text" class="form-control form-login @error('email') is-invalid @enderror" placeholder="Email" autocomplete="email" name="email" required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card mt-4 rounded-pill">
                                        <div class="card-body p-0">
                                            <div class="input-group">
                                                <span class="input-group-text icon"><i class="bi bi-lock"></i></span>
                                                <input type="password" class="form-control form-login @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="d-flex justify-content-between mt-4 mb-4">
                                        <div class="form-group">
                                            <label class="container font-check">Remember
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <a href="#" class="link">Forgot Password?</a>
                                    </div> --}}

                                    <button type="submit" class="btn btn-purple block rounded-pill shadow"><i
                                            class="fas fa-lock"></i> LOGIN</button>

                                    <center class="mt-4">
                                        <a href="{{ route('register') }}" class="link">Create Account?</a>
                                    </center>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
