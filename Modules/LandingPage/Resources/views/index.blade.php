@extends('landingpage::layouts.master')
@push('style')
    <style>
        .card-video
        {
            text-decoration: none !important;
            color: black;
        }

        .card-video:hover
        {
            text-decoration: none !important;
            color: black;
        }

        section {
            padding: 100px 0 0 0;
        }

        section.hero {
            background: url('img/hero_image.jpg');
            background-size: contain;
            width: 100%;
            height: 875px;
            padding: 0;
        }

        section.hero .container {
            height: 100%;
            padding: 150px 0;
        }

        section.hero .vector {
            position: absolute;
            width: 845px;
            height: 625px;
            right: 0;
        }

        section.hero h1 {
            font-size: 70px;
            font-weight: 700;
            line-height: 82px;
            color: #fff;
        }

        section.hero p {
            font-size: 24px;
            font-weight: 400;
            line-height: 135.2%;
            color: #fff;
        }

        section.hero .hero-button {
            display: inline-block;
            background: #EDBF58;
            font-size: 20px;
            font-weight: 700;
            line-height: 23.44px;
            color: #003152;
            text-decoration: none;
            border-radius: 30px;
            padding: 15px 30px;
        }
    </style>

    <style>
        .card-program-unggulan-sg
        {
            text-decoration: none !important;
            color: #0078B0;
        }

        .card-program-unggulan-sg:hover
        {
            text-decoration: none !important;
            color: #0078B0;
        }

        .sagata-bg-light {
            background: rgba(217, 217, 217, 0.05);
        }

        .sagata-bg-dark-1 {
            background: #00AEEF;
        }

        .sagata-bg-gradient {
            background: linear-gradient(270deg, #00699F, #00AEEF);
        }

        .sagata-color-dark-1 {
            color: #003152;
        }

        .sagata-color-dark-2 {
            color: #292929;
        }

        .sagata-color-dark-3 {
            color: #0078B0;
        }

        .sagata-color-dark-4 {
            color: #000;
        }

        .sagata-color-light-1 {
            color: #b6fffe;
        }

        .sagata-color-light-2 {
            color: #00AEEF;
        }

        .sagata-shadow {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .sagata-banner {
            background: linear-gradient(180deg, #00699F, #00AEEF);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 1244px;
            height: 250px;
        }
    </style>

@endpush
@section('content')
    {{-- Section Hero --}}
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 54px;">
                    <h1>Belajar langsung dari Ahlinya</h1>
                    <p>Bangun karir impian dan asah skill secara profesional dengan mengikuti berbagai pilihan kursus yang terbaik untukmu disini.</p>
                    <a class="hero-button" href="#">
                        Cari Kursus Pilihanmu
                    </a>
                </div>
                <div class="col-md-6">
                    <img class="vector" src="img/hero_vector.png" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Hero --}}

    {{-- Section Card SGA --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card border-0 radius-10px sagata-shadow text-center">
                        <div class="card-body padding-30px">
                            <div class="w-75 mx-auto">
                                <div class="d-flex align-items-center justify-content-center mb-2" style="height: 65px;">
                                    <img src="img/standard.png" alt="">
                                </div>
                                <p class="fs-15px fw-400 mb-0">Materi berstandar pada kebutuhan industri</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 radius-10px sagata-shadow text-center">
                        <div class="card-body padding-30px">
                            <div class="w-75 mx-auto">
                                <div class="d-flex align-items-center justify-content-center mb-2" style="height: 65px;">
                                    <img src="img/easy.png" alt="">
                                </div>
                                <p class="fs-15px fw-400 mb-0">Dapat diakses kapan dan dimana saja</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 radius-10px sagata-shadow text-center">
                        <div class="card-body padding-30px">
                            <div class="w-100 mx-auto">
                                <div class="d-flex align-items-center justify-content-center mb-2" style="height: 65px;">
                                    <img src="img/money.png" alt="">
                                </div>
                                <p class="fs-15px fw-400 mb-0">Biaya course lebih terjangkau bikin hemat pengeluaran</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 radius-10px sagata-shadow text-center">
                        <div class="card-body padding-30px">
                            <div class="w-75 mx-auto">
                                <div class="d-flex align-items-center justify-content-center mb-2" style="height: 65px;">
                                    <img src="img/logo-itb.png" alt="">
                                </div>
                                <p class="fs-15px fw-400 mb-0">Pembelajaran berafiliasi pada ITB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section  Card SGA --}}

    {{-- Section Promo Spesial --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fs-40px fw-700 sagata-color-dark-1" style="margin-bottom: 30px;">Promo Spesial Untuk Kamu Belajar Hari Ini</h2>

                    <div class="sagata-banner radius-10px">
                        <!-- <p class="fw-700 mb-0" style="font-size: 100px;">Banner 1300x250</p> -->
                        <img class="w-100" src="img/sample_banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Promo Spesial --}}

    {{-- Program Unggulan --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fs-40px fw-700 sagata-color-dark-1" style="margin-bottom: 30px;">Program Unggulan SGA</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <a href="{{ '/non-reguler-itb' }}" class="card-program-unggulan-sg" target="_blank">
                        <div class="card sagata-bg-light border-0 radius-10px sagata-shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="d-flex align-items-center justify-content-center" style="height: 40px;">
                                        <img class="h-100" src="img/logo-itb.png" alt="">
                                    </div>
                                    <span class="sagata-color-dark-3 fs-24px fw-500 ms-2">Non Regular ITB</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-4">
                    <a href="{{ '/non-reguler-itb' }}" class="card-program-unggulan-sg" target="_blank">
                        <div class="card sagata-bg-light border-0 radius-10px sagata-shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="d-flex align-items-center justify-content-center" style="height: 40px;">
                                        <img class="h-100" src="img/icon_facetime.png" alt="">
                                    </div>
                                    <span class="sagata-color-dark-3 fs-24px fw-500 ms-2">Webinar</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-4">
                    <a href="{{ '/non-reguler-itb' }}" class="card-program-unggulan-sg" target="_blank">
                        <div class="card sagata-bg-light border-0 radius-10px sagata-shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="d-flex align-items-center justify-content-center" style="height: 40px;">
                                        <img class="h-100" src="img/icon_media_video.png" alt="">
                                    </div>
                                    <span class="sagata-color-dark-3 fs-24px fw-500 ms-2">Video Course</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 mb-4">
                    <a href="{{ '/non-reguler-itb' }}" class="card-program-unggulan-sg" target="_blank">
                        <div class="card sagata-bg-light border-0 radius-10px sagata-shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="d-flex align-items-center justify-content-center" style="height: 40px;">
                                        <img class="h-100" src="img/icon_rocket.png" alt="">
                                    </div>
                                    <span class="sagata-color-dark-3 fs-24px fw-500 ms-2">Bootcamp</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Program Unggulan --}}

    {{-- Section Video Course Populer --}}
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="d-flex align-items-baseline justify-content-between">
                        <div>
                            <h2 class="fs-40px fw-700 sagata-color-dark-1" style="margin-bottom: 30px;">Video Course Populer yang Bisa Kamu Pelajari</h2>
                            <p class="fs-20px fw-400 sagata-color-dark-2">Belajar dan dapatkan sertifikat pembelajarannya!</p>
                        </div>

                        <a class="fs-15px fw-400 radius-15px sagata-color-dark-4 text-decoration-none" href="#" style="border: 1px solid #000; padding: 10px 50px;">Lihat lainnya >></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="javascript:void(0);" class="card-video" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card bg-transparent border-0 radius-15px">
                            <img src="img/thumbnail/sample_thumbnail_1.png" alt="">
                            <div class="card-body" style="padding: 30px 0;">
                                <h3 class="fs-20px fw-700">Mempelajari Digital Marketing Landscape (Advanced)</h3>
                                <div class="mb-3">
                                    <span class="me-2">
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                    </span>
                                    <span class="fs-14px fw-300">(4.8) 923 reviews</span>
                                </div>
                                <div class="d-flex">
                                    <span style="width: 40px; height: 40px; background: #003152; border-radius: 50%;"></span>
                                    <div class="ms-2">
                                        <p class="fs-16px fw-400 mb-0">Irfan Prabowo</p>
                                        <p class="fs-16px fw-300 mb-0">Head of Marketing at Lemonio</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="d-flex align-items-baseline justify-content-end">
                                        <span class="fs-15px fw-300 me-2">Harga</span>
                                        <span class="fs-24px fw-700 sagata-color-dark-3">Rp 49.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="javascript:void(0);" class="card-video" data-bs-toggle="modal" data-bs-target="#exampleModal1" id="modalAngga">
                        <div class="card bg-transparent border-0 radius-15px">
                            <img src="img/thumbnail/sample_thumbnail_2.png" alt="">
                            <div class="card-body" style="padding: 30px 0;">
                                <h3 class="fs-20px fw-700">Mempelajari Digital Marketing Landscape (Beginner)</h3>
                                <div class="mb-3">
                                    <span class="me-2">
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                        <i class="fas fa-star sagata-color-light-1"></i>
                                    </span>
                                    <span class="fs-14px fw-300">(4.9) 542 reviews</span>
                                </div>
                                <div class="d-flex">
                                    <span style="width: 40px; height: 40px; background: #003152; border-radius: 50%;"></span>
                                    <div class="ms-2">
                                        <p class="fs-16px fw-400 mb-0">Angga Fauzan</p>
                                        <p class="fs-16px fw-300 mb-0">CEO and Cofounder at Myskill</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="d-flex align-items-baseline justify-content-end">
                                        <span class="fs-15px fw-300 me-2">Harga</span>
                                        <span class="fs-24px fw-700 sagata-color-dark-3">Rp 39.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <!--- Modal Irfan -->
            <div class="modal fade hide" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mempelajari Digital Marketing Landscape (Advanced)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://drive.google.com/file/d/1AYr7Vuo7KO8r58nnvMtuYamgOgOhnbbH/preview" id="gdriveplayer"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen tabindex="-1" style="width: 100%; height: 250px;"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---End Modal Irfan-->

            <!--- Modal Angga -->
            <div class="modal fade hide" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mempelajari Digital Marketing Landscape (Beginner)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://drive.google.com/file/d/1e6lnq0eCgd721lD5nwFb17N2vRxkA6bk/preview" id="ytplayer"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen tabindex="-1" style="width: 100%; height: 250px;"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---End Modal Angga-->


        </div>
    </section>
    {{-- End Section Video Course Populer --}}

    {{-- Section SGA Bootcamp --}}
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="d-flex align-items-baseline justify-content-between">
                        <div>
                            <h2 class="fs-40px fw-700 sagata-color-dark-1" style="margin-bottom: 30px;">SGA Bootcamp</h2>
                            <p class="fs-20px fw-400 sagata-color-dark-2">Belajar secara intensif selama 3-6 bulan bersama Profesional Expert</p>
                        </div>

                        <a class="fs-15px fw-400 radius-15px sagata-color-dark-4 text-decoration-none" href="#" style="border: 1px solid #000; padding: 10px 50px;">Lihat lainnya >></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card radius-10px sagata-shadow">
                        <div class="card-body padding-25px">
                            <img class="w-100 mb-3" src="img/thumbnail/sample_thumbnail_illustration.png" alt="">
                            <h3 class="fs-24px fw-700">Digital Marketer</h3>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <p class="fs-12px fw-400 sagata-color-dark-2 mb-0">Durasi Program</p>
                                    <p class="fs-12px fw-300 sagata-color-dark-2 mb-0">3 Bulan</p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-12px fw-400 sagata-color-dark-2 mb-0">Jumlah Pertemuan</p>
                                    <p class="fs-12px fw-300 sagata-color-dark-2 mb-0">12 Pertemuan</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block fs-12px fw-400 radius-20px me-1" style="background: #D80707; color: #fff; padding: 5px 10px;">50%</span>
                                    <span class="d-inline-block fs-18px fw-700 sagata-color-light-2">Rp 2.000.000</span>
                                </div>
                                <span class="fs-12px fw-400 text-decoration-line-through">Rp 4.000.000</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn sagata-bg-dark-1 fs-14px fw-700 text-light text-uppercase" style="padding: 10px 7.5px;">Daftar Batch 1</a>
                                <a href="#" class="btn btn-outline-primary fs-14px fw-700 text-uppercase" style="padding: 10px 7.5px;">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section SGA Bootcamp --}}

    {{-- Section SGA Bootcamp Mentor--}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex align-items-baseline justify-content-between">
                        <div>
                            <h2 class="fs-40px fw-700 sagata-color-dark-1" style="margin-bottom: 30px;">SGA Bootcamp</h2>
                        </div>

                        <a class="fs-15px fw-400 radius-15px sagata-color-dark-4 text-decoration-none" href="#" style="border: 1px solid #000; padding: 10px 50px;">Lihat lainnya >></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card radius-10px" style="border: 1px solid rgba(41, 41, 41, 0.5);">
                        <img src="img/sample_mentor_1.png" alt="" style="margin: -1px;">
                        <div class="card-body">
                            <h3 class="fs-24px fw-700 sagata-color-dark-2 mb-0">Angga Fauzan</h3>
                            <p class="fs-20px fw-400 sagata-color-dark-2 mb-0">CEO at Myskill</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card radius-10px" style="border: 1px solid rgba(41, 41, 41, 0.5);">
                        <img src="img/sample_mentor_2.png" alt="" style="margin: -1px;">
                        <div class="card-body">
                            <h3 class="fs-24px fw-700 sagata-color-dark-2 mb-0">Irfan Prabowo</h3>
                            <p class="fs-20px fw-400 sagata-color-dark-2 mb-0">Head of Marketing at Lemonio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section SGA Bootcamp Mentor --}}

    {{-- Section Webinar --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="d-flex align-items-baseline justify-content-between">
                                <div>
                                    <h2 class="fs-40px fw-700 sagata-color-dark-1" style="margin-bottom: 30px;">Webinar</h2>
                                    <p class="fs-20px fw-400 sagata-color-dark-2">Event rutin dari Salam Ganesha Academy yang berkolaborasi dengan para expert</p>
                                </div>

                                <a class="fs-15px fw-400 radius-15px sagata-color-dark-4 text-decoration-none" href="#" style="border: 1px solid #000; padding: 10px 50px;">Lihat lainnya >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card radius-10px">
                        <div class="card-body">
                            <img class="w-100 mb-3" src="img/sample_webinar.png" alt="">
                            <span class="d-inline-block fs-18px fw-700" style="color: #00699F;">Webinar Salam Berbagi</span>
                            <h3 class="fs-20px fw-700 sagata-color-dark-2">Energi Terbarukan Sebagai Solusi Indonesia Net Zero Emmision 2060</h3>
                            <div class="row">
                                <div class="col-6">
                                    <i class="far fa-calendar-alt"></i>
                                    <span class="ms-1">Minggu, 25 Juni 2022</span>
                                </div>
                                <div class="col-6">
                                    <i class="far fa-clock"></i>
                                    <span class="ms-1">14.00 WIB - Selesai</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex align-items-baseline justify-content-end">
                                    <span class="fs-20px fw-400 me-2">Mulai dari</span>
                                    <span class="fs-36px fw-700" style="color: #00AEEF;">Gratis</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Webinar --}}

    {{-- Section Daftar Mentor --}}
    <section class="sagata-bg-gradient" style="color: #fff; padding: 50px 0; margin-top: 100px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img class="w-100" src="img/mentor_vector.png" alt="">
                </div>
                <div class="col-md-7 offset-md-1">
                    <h2 class="fs-48px fw-700 mb-2">Daftar jadi Mentor Belajar Salam Ganesha Academy</h2>
                    <p class="fs-16px fw-700 mb-4">Kamu seorang yang sudah berkarir maupun memiliki pengalaman bertahun lamanya di perusahaan terkemuka? Yuk, ikut daftar jadi mentor baru</p>
                    <a class="d-inline-block fs-16px fw-700 text-decoration-none radius-20px" href="#" style="background: #EDBF58; color: #003152; padding: 10px 50px;">Daftar</a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Daftar Mentor --}}

    {{-- Section Alumni SGA --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fs-48px fw-700 text-center sagata-color-dark-1" style="margin-bottom: 30px;">Alumni SGA Berbicara</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 radius-20px shadow" style="height: 360px;">
                        <div class="card-body">
                            <div class="d-flex h-100">
                                <div class="text-center mt-auto">
                                    <img src="img/sample_alumni_1.png" alt="" style="width: 106px; height: 106px; object-fit: cover; border-radius: 50%; margin-bottom: 10px;">
                                    <h3 class="fs-18px fw-700" style="color: #00AEEF;">Salwa Ramadhani</h3>
                                    <p class="fs-15px fw-400 mb-5">selama aku mengikuti bootcamp, sistem belajarnya ga ngebosenin dan pengajarnya sudah berpengalaman dari Gojek</p>
                                    <p class="fs-15px fw-400 mb-0">Technopreneur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 radius-20px shadow" style="height: 360px;">
                        <div class="card-body">
                            <div class="d-flex h-100">
                                <div class="text-center mt-auto">
                                    <img src="img/sample_alumni_2.png" alt="" style="width: 106px; height: 106px; object-fit: cover; border-radius: 50%; margin-bottom: 10px;">
                                    <h3 class="fs-18px fw-700" style="color: #00AEEF;">Raline</h3>
                                    <p class="fs-15px fw-400 mb-5">sebelumnya aku biasa nemuin online course itu mahal-mahal harganya tapi berbeda dengan di SGA itu harganya terjangkau sekali dan sertifikatnya berlaku untuk karir aku</p>
                                    <p class="fs-15px fw-400 mb-0">Pekerja Kreatif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 radius-20px shadow" style="height: 360px;">
                        <div class="card-body">
                            <div class="d-flex h-100">
                                <div class="text-center mt-auto">
                                    <img src="img/sample_alumni_3.png" alt="" style="width: 106px; height: 106px; object-fit: cover; border-radius: 50%; margin-bottom: 10px;">
                                    <h3 class="fs-18px fw-700" style="color: #00AEEF;">Gibran Rak</h3>
                                    <p class="fs-15px fw-400 mb-5">kemampuanku sebelumnya masih dibawah rata-rata namun setelah aku mengikuti bootcamp, skill diri saya menaik</p>
                                    <p class="fs-15px fw-400 mb-0">Akademisi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Alumni SGA --}}

    {{-- Section Lulusan SGA  karir--}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fs-48px fw-700 text-center sagata-color-dark-1 mb-5">Lulusan SGA telah bekerja di</h2>

                    <div class="text-center">
                        <img src="img/logo_tokopedia.png" alt="">
                        <img src="img/logo_airasia.png" alt="">
                        <img src="img/logo_lazada.png" alt="">
                        <img src="img/logo_alfamart.png" alt="">
                        <img src="img/logo_coach.png" alt="">
                        <img src="img/logo_ismaya.png" alt="">
                        <img src="img/logo_transmart.png" alt="">
                        <img src="img/logo_oyohotel.png" alt="">
                        <img src="img/logo_kulina.png" alt="">
                        <img src="img/logo_thepalace.png" alt="">
                        <img src="img/logo_vans.png" alt="">
                        <img src="img/logo_steak21.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Lulusan SGA karir --}}

    {{-- Section Konsultasi --}}
    <section>
        <div class="container sagata-bg-gradient text-light border-0 radius-30px" style="padding: 75px;">
            <div class="row">
                <div class="col-md-5">
                    <img class="w-100" src="img/consult_vector.png" alt="">
                </div>
                <div class="col-md-7">
                    <h2 class="fs-64px fw-700 mb-4">Yuk, Konsultasikan Karir-mu secara gratis melalui expert kami</h2>
                    <a class="d-inline-block fs-20px fw-700 text-decoration-none radius-20px" href="#" style="background: #EDBF58; color: #003152; padding: 10px 50px;">Klik di sini</a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Konsultasi --}}
@endsection
