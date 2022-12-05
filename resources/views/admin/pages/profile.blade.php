@extends('admin.layouts.master')
@section('main_content')
<section class="container-fluid" style="padding:0;max-height:200px;display:inline;opacity: 0.7;z-index:3">
	<img src="{{ asset('assets/feature/cover.jpg') }}" style="width:100%;height: 200px;">
</section>

<section class="container-fluid bg-transparent" style="z-index: 9">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<div class="d-flex justify-content-between align-items-center">
					<img style="margin-top: -18px;z-index:999;width: 200px;height: 200px;" class="img-fluid rounded-circle" src="{{
						asset(Auth::user()->image ? Auth::user()->image : 'assets/logo/profile.png') }}">
					<div>
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Change Password
						</button>
						<x-modal 
							type="editmodal" 
							name="Profile Edit"
							route="profile.update,id=>{{ Auth::user()->id }}" 
							title="profile Edit" id="{{ Auth::user()->id }}"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr>
<section class="container-fluid">
	<div class="w-50 mx-auto">
		@if ( Session::get('fail'))
			<x-alert type="error" message="{{ Session::get('fail') }}"/>
		@endif
		@if (Session::get('successed'))
			<x-alert type="success" message="{{ Session::get('successed') }}"/>
		@endif
	</div>
	<div class="row">
		<div class="col-md-4 mx-auto">
			<p class="h2 mt-2 text-center text-info">Profile Information</p>
            <hr>
			<table class="table table-hover">
			  	<tbody>
				    <tr>
				      <td>Name :</td>
				      <td>{{ Auth::user()->name; }}</td>
				    </tr>
				    <tr>
				      <td>Email :</td>
				      <td>{{ Auth::user()->email; }}</td>
				    </tr>
				    <tr>
				      <td>Gender :</td>
				      <td>{{ Auth::user()->gender == 'm' ? 'Male' : 'Female'; }}
				  		</td>
				    </tr>
					<tr>
						<td>Role :</td>
						<td class="text-danger fw-bold">{{ strtoupper(Auth::user()->role); }}</td>
					  </tr>
				    <tr>
				      <td>Phone :</td>
				      <td>{{ Auth::user()->phone; }}</td>
				    </tr>
			  	</tbody>
			</table>
		</div>
	</div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<form action="{{ route('profile.changepassword') }}" method="post">
				@csrf
				<div>
					<label for="inputPassword5" class="form-label">Current Password</label>
					<input type="password" name="currentpassword" id="inputPassword5" class="form-control" >
				</div>
				<div>
					<label for="inputPassword5" class="form-label">New Password</label>
					<input type="password" name="newpassword" class="form-control" >
				</div>
				<div>
					<label for="inputPassword5" class="form-label">Confirm Password</label>
					<input type="password" name="confirmpassword" class="form-control" >
				</div>
				<br>
				<button class="btn btn-primary" type="submit" name="submit">update</button>
			</form>
		</div>
	  </div>
	</div>
  </div>
@endsection
@section('jquery')
	
	$('.editbtn').on('click',function(){
		$('#editmodal').modal('show');
		$tr = $(this).closest('tr');
		let id = $(this).attr('id');
		console.log(id);
		let check =`<input type="hidden" name="id" value="${id}">`
		check +=`<x-input name="name" label="Your Name" inputvalue="{{ Auth::user()->name }}" />`
		
		check +=`<label class="fw-bold" for="Gender">Gender</label>`
		check +=`<div><input class="p-2" type="radio" id="html" checked name="gender" value="m"><label class="p-2" for="html">Male</label>`
		check +=`<input class="p-2" type="radio" id="css" name="gender" value="f"><label class="p-2" for="css">Female</label></div>`
		
		check +=`<img src="${host_url}/{{Auth::user()->image}}" alt="image" width="100">`
		check +=`<x-input name="image" datatype="file" label="Change profile image" />`
		check +=`<x-input maxlengthv="11" name="phone" label="Your phone number" inputvalue="{{ Auth::user()->phone }}" />`
		check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
		$("#editdata").html(check);
	})
@endsection
