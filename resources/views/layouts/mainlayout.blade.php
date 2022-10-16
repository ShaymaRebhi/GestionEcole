<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
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
@include('layouts.partials.footer-scripts')
 </body>
</html>
