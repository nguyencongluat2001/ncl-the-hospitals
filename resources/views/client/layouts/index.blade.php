
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MEDLATEC CLINIC</title>
    <meta charset="utf-8">
    <base href="{{ asset('') }}">
    @if(request()->isSecure())
    <span></span>
    @else
    <span></span>
    @endif
    <meta href="../clients/img/apple-icon.png" itemprop="image">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../clients/img/apple-icon.png">
    <link rel="icon" href="../clients/img/logo.png" type="image/png">
    <!-- Load Require CSS -->
    {{-- @yield('css') --}}
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/toast.min.css">
    <link href="../assets/css/dashboard.css?v=2.0.4" rel="stylesheet" />

    <!-- <link href="../clients/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Font CSS -->
    <link href="../clients/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="../clients/css/templatemo.css">
    <link rel="stylesheet" href="../clients/css/chat.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../clients/css/custom.css">
    <link rel="stylesheet" href="../assets/chosen/chosen.min.css">
</head>

<style>
    b,
    span,
    strong {
        font-size: 14px;
    }

    body {
        /* background-image: url("../clients/img/bgctys.jpg"); */
        /* background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        background-position: 40% -200px;
        background-attachment: fixed; */
        padding-right:0px;
        padding-left:0px;
    }

    .bgs {
        /* background-image: url("../clients/img/background2.jpg") !important; */
        width: 100%;
        background: #700e13;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bgft {
        /* background-image: url("../clients/img/sequel-background-1.png") !important; */
        width: 100%;
        background: #731b1bde !important;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #menuClient {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .menuClient {
        display: none;
    }

    @media (min-width: 992px) {
        #menuClient {
            display: block;
        }

        .header-logo {
            margin-left: 10%;
        }

        #navbar-toggler-success {
            display: block;
        }
    }

    .navbar-toggler.border-0:focus {
        outline: none;
        box-shadow: none;
    }

    .loader_bg {
        position: fixed;
        z-index: 9999999;
        /* background: #fff; */
        width: 100%;
        height: 100%;
    }

    .loader {
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loader img {
        width: 100px;
    }

    .loader_bg_of {
        display: none;
    }
</style>
<script src="../clients/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets\js\NclLibrary.js') }}"></script>
<script type="text/javascript">
    $('.button').click(function() {
        $('.menu .items span').toggleClass('active');
        $('.menu .button').toggleClass('active');
    });
</script>

<body style="position: relative;">
    <div id="imageLoading" class="loader_bg_of">
        <div class="loader_bg">
            <div class="loader"><img src="../assets/images/loading.gif" alt="#" /></div>
        </div>
    </div>
    @include('client.layouts.menu')
    @yield('body-client')
     <!-- Bootstrap -->
     <script src="../clients/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="../clients/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/placeholderTypewriter.js') }}"></script>
    <!-- Isotope -->
    <script src="../clients/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <script>
        setTimeout(() => {
            $('#imageLoading').addClass("loader_bg_of");
        }, 2000)
    </script>
    <script type="text/jscript" src="../assets/chosen/chosen.min.js"></script>
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css" />
    <script src="../assets/js/sweetalert2.min.js"></script>
    <script type="text/jscript" src="../assets/js/toast.min.js"></script>
    <!-- Templatemo -->
    <script src="../clients/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="../clients/js/custom.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
    @yield('js')
</body>

</html>