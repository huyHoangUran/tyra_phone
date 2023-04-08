<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aroma Shop - Home</title>
    <link rel="icon" href="{{ BASE_URLH }}img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="{{ BASE_URLH }}vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ BASE_URLH }}vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ BASE_URLH }}vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ BASE_URLH }}vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="{{ BASE_URLH }}vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ BASE_URLH }}vendors/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ BASE_URLH }}css/style.css">
</head>

<body>


    @include('client.layouts.nav')
    <main class="site-main">
        @include('client.layouts.slide')


        {{--  --}}
        <section class="section-margin calc-60px">
            @yield('content')
            </div>
        </section>

        <!-- ================ Blog section end ================= -->




    </main>


    <!--================ Start footer Area  =================-->
    @include('client.layouts.footer')

    <!--================ End footer Area  =================-->



    <script src="{{ BASE_URLH }}vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{ BASE_URLH }}vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{ BASE_URLH }}vendors/skrollr.min.js"></script>
    <script src="{{ BASE_URLH }}vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ BASE_URLH }}vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="{{ BASE_URLH }}vendors/jquery.ajaxchimp.min.js"></script>
    <script src="{{ BASE_URLH }}vendors/mail-script.js"></script>
    <script src="{{ BASE_URLH }}js/main.js"></script>
</body>

</html>
