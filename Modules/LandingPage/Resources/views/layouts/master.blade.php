<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SG-ACADEMY @yield('title')</title>

        {{-- FavIcon --}}
        <link rel='icon' href='{{ url('img/SGA-ICON.png') }}' type='image/x-icon' sizes="32x32" />
        {{-- End FavIcon --}}

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>

        <style>
            body,html
            {
                scroll-behavior: smooth;
                font-family: 'Roboto';
            }
            .navbar-sg-academy
            {
                position: relative;
                width: 100%;
                z-index: 999;
                background: white !important;
            }
            .navbar-sg-academy.fixed
            {
                position: fixed;
                top: 0;
            }
            .img-nav
            {
                height: 54 !important;
            }

            .menu-link
            {
                color: black;
                margin-top: 10px;
            }

            .navbar-light .navbar-nav .nav-link
            {
                color: black;
            }

            .navbar-light .navbar-nav .nav-link:hover
            {
                color: #00AEEF;
            }

            .item-right
            {
                padding-top: 4px;
            }

            .btn-nav
            {
                margin-top: 4px;
            }

            .icon-navbar
            {
                padding-top: 8px;
            }

            .icon-nav
            {
                text-decoration: none;
                color: black;
            }

            .btn-nav-login
            {
                margin-left: 44px;
                margin-right: 24px;
                padding-top: 2px;
                padding-bottom: 4px;
                padding-right: 24px;
                padding-left: 24px;
                border: 2px solid #00AEEF
            }

            .btn-nav-daftar
            {
                padding-top: 2px;
                padding-bottom: 4px;
                padding-right: 24px;
                padding-left: 24px;
                background: #00AEEF;
                border: 2px solid #00AEEF;
                color: white;
            }
            section.footer{
                padding: 0 0 0 0;
            }
            .footer-row-menu
            {
                padding-top: 64px;
                --bs-gutter-x: 1.8rem !important;
            }

            .title-footer
            {
                font-family: 'Roboto';
                font-size: 24px;
                font-weight: 400;
            }

            .menu-footer
            {
                list-style: none;
                padding: 0px 0px 0px 0px;
            }

            .menu-link-footer
            {
                margin-bottom: 8px;
            }

            .icon-footer
            {
                margin-right: 24px;
            }

            .link-icon-footer
            {
                text-decoration: none !important;
                color: #292929;
            }

            @media(max-width: 767px)
            {
                .icon-navbar
                {
                    padding-bottom: 10px;
                }
                .btn-nav-login
                {
                    margin-left: 0px;
                    margin-right: 0px;
                    margin-bottom: 10px;
                }
            }
            .w-50
            {
                width: 50% !important;
            }
            .fs-12px {
            font-size: 12px !important;
            }

            .fs-13px {
                font-size: 13px !important;
            }

            .fs-14px {
                font-size: 14px !important;
            }

            .fs-15px {
                font-size: 15px !important;
            }

            .fs-16px {
                font-size: 16px !important;
            }

            .fs-18px {
                font-size: 18px !important;
            }

            .fs-20px {
                font-size: 20px !important;
            }

            .fs-24px {
                font-size: 24px !important;
            }

            .fs-30px {
                font-size: 30px !important;
            }

            .fs-36px {
                font-size: 36px !important;
            }

            .fs-40px {
                font-size: 40px !important;
            }

            .fs-48px {
                font-size: 48px !important;
            }

            .fs-64px {
                font-size: 64px !important;
            }

            .fw-100 {
                font-weight: 100 !important;
            }

            .fw-200 {
                font-weight: 200 !important;
            }

            .fw-300 {
                font-weight: 300 !important;
            }

            .fw-400 {
                font-weight: 400 !important;
            }

            .fw-500 {
                font-weight: 500 !important;
            }

            .fw-600 {
                font-weight: 600 !important;
            }

            .fw-700 {
                font-weight: 700 !important;
            }

            .fw-800 {
                font-weight: 800 !important;
            }

            .fw-900 {
                font-weight: 900 !important;
            }

            .radius-0px {
                border-radius: 0px !important;
            }

            .radius-5px {
                border-radius: 5px !important;
            }

            .radius-10px {
                border-radius: 10px !important;
            }

            .radius-15px {
                border-radius: 15px !important;
            }

            .radius-20px {
                border-radius: 20px !important;
            }

            .radius-25px {
                border-radius: 25px !important;
            }

            .radius-30px {
                border-radius: 30px !important;
            }

            .padding-0px {
                padding: 0px !important;
            }

            .padding-5px {
                padding: 5px !important;
            }

            .padding-10px {
                padding: 10px !important;
            }

            .padding-15px {
                padding: 15px !important;
            }

            .padding-20px {
                padding: 20px !important;
            }

            .padding-25px {
                padding: 25px !important;
            }

            .padding-30px {
                padding: 30px !important;
            }
        </style>
        @stack('style')

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-sg-academy fixed" id="testing">
                <div class="container">
                    <div class="col-6 col-md-2">
                        <a class="navbar-brand" href="#"><img src="{{ url('img/logo_sga_teks-1.png') }}" class="img-fluid img-nav" alt=""></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="menu-link col-md-8 justify-content-center">
                            <ul class="navbar-nav justify-content-between" style="margin-block-start: 0px!important; padding-inline-start: 0px !important; padding: 0px !important;">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Webinar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Program</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Corporate Program</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="item-right navbar-nav justify-content-end">
                                <li class="icon-navbar nav-item">
                                    <a class="icon-nav" href="#">
                                        <i class="fa-solid fa-cart-shopping fa-xl"></i>
                                    </a>
                                </li>
                                @guest
                                <li class="btn-nav nav-item">
                                    <a class="btn btn-nav-login" href="#">Login</a>
                                </li>

                                <li class="btn-nav nav-item">
                                    <a class="btn btn-nav-daftar" href="#">Daftar</a>
                                </li>
                                @endguest
                                @auth
                                <li class="btn-nav nav-item">
                                    <a class="btn btn-nav-login" href="#">Login</a>
                                </li>

                                <li class="btn-nav nav-item">
                                    <a class="btn btn-nav-daftar" href="#">Daftar</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <section class="footer" style="background: rgba(217, 217, 217, 0.2);">
                <div class="container">
                    <div class="row align-self-center footer-row-menu">
                        <div class="col-md-12">
                            <div class="row justify-content-between">
                                <div class="col-md-2">
                                    <h3 class="title-footer mb-3">ABOUT US</h3>
                                    <ul class="menu-footer">
                                        <li class="menu-link-footer">Tentang Kami</li>
                                        <li class="menu-link-footer">Alumni</li>


                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="title-footer mb-3">LAYANAN</h3>
                                    <ul class="menu-footer">
                                        <li class="menu-link-footer">Online Class</li>
                                        <li class="menu-link-footer">Bootcamp</li>
                                        <li class="menu-link-footer">Webinar</li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="title-footer mb-3">JOIN GRUP</h3>
                                    <ul class="menu-footer">
                                        <li class="menu-link-footer">Whatsapp</li>
                                        <li class="menu-link-footer">Telegram</li>

                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="title-footer mb-3">Help Desk</h3>
                                    <ul class="menu-footer">
                                        <li class="menu-link-footer">FAQ</li>
                                        <li class="menu-link-footer">Ketentuan Layanan</li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="title-footer mb-3">Social Media</h3>
                                    <ul class="menu-footer d-flex justify-content-start">
                                        <li class="icon-footer">
                                            <a href="" class="link-icon-footer">
                                                <img src="img/Vector.png" alt="" class="img-fluid">
                                            </a>
                                        </li>
                                        <li class="icon-footer">
                                            <a href="" class="link-icon-footer">
                                                <img src="img/instagram 1.png" alt="" class="img-fluid">
                                            </a>
                                        </li>
                                        <li class="icon-footer">
                                            <a href="" class="link-icon-footer">
                                                <img src="img/linkedin 1.png" alt="" class="img-fluid">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12 d-flex justify-content-center mt-4 mb-3">
                            <img class="img-fluid" src="{{ url('img/logo_sga_teks-1.png') }}" alt="" style="width: 114px; height: 39px;">
                            <h3 style="font-size: 14px; font-weight: 400; margin-top: 12px;">PT. Salam Kreasi Ganesha. 2022</h3>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        
        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

        <script>
            $('#exampleModal1').on('hide.bs.modal', () => {
                $('#ytplayer').attr('src', 'https://drive.google.com/file/d/1e6lnq0eCgd721lD5nwFb17N2vRxkA6bk/preview');
            });

            $('#exampleModal').on('hide.bs.modal', () => {
                $('#gdriveplayer').attr('src', 'https://drive.google.com/file/d/1AYr7Vuo7KO8r58nnvMtuYamgOgOhnbbH/preview');
            });

            $(window).scroll(function (){
                var wScroll = $(this).scrollTop();
                if (wScroll > 0 ){
                    $('#testing').css('box-shadow', '0px 10px 8px -3px rgba(0,0,0,0.33)');
                }else{
                    $('#testing').css('box-shadow', 'none');
                }
            });

        </script>
        @stack('script')
    </body>
</html>
