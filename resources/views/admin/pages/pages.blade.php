@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">About</h2>
    @if (request()->filled('source') && request()->source == 'add')
        @include('admin.elements._addpage')
    @elseif (request()->filled('source') && request()->source == 'edit' && request()->filled('id'))
        @include('admin.elements._editpage')
    @else
    @include('admin.elements._viewallpage')
    @endif
</div>
@endsection
@section('raw_javascript')
    CKEDITOR.replace('editor1');
@endsection



