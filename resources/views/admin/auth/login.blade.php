@extends('layouts.admin-app')

@section('content')
    <div class="container p-5" style="background: rgba(86, 175, 80, 0.3);">
        <div class="w-50 mx-auto bg-danger p-2 mt-5" style="border-radius: 20px">
            <h2 class="text-center display-2 text-light"><i class="fa fa-user-circle-o" aria-hidden="true"></i></h2>
            <h2 class="text-center text-light">Login || Admin Panel</h2>
            <hr>
            @if (Session::get('error') || Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }} {{ Session::get('fail') }}
                    </div>
            @endif
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form action="{{ route('admin.auth') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="staticEmail" class="h2 col-sm-2 col-form-label text-light fw-bold" style="font-size: 22px;padding-left: 30px;">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " name="email" value="{{ old('email') }}">
                        <span class="text-light">@error('email'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label text-light fw-bold" style="font-size: 21px;padding-left: 13px;">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                        <span class="text-light">@error('password'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a class="text-muted me-2" href="{{ route('admin.forgetpassword') }}">Forget Password ?</a>
                    <button type="submit" class="btn btn-lg btn-primary">login</button>
                </div>
                <br>
                <a class="text-light p-3" href="{{ route('admin.register') }}">create a account, sign up</a>
            </form>
        </div>
    </div>
@endsection