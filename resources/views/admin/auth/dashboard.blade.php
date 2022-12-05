@extends('admin.layouts.master')
@section('main_content')
<div class="row p-2">
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-ticket text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">Package List</h2>
            </div>
            <hr>
            <a href="{{ route('admin.package') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-codiepie text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">Corporate List</h2>
            </div>
            <hr>
            <a href="{{ route('corporate.index') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-ticket text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">District List</h2>
            </div>
            <hr>
            <a href="{{ route('district.index') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-codiepie text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">Bank List</h2>
            </div>
            <hr>
            <a href="{{ route('bank.index') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-user text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">Account List</h2>
            </div>
            <hr>
            <a href="{{ route('accounts.index') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-codiepie text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">pay Bill</h2>
            </div>
            <hr>
            <a href="{{ route('pays.index') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-user text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">User List</h2>
            </div>
            <hr>
            <a href="{{ route('users.index') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-contao text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">Contacts</h2>
            </div>
            <hr>
            <a href="{{ route('contacts.index') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="bg-secondary h-100 p-2">
            <div class="d-flex justify-content-between align-items-center p-2">
                <i class="fa fa-globe text-light" style="font-size: 30px"></i>
                <h2 class="text-warning">Social Media</h2>
            </div>
            <hr>
            <a href="{{ route('social_media.index') }}" class="btn btn-primary pull-right p-2 mb-2">View</a>
        </div>
    </div>
</div>
@endsection

