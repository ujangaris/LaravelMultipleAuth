@extends('admin.layouts.master')

@section('content')
<div class="section-header">
    <h1>Edit  User</h1>
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">All user</a></div>
    <div class="breadcrumb-item">Edit user</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.users.update', $user) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name ?? old('name') }}" required  autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                <div class="col-md-6">
                    @foreach($roles as $role)
                    <div class="form-checkbox">
                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                        @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                        <label for="">{{ $role->name }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button></button>
        </form>
    </div>
</div>
@endsection
