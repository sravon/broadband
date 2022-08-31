@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">About</h2>
    <div class="row">
        <div class="col-md-12">
            @if ( Session::get('fail'))
            <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
          @endif
          @if (Session::get('successed'))
            <x-alert type="success" message="{{ Session::get('successed') }}"/>
          @endif
            <form action="{{ route('about.update',['about' => 1]) }}" class="p-3 border border-3" method="post">
                @csrf
                {{ method_field('PUT') }}
                <x-input name="name" label="Title" place="Enter Name" inputvalue="{{ $about->title }}"/>
                <div class="mb-3">
                    <label for="mission" class="form-label fw-bold">Mission</label>
                    <textarea name="mission" class="form-control" rows="15">{{ $about->mission }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="mission" class="form-label fw-bold">Vission</label>
                    <textarea name="vission" class="form-control" rows="15">{{ $about->vision }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea name="editor1" >{{ $about->description }}</textarea>
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('raw_javascript')
    CKEDITOR.replace('editor1');
@endsection



