<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8" />
    <!-- set the Compatible of your site -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- set the page title -->
    <title>@yield('title')</title>
    <!-- include the site Google Fonts stylesheet -->
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&display=swap"
        rel="stylesheet" />
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <!-- include the site fontawesome stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- include theme plugins setting stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <!-- include theme color setting stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/color.css') }}" />
    <!-- include theme responsive setting stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body>
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- header -->
        <header id="header" class="position-relative">

            <!-- headerHolder -->
            <div class="headerHolder container pt-lg-5 pb-lg-7 py-4">
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <!-- mainLogo -->
                        <div class="logo">
                            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Botanical"
                                    class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-7 col-lg-8 static-block">
                        <!-- mainHolder -->
                        @include('menu')
                    </div>
                    <div class="col-sm-3 col-lg-2">
                        <!-- wishListII -->
                        <ul class="nav nav-tabs wishListII pt-5 justify-content-end border-bottom-0">
                            <li class="nav-item ml-0"><a class="nav-link icon-search" href="javascript:void(0);"></a>
                            </li>
                            <li class="nav-item"><a class="nav-link position-relative icon-cart"
                                    href="javascript:void(0);"><span class="num rounded d-block">2</span></a></li>
                            <li class="nav-item"><a class="nav-link icon-profile" href="javascript:void(0);"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- main -->
        <main>
            @yield('content')
        </main>
        <!-- footer -->
        <footer id="footer" class="overflow-hidden bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 copyRightHolder v-II text-center pt-md-3 pb-md-4 py-2">
                        <p class="mb-0">Coppyright 2019 by <a href="javascript:void(0);">Botanical Store</a> - All
                            right reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- include bootstrap popper JavaScript -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- include bootstrap JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- include custom JavaScript -->
    <script src="{{ asset('js/jqueryCustome.js') }}"></script>

</body>

</html>
