<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.partials.head')
    @livewireStyles
</head>
</head>

<body class="g-sidenav-show bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
@include('layouts.partials.sidebar')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
@include('layouts.partials.nav')
    <!-- End Navbar -->
@yield('content')
@include('layouts.partials.footer')

</main>
<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

@include('layouts.partials.footer-scripts')
@livewireScripts
{{--@yield('script')--}}
 </body>
</html>
