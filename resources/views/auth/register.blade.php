@extends('layouts.app')

@section('content')
 <!-- Form login -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <!-- cover -->
                        <div class="col-lg-7 d-none d-lg-block position-relative">
                            <img src="{{ asset('loginPage/assets/vector-cover.png') }}" width="100%" height="100%" class="cover">
                        </div>

                        <!-- form control -->
                        <div class="col-lg-5">
                            <div class="p-3">
                                <div class="text-center mt-5">
                                    <h1 class="h2 judul text-bold">Create Account</h1>
                                </div>
                                <form method="POST" name="myForm" action="{{ route('register') }}">
                                    @csrf
                                    <div class="card mt-4 rounded-pill ">
                                        <div class="card-body p-0">
                                            <div class="input-group">
                                                <span class="input-group-text icon"><i class="bi bi-person-fill"></i></span>
                                                <input type="text" class="form-control form-login @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}"required  autocomplete="name"  autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card mt-4 rounded-pill ">
                                        <div class="card-body p-0">
                                            <div class="input-group">
                                                <span class="input-group-text icon"><i class="bi bi-envelope-fill"></i></span>
                                                <input type="email" class="form-control form-login @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}"  required autocomplete="email" required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card mt-4 rounded-pill ">
                                        <div class="card-body p-0">
                                            <div class="input-group">
                                                <span class="input-group-text icon"><i class="bi bi-key-fill"></i></span>
                                                <input type="password" class="form-control form-login @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-4 rounded-pill ">
                                        <div class="card-body p-0">
                                            <div class="input-group">
                                                <span class="input-group-text icon"><i class="bi bi-key-fill"></i></span>
                                                <input type="password" class="form-control form-login @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" name="password_confirmation" required>
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-purple block rounded-pill shadow"><i
                                            class="fas fa-lock"></i> CREATE ACCOUNT</button>

                                    <center class="mt-4 mb-3">
                                        <a href="{{ route('login') }}" class="link">Have Account?</a>
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
