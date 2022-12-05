@extends('layouts.admin-app')

@section('content')
    <div class="container p-5" style="background: rgba(86, 175, 80, 0.3);">
        <div class="w-50 mx-auto bg-danger p-3 mt-5" style="border-radius: 20px">
            <h2 class="text-center text-success fw-bold">Admin Registration</h2>
            <hr>
            <form class="text-light" action="{{ route('admin.save') }}" method="post">
                @csrf
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('failed'))
                    <div class="alert alert-danger">
                        {{ Session::get('failed') }}
                    </div>
                @endif
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        <span class="text-light">@error('name'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        <span class="text-light">@error('email'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <div class="d-flex align-items-center">
                            <p class="bg-secondary p-2 mb-2" style="margin-top: 8px;">+88</p>
                            <input type="text" maxlength="11" class="form-control rounded-0" name="phone" value="{{ old('phone') }}" style="height: 38px">
                        </div>
                        <span class="text-light">@error('phone'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10 text-light">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="m">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="f">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <span class="text-light">@error('gender'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" >
                        <span class="text-light">@error('password'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="confirm_password" >
                        <span class="text-light">@error('confirm_password'){{ $message }} @enderror</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Register</button>
                <br>
                <a class="text-warning" href="{{ route('admin.login') }}">Already have a account, sign in</a>
            </form>
        </div>
    </div>
@endsection