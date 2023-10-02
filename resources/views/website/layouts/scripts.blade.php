<script src="{{ asset('website/assets/js/code.jquery.com_jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('website/assets/js/stackpath.bootstrapcdn.com_bootstrap_4.3.1_js_bootstrap.min.js') }}"></script>
<script src="{{ asset('website/assets/js/code.jquery.com_jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('website/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/assets/js/cdn.jsdelivr.net_npm_popper.js@1.12.9_dist_umd_popper.min.js') }}"></script>
<script src="{{ asset('website/assets/js/cdn.jsdelivr.net_npm_bootstrap@4.0.0_dist_js_bootstrap.min.js') }}"></script>
<script src="{{ asset('website/assets/js/custom.js') }}"></script>
<script src="{{ asset('website/assets/js/navbar-script.js') }}"></script>
<script src="{{ asset('website/assets/js/code.jquery.com_jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('website/assets/js/cdnjs.cloudflare.com_ajax_libs_uikit_3.0.2_js_uikit.min.js') }}"></script>
<script src="{{ asset('website/assets/js/main.js') }}"></script>
<script src="{{ asset('website/assets/js/cdn.jsdelivr.net_npm_select2@4.1.0-rc.0_dist_js_select2.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



@if (session('msg'))
<script>
    Swal.fire(
    'تمت العملية بنجاح !',
    '{{ session("msg") }}',
    'success'
    )
</script>
@endif


@yield('scripts')
