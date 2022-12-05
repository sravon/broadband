@extends('guest.layouts.master')
@section('page_style_plugins')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endsection
@section('main_content')
<x-feature title="Conact" name="{{ $featureimage->image }}" />
<section class="container-fluid mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if ( Session::get('fail'))
                    <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
                @endif
                @if (Session::get('success'))
                    <x-alert type="success" message="{{ Session::get('successed') }}"/>
                @endif
                <h2 class="text-center">Let's Talk about Your Business</h2>
                <div class="bg-danger w-25 mx-auto" style="height: 2px;"></div>
                <form action="{{ route('guest.contacts.email') }}" method="post" class="bg-light" style="padding: 10px">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label class="text-dark h5">First Name</label>
                            <input type="text" required class="form-control" name="firstname" placeholder="First name">
                        </div>
                        <div class="col">
                           <label class="text-dark h5">Last Name</label>
                           <input type="text" name="lastname" required class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="text-dark h5">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="examplel@mail.com">
                        </div>
                        <div class="col">
                            <label class="text-dark h5">Mobile Number</label>
                            <input type="text" name="phone" maxlength="11" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="text-dark h5">Subject</label>
                            <input type="text" name="subject" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="text-dark h5">Message: </label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="message" class="textArea form-control"></textarea>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="col-md-4 ">
                @foreach ($contacts as $item)
                    <x-contact title="{{ $item->title }}" array="{{ $item->description }}" />
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection