@extends('layouts.partials.head')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple landing page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
  .hiba {
    width: 40%;
    margin: auto;
    display: block;
  }
  </style>
  <link rel="stylesheet" href="vendors/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/css/owl.theme.default.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/aos/css/aos.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">

    </nav>
  </header>

  <div class="container " >
    <div class="row pt-5">
    <div class="col mt-5">
              <h1 class="font-weight-semibold text-center">Welcome to SchoolLab </h1>
              <h6 class="font-weight-normal text-muted pb-3 text-center">Simple is a simple template with a creative design that solves all your marketing and SEO queries.</h6>
              <div class="row justify-content-center" >
                <a href="{{ route('register') }}" class="btn btn-opacity-light mr-1 col-3 ">Register</a>
                <a href="{{ route('login') }}" class="btn btn-opacity-success ml-1 col-3">Login</a>
              </div>
              </div>
            <div class="col">
                  <img src="/img/Group171.svg" alt="" class="img-fluid col-12 h-10">
                </div>
    </div>
  </div>

  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="vendors/aos/js/aos.js"></script>
  <script src="js/landingpage.js"></script>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
