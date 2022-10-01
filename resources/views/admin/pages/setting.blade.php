@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Settings</h2>
    <div class="row">
        <div class="col-md-12">
            @if ( Session::get('fail'))
            <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
          @endif
          @if (Session::get('successed'))
            <x-alert type="success" message="{{ Session::get('successed') }}"/>
          @endif
            <div class="p-3 border border-3" >
                <x-input name="name" readonly="true" label="Title" place="Enter Name" inputvalue="{{ $setting->name }}"/>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Logo :</label>
                    <div>
                        <img width="200" src="{{ asset($setting->logo) }}" alt="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Icon :</label>
                    <div>
                        <img width="50" src="{{ asset($setting->icon) }}" alt="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description :</label>
                    <p>{{ $setting->description }}</p>
                </div>
                <x-modal 
              type="editmodal" 
              route="settings.update,setting=>{{ $setting->id }}" 
              title="Edit Data" id="{{ $setting->id }}"/>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jquery')
  
  $('.editbtn').on('click',function(){
    $('#editmodal').modal('show');
    check =`<x-input name="name" label="District Name" inputvalue="{{ $setting->name }}" />`
    check +=`<label for="logo" class="form-label fw-bold">Logo :</label>`
    check +=`<img src="{{ asset($setting->logo) }}" width="200" alt="banks">`
    check +=`<x-input name="logo" label="choose logo image(Optional)" datatype="file" />`
    check +=`<label for="ico" class="form-label fw-bold">Icon :</label>`
    check +=`<img src="{{ asset($setting->icon) }}" width="50" alt="banks">`
    check +=`<x-input name="icon" label="choose icon image(Optional)(Max width and height 100px)" datatype="file" />`
    check +=`<label for="ico" class="form-label fw-bold">Description :</label>`
    check +=`<textarea name="description" cols="40" rows="6">{{ $setting->description }}</textarea><br>`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection




