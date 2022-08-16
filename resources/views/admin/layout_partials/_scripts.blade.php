
<!-- jQuery  -->
<script src="{!! asset('js/app.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/bootstrap.bundle.min.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/modernizr.min.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/detect.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/fastclick.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/jquery.slimscroll.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/jquery.blockUI.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/waves.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/jquery.nicescroll.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/jquery.scrollTo.min.js') !!}"></script>
<script src="{!! asset('assets/backend/admin/js/sweetalert.min.js') !!}"></script>


<!-- App js -->

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
@yield('page_script_plugins')


<script>
    $(document).ready(function(){
		$('#sidebarCollapse').on('click',function(){
			$('#sidebar').toggleClass('active');
		})
        @yield('page_scripts')
	})
    
    // @if (Session::has('success'))
    //     swal({
    //         title: "Success!",
    //         text: "{!! Session::get('success') !!}",
    //         icon: "success",
    //         button: "Close",
    //     });
    // @endif
</script>
