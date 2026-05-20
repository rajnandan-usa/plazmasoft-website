<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('admin/vendor/libs/jquery/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('admin/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('admin/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/ckeditor/ckeditor.js') }}"></script>

{{-- filepond  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.32.1/filepond.min.js"
    integrity="sha512-clggEUZ2GsOGilTqwnU+10y6RBsvY1ZOjRLssejZDjAyWms2jlvK3ZKAWqNyN8C4Uu4o817CKOr/108wNXb4aQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Main JS -->
<script src="{{ asset('admin/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('admin/js/dashboards-analytics.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>

<script src="{{ asset('common/js/main.js') }}"></script>

@stack('scripts')

<script>
    alertify.set('notifier', 'position', 'top-right');
    alertify.set('notifier', 'delay', 10);
    @if (session('success'))
        alertify.success("{{ session('success') }}");
    @endif

    @if (session('error'))
        alertify.error("{{ session('error') }}");
    @endif

    @if (session('warning'))
        alertify.warning("{{ session('warning') }}");
    @endif

</script>
