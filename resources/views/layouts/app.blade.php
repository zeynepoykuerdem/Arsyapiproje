<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ars Yapı ve Proje </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- dark-theme-->
    <link id="dark-theme-style" rel="stylesheet" />
    <!-- Favicons -->
    <link href="{{asset("img/favicon.png")}}" rel="icon">
    <link href="{{asset("img/apple-touch-icon.png")}}" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/fontawesome-free/css/fontawesome.css/fontawesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/aos/aos.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("vendor/flaticon/flaticon.css")}}">

    <!-- Template Main CSS File -->
    <link href="{{asset("css/main.css")}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6ba5b277e3.js" crossorigin="anonymous"></script>

</head>
<body>
@include('layouts.navbar')

@yield('content')

@include('layouts/footer')

<!-- Include your footer or other common elements here -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("vendor/aos/aos.js")}}"></script>
<script src="{{asset("vendor/glightbox/js/glightbox.min.js")}}"></script>
<script src="{{asset("vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("vendor/swiper/swiper-bundle.min.js")}}"></script>
<script src="{{asset("vendor/purecounter/purecounter_vanilla.js")}}"></script>
<script src="{{asset("vendor/php-email-form/validate.js")}}"></script>

<!-- Template Main JS File -->
<script src="{{asset("js/main.js")}}"></script>
<script src="{{asset("js/index.js")}}"></script>


</body>
</html>
