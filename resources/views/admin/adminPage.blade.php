<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Fonts -->
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ url('css/common.css') }}">
    <link rel="stylesheet" href="{{ url('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ url('css/sidebar.css') }}">
    <!-- Styles -->
    <script src="assets/vendor/ckeditor5/build/ckeditor.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 sidebar-col">

                <!-----left sidebar---->
                @include('common.leftSide')

                <!-----left sidebar ---->
            </div>
            <div class="col-sm-9 dashboard-col">
                <!--navbar -->
                @include('common.navbar')
                <!-- navbar -->
                <!-----dashboard---->
                <div class="dashboard-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
{{-- <script>
    document.getElementById('them').addEventListener('click', function() {
        window.location.href = '{{ route('thembaiviet') }}';
    });
</script> --}}
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/datatables.min.js"></script>
<script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
