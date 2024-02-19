<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Manajemen Proyek - PT. Saklawase Indonesia</title>

    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    <!--navbar-->
    <div>
        @include('includes.navbar')
        <!--end-navbar-->
        <!--section1-->
        @yield('content')
        <!--end-section1-->
        @include('includes.script')
    </div>
</body>

</html>
