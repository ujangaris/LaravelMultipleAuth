@extends('admin.layouts.master')

@section('content')
            <div class="section-header">
                <h1>Dashboard</h1>
                <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                </div>
            </div>

          <div class="section-body">
              <div class="row">
              <div class="col-12 mb-4">
                <div class="hero bg-primary text-white">
                  <div class="hero-inner">
                    <h2>Welcome Back, {{ Auth::user()->name }}!</h2>
                    @if(Auth::user()->email !=="admin@mail.test" && Auth::user()->email !=="author@mail.test")

                    <p class="lead">Hello user, this application you can only login and logout.</p>

                    <p class="lead">if you want to be able to manage this application,please enter as author or admin</p>
                    @endif

                    @if(Auth::user()->email =="admin@mail.test")
                        <p class="lead">This application you can Crud user</p>
                    @endif
                    @if(Auth::user()->email =="author@mail.test")
                        <p class="lead">This application you can only edit user</p>
                    @endif

                  </div>
                </div>
              </div>
          </div>
@endsection
