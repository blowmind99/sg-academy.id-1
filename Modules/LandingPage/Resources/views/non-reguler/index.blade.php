@extends('landingpage::layouts.master')
@section('title', '- Non Reguler ITB')
@push('style')
    <style>
        section
        {
            padding: 100px 0 0 0;
        }
        section.hero-non-reguler
        {
            background: url('img/non-reguler/non-reguler-hero.png');
            background-size: contain;
            width: 100%;
            height: 840px;
        }

        section.hero-non-reguler .btn-hero-nr {
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

        section.banner-nr
        {
            background: url('img/non-reguler/banner-nr.png');
            background-size: cover;
            background-repeat: no-repeat;
            height: 188px;
            width: 100%;
        }

        section.banner-nr
        {
            padding: 54px 0 0 0;
        }

        .text-banner
        {
            line-height: 23px;
            display: flex;
            align-items: center;
            color: #003152;
            width: 37.5%;
            float: right;
        }

        section.prodi
        {
            height: auto;
        }

        section.title-prodi
        {
            line-height: 38px;
        }

        .card-program-studi
        {
            border-radius: 15px;
            border: none;
        }

        .card-body-program-studi
        {
            background-color: white;
            border-radius: 15px;
            margin-top: -18px;
            box-shadow: 0px 9px 8px -3px rgba(0,0,0,0.33);
            -webkit-box-shadow: 0px 9px 8px -3px rgba(0,0,0,0.33);
            -moz-box-shadow: 0px 9px 8px -3px rgba(0,0,0,0.33);
        }

        .card-title-prodi
        {
            line-height: 18px;
            color: white;
            width: 80%;
        }
        /* .conten-card-prodi
        {
            height: 128px;
            margin-bottom: 12px;
        } */

        .btn-prodi
        {
            background: #FFB724;
            border-radius: 20px;
            color: #003152;
            font-weight: 600;
            font-size: 15px;
            line-height: 18px;
            text-decoration: none;
            padding: 6px 28px 6px 28px;
            margin-bottom: 27px;
        }

        .card-text-body-prodi
        {
            font-weight: 600;
            font-size: 15px;
            line-height: 18px;
            color: #000000;
        }

        .card-list-body-prodi
        {
            font-weight: 600;
            font-size: 14px;
            line-height: 16px;
            color: #5C5C5C;
            height: 100px;
        }
        .card-img-overlay-prodi
        {
            position: absolute;
            top: 0;
            right: 0;
            /* bottom: 0; */
            left: 0;
            padding: 1rem;
            border-radius: calc(0.25rem - 1px);
        }

        .solusi-title-card-prodi
        {
            font-weight: 600;
            font-size: 20px;
            line-height: 23px;
            color: #FFFFFF;
        }

        .solusi-sub-card-prodi
        {
            font-weight: 300;
            font-size: 16px;
            line-height: 19px;
            color: #FFFFFF;
        }

        .solusi2-title-card-prodi
        {
            font-weight: 600;
            font-size: 20px;
            line-height: 23px;
            color: #000000;
        }

        .solusi2-sub-card-prodi
        {
            font-weight: 300;
            font-size: 16px;
            line-height: 19px;
            color: #000000;
        }

        .btn-solusi
        {
            font-weight: 600;
            font-size: 15px;
            line-height: 18px;
            align-items: center;
            text-align: center;
            color: #003152;
            background: #FFFFFF;
            border-radius: 20px;
            padding: 6px 48px 6px 48px;
        }

        @media (max-width: 767px)
        {
            section.banner-nr
            {
                padding: 24px 0 0 0;
            }
            section.banner-nr
            {
                background: url('img/non-reguler/banner-nr.png');
                background-size: cover;
                background-size: auto 138px;
                background-repeat: no-repeat;
                height: auto;
                width: 100%;

            }
            section.prodi
            {
                height: auto;
            }
            .title-hero-nr
            {
                font-size: 24px;
                width: 100% !important;
            }

            .text-banner
            {

                font-size: 12px;
                color: black;;
                float: right;
                width: 66.5%;
            }
            .card-img-prodi
            {
                height: 250px;
            }

            .card-body-program-studi
            {
                margin-top: -48px;
            }
        }

    </style>
@endpush
@section('content')
    <section class="hero-non-reguler">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="hero-img-nr mb-4" style="margin-top: 187px;">
                        <img src="{{ url('img/non-reguler/hero-img-nr.png') }}" alt="">
                    </div>
                    <div class="hero-text-nr">
                        <h3 class="title-hero-nr fs-40px fw-800 text-white w-50 mb-3">SELAMAT DATANG DI PROGRAM NON REGULER ITB</h3>
                        <a class="btn btn-hero-nr mb-4" href="#">Cari Program Studi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-nr">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 text-start align-content-end">
                    <p class="text-banner fs-24 fw-600" >Program ini bertujuan untuk memberikan akses lebih besar kepada masyarakat Indonesia terhadap layanan pembelajaran ITB khusunya untuk mata kuliah-mata kuliah tingkat Magister.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="prodi">
        <div class="container">
            <div class="row mb-lg-4">
                <div class="col-12 col-md-12">
                    <h3 class="title-prodi fs-32 fw-700">Pilih Program Studi</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card card-program-studi">
                        <img src="{{ url('img/non-reguler/card-nr-1.png') }}" alt="" class="card-img-top card-img-prodi" style="border-radius: 15px 15px 0px 0px;">
                        <div class="card-img-overlay-prodi">
                            <h5 class="card-title card-title-prodi fs-16px fw-600 mb-4">Sekolah Teknik Elektro dan Informatika</h5>
                            <p class="card-text fs-18px fw-600 text-white" style="line-height: 21px;">MAGISTER INFORMATIKA</p>
                        </div>
                        <div class="card-body card-body-program-studi">
                            <div class="conten-card-prodi">
                                <p class="card-text-body-prodi">Daftar Mata Kuliah Program</p>
                                <ul class="card-list-body-prodi">
                                    <li>Pembelajaran Multimedia</li>
                                    <li>Studi Mandiri A</li>
                                    <li>Jaringan Informasi & Sosial</li>
                                    <li>Pemrosesan Bahasa Alami Lanjut</li>
                                    <li>Kewirausahaan Bidang TI</li>
                                </ul>
                            </div>
                            <div class="footer-card-prodi d-flex justify-content-center">
                                <a href="#" class="btn btn-prodi" target="_blank">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card card-program-studi">
                        <img src="{{ url('img/non-reguler/card-nr-2.png') }}" alt="" class="card-img-top card-img-prodi" style="border-radius: 15px 15px 0px 0px;">
                        <div class="card-img-overlay-prodi">
                            <h5 class="card-title card-title-prodi fs-16px fw-600 mb-4">Sekolah Arsitektur, Perencanaan dan Pengembangan Kebijakan</h5>
                            <p class="card-text fs-18px fw-600 text-white" style="line-height: 21px;">MAGISTER ARSITEKTUR</p>
                        </div>
                        <div class="card-body card-body-program-studi">
                            <div class="conten-card-prodi">
                                <p class="card-text-body-prodi">Daftar Mata Kuliah Program</p>
                                <ul class="card-list-body-prodi">
                                    <li>Ekonomi Pengembangan Proyek</li>
                                    <li>Arsitektur Vernakular Indonesia</li>
                                    <li>Teknologi Bangungan Bambu</li>
                                    <li>Sistem Penyediaan Perumahaan</li>
                                    <li>Pembangunan Perumahan dan Perkotaan Indonesia</li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-prodi" target="_blank">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card card-program-studi">
                        <img src="{{ url('img/non-reguler/card-nr-3.png') }}" alt="" class="card-img-top card-img-prodi" style="border-radius: 15px 15px 0px 0px;">
                        <div class="card-img-overlay-prodi">
                            <h5 class="card-title card-title-prodi fs-16px fw-600 mb-4">Sekolah Arsitektur, Perencanaan dan Pengembangan Kebijakan</h5>
                            <p class="card-text fs-18px fw-600 text-white" style="line-height: 21px;">MAGISTER PERENCANAAN KEPARIWISATAAN</p>
                        </div>
                        <div class="card-body card-body-program-studi">
                            <div class="conten-card-prodi">
                                <p class="card-text-body-prodi">Daftar Mata Kuliah Program</p>
                                <ul class="card-list-body-prodi">
                                    <li>Fasilitas Pariwisata dan Transformasinya</li>
                                    <li>Dampak Pariwisata</li>
                                    <li>Kebencanaan dalam Perencanaan Kepariwisataan</li>
                                    <li>Pariwisata Berbasis Masyarakat</li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-prodi" target="_blank">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card card-program-studi">
                        <img src="{{ url('img/non-reguler/card-nr-4.png') }}" alt="" class="card-img-top card-img-prodi" style="border-radius: 15px 15px 0px 0px;">
                        <div class="card-img-overlay-prodi">
                            <h5 class="card-title card-title-prodi fs-16px fw-600 mb-4">Fakultas Seni Rupa dan Desain</h5>
                            <p class="card-text fs-18px fw-600 text-white" style="line-height: 21px;">MAGISTER SENI RUPA</p>
                        </div>
                        <div class="card-body card-body-program-studi">
                            <div class="conten-card-prodi">
                                <p class="card-text-body-prodi">Daftar Mata Kuliah Program</p>
                                <ul class="card-list-body-prodi">
                                    <li>Seni dan Pasar II</li>
                                    <li>Ilmu Sejarah Seni II</li>
                                    <li>Seni dan Peradaban</li>
                                    <li>Antropologi Seni</li>
                                    <li>Filsafat Seni</li>
                                    <li>Metode Penciptaan Seni II</li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-prodi" target="_blank">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </section>

    <section class="solusi" style="height: auto;">
        <div class="container">
            <div class="row mb-lg-4">
                <div class="col-md-12">
                    <h3>Solusi Mendukung Pembelajaran Anda</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card" style="background: linear-gradient(180deg, #356CF9 0%, #00AEEF 97.4%);
                    border-radius: 10px;">
                        <div class="card-body">
                            <div class="" style="margin-bottom: 8px;">
                                <img src="{{ url('img/non-reguler/logo-itb-card.png') }}" alt="" style="object-fit: fill; width: 39px; height: 39px;">
                            </div>
                            <div>
                                <h3 class="solusi-title-card-prodi">ITB Hub</h3>
                                <p class="solusi-sub-card-prodi">Informasi seputar ITB dan Prodi</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-solusi">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card" style="background: #FFB724; border-radius: 10px;">
                        <div class="card-body">
                            <div class="" style="margin-bottom: 8px;">
                                <img src="{{ url('img/non-reguler/logo-itb-card.png') }}" alt="" style="object-fit: fill; width: 39px; height: 39px;">
                            </div>
                            <div>
                                <h3 class="solusi2-title-card-prodi">Teman ITB</h3>
                                <p class="solusi2-sub-card-prodi">Punya Pertanyaan? Yuk Bertanya</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-solusi">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @push('script')
    <script>

        $('.single-item').slick();

    </script>
    @endpush
@endsection
