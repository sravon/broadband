@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Package List</h2>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h3 class="text-center text-dark fw-bold p-3">Add Package--</h3>
            @if (Session::get('error'))
              <div class="alert alert-danger">
                  {{ Session::get('error') }}
              </div>
            @endif
            @if (Session::get('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
              </div>
            @endif
            @php
              $message="ddd"
            @endphp
            <form action="{{ route('coverage.register') }}" class="p-3 border border-3" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 fw-bold col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name"  value="">
                      @error('name') <x-alert type="error" message="{{ $message }}"/>
                      @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="address" value="{{ old('address') }} ">
                      @error('address') <x-alert type="error" message="{{ $message }}"/> @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">District</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="district" aria-label="Default select example">
                      <option selected>Select country</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    @error('district') <x-alert type="error" message="{{ $message }}"/> @enderror
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Post Code</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="code">
                    @error('code') <x-alert type="error" message="{{ $message }}"/> @enderror
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone">
                    @error('phone') <x-alert type="error" message="{{ $message }}"/> @enderror
                  </div>
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

