
<!-- jQuery  -->
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="{!! asset('js/app.js') !!}"></script>



<!-- App js -->
@yield('page_script_plugins')


<script>
    @yield('raw_javascript')
    
    $(document).ready(function(){
        @yield('jquery')
	})
</script>
