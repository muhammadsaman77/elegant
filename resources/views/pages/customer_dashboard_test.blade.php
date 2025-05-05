@extends('layouts.main')

@section('content')
<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body, html {
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
        color: #0d0d0d;
        background-color: #F8F9FA;
    }

    .btn-dark {
        background-color: #161A30;
        border: none;
        border-radius: 8px;
        padding: 0.7rem 1.2rem;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #B6BBC4;
        color: #fff;
    }

    .venue-list {
        padding: 2rem 1.5rem !important;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .venue-title p {
        font-size: 1rem;
        color: #666;
    }

    .venue-title h3 {
        font-size: 2rem;
        font-weight: 700;
        color: #0d0d0d;
    }

    .badge {
        font-size: 0.9rem;
        background-color: #161A30;
        color: white;
        border-radius: 8px;
        padding: 0.6em 0.8em;
    }

    .badge:hover {
        background-color: #31304D;
        color: #fff;
        transform: scale(1.05);
        cursor: pointer;
        transition: all 0.3s ease;
    }


    @media (max-width: 768px) {
        .venue-list {
            padding: 1.5rem;
        }
    }
</style>

<div>
    <x-navbar-customer />
    <div class="row">
        <x-sidebar/>
        <div class="col-md-9 venue-list animate__animated animate__fadeIn">
            <!-- Carousel Promo -->
            <div id="carouselPromo" class="carousel slide mb-4 shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">
                    <div class="carousel-item active position-relative">
                        <img src="https://i.pinimg.com/736x/9f/1b/8a/9f1b8a3a24c760451a9cf6265930c43f.jpg" class="d-block w-100 object-fit-cover" style="height: 260px;" alt="Promo 1">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.4), rgba(0,0,0,0.2));"></div>
                        <div class="position-absolute top-0 start-0 m-4">
                            <span class="badge bg-danger bg-opacity-75 fs-6 py-2 px-3 shadow">Diskon 25%</span>
                        </div>
                        <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                            <h4 class="fw-bold text-white">GOR Serbaguna Grogot</h4>
                            <p class="text-light mb-3">Nikmati diskon eksklusif untuk pemesanan selama bulan ini!</p>
                            <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-4 py-2">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="carousel-item position-relative">
                        <img src="https://i.pinimg.com/736x/b1/e5/bc/b1e5bc31ccd90852cd01d03aaaeaf9a9.jpg" class="d-block w-100 object-fit-cover" style="height: 260px;" alt="Promo 2">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.4), rgba(0,0,0,0.2));"></div>
                        <div class="position-absolute top-0 start-0 m-4">
                            <span class="badge bg-warning text-dark bg-opacity-75 fs-6 py-2 px-3 shadow">Venue Baru</span>
                        </div>
                        <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                            <h4 class="fw-bold text-white">Stadion Mini Indoor</h4>
                            <p class="text-light mb-3">Rasakan kemewahan untuk acara pribadi Anda.</p>
                            <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-4 py-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPromo" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                    <span class="visually-hidden">Berikutnya</span>
                </button>
            </div>

            <!-- Title and Filters -->
            <div class="venue-title mb-0">
                <h3 class="fw-bold">Rekomendasi Venue Terbaik</h3>
                <p class="text-muted">Menemukan 30 venue eksklusif berdasarkan preferensimu:</p>
            </div>

            <!-- Catalog Cards -->
            <div class="row gx-3 gy-3">
                @for($i = 0; $i < 9; $i++)
                    <div class="col-sm-6 col-md-4 animate__animated animate__fadeInUp animate__delay-{{ $i % 3 }}s">
                        <x-card-catalog-test
                            title="GOR Bulutangkis"
                            description="Lapangan indoor premium dengan fasilitas lengkap dan pencahayaan standar turnamen nasional."
                            price="Rp 500.000"
                            image="https://i.pinimg.com/736x/ed/d1/ee/edd1ee458d069d67f5866b7002a83e17.jpg"
                            :features="['AC', 'Wifi', 'Kantin']"
                        />
                    </div>
                @endfor
            </div>

            <hr class="my-5" style="border-top: 2px solid #dee2e6; opacity: 0.7;">

            <x-testimonial-carousel />
        </div>
    </div>
</div>
@endsection
