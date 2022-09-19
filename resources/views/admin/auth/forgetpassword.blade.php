@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <div class="w-50 mx-auto bg-secondary p-2 mt-5">
            <h2 class="text-center text-light">Recover Password</h2>
            @if (Session::get('error') || Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }} {{ Session::get('fail') }}
                    </div>
            @endif
            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form class="form-horizontal" action="{{ route('admin.auth.forgetpassword') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-primary">
                            <h5>Enter your <b>Email</b> and instructions will be sent to you!</h5>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-0">
                        <button class="btn btn-danger">Send Mail</button>
                    </div>
                    <div class="col-12 text-center">
                        <p class="mb-0 mt-3"><h6>Or go to  <a href="{{ route('admin.login') }}" class="text-dark font-weight-bold">Sign In</a></h6></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection