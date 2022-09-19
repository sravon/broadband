@extends('layouts.admin-app')

@section('content')
<section class="container-fluid container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="login-page bg-white shadow rounded p-4">

                <div class="text-center">
                    <h4 class="mb-4">Recover Password</h4>
                </div>

                <div class="">
                    <form class="form-horizontal" action="{!! route('admin.auth.postResetPasswordVerify') !!}" method="post">
                        @csrf
                        <input type="text" name="reset_token" value="{!! request()->token !!}">

                        <div class="form-group mb-3">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Enter New Password">
                                @if($errors->has('password'))
                                    <span class="text-danger">{!! $errors->first('password') !!}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group  mb-3">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password_confirmation" required="" placeholder="Enter Password Again">
                                @if($errors->has('password_confirmation'))
                                    <span class="text-danger">{!! $errors->first('password_confirmation') !!}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group text-center row mt-2">
                            <div class="col-12">
                                <button class="btn btn-warning"><span>Update Password</span></button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20 text-center">
                        <a href="{!! route('admin.login') !!}" class="text-muted">Back to login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection