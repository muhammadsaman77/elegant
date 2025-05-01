@extends('layouts.main')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body, html {
        overflow-x: hidden;
        font-family: 'Lora', sans-serif;
        color: #161A30;
    }

    .sidebar {
    background-color: #fff;
    border-right: 1px solid #B6BBC4;
    padding: 2.3rem 1.7rem;
    font-family: 'Poppins', sans-serif;
}

.sidebar h5 {
    font-weight: 600;
    color: #161A30;
    font-size: 1.2rem;
    margin-bottom: 1rem;
}

.form-label {
    font-weight: 600;
    font-size: 0.9rem;
    color: #444;
    margin-bottom: 0.3rem;
}

.input-group-text {
    border-radius: 12px 0 0 12px;
    border: 1px solid #ccc;
    background-color: #fdfdfd;
    color: #555;
}

.form-control {
    border-radius: 0 12px 12px 0;
    border: 1px solid #ccc;
    padding: 0.6rem 0.75rem;
    font-size: 0.9rem;
    background-color: #fff;
    box-shadow: none;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #161A30;
    box-shadow: 0 0 0 2px rgba(22, 26, 48, 0.1);
}

.btn-explore {
    background-color: #161A30;
    color: #fff;
    font-weight: 500;
    border-radius: 12px;
    padding: 0.6rem;
    transition: all 0.3s ease;
    font-size: 0.95rem;
    margin-top: 0.5rem;
}

.btn-explore:hover {
    background-color: #B6BBC4;
    color: #fff;
}

.form-check-input {
    margin-right: 1rem;
    border: 1px solid #888;
    width: 1.1rem;
    height: 1.1rem;
}

.form-check-label {
    font-size: 0.9rem;
    color: #333;
}

hr {
    margin: 1rem 0;
    border-color: #333;
}


    .form-check-input:checked {
        background-color: #161A30;
        border-color: #161A30;
    }

    .btn-dark {
        background-color: #161A30;
        border: none;
        border-radius: 8px;
        padding: 0.6rem 1rem;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #B6BBC4;
        color: #fff;
    }

    .venue-list {
        padding: 2rem;
        background-color: #fff;
    }

    .venue-title p {
        font-size: 1rem;
        color: #444;
        font-weight: 300

    }
    .venue-title h3 {
        font-size: 2rem;
        color: #444;
        font-weight: 700;
    }

    .form-section {
        margin-bottom: 2em;
        padding-bottom: 0.5rem;
    }

    .form-check {
        padding-bottom: 0.3rem;
    }
</style>

<div class="">
    <x-navbar-customer />
    <div class="row">
<div class="col-md-3 sidebar">
<h5>Refine Your Search</h5>
<hr />
<div class="form-section">
    <div class="mb-3">
        <label class="form-label">Venue Location</label>
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt"></i></span>
            <input type="text" class="form-control border-start-2" placeholder="e.g. Jakarta, Indonesia">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Event Date</label>
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="bi bi-calendar-event"></i></span>
            <input type="date" class="form-control border-start-2">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Guest Count</label>
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="bi bi-people"></i></span>
            <input type="number" class="form-control border-start-2" placeholder="e.g. 50 guests">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Event Type</label>
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="bi bi-star"></i></span>
            <input type="text" class="form-control border-start-2" placeholder="e.g. Wedding, Party">
        </div>
    </div>

    <button class="btn btn-explore w-100">Explore</button>
</div>

    
    <div class="form-section">
        <h5>Refined Filters</h5>
    <hr/>

        @foreach(['Upscale venue', 'Culinary services', 'Professional Event', 'Luxury Venue'] as $filter)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="{{ Str::slug($filter) }}">
                <label class="form-check-label" for="{{ Str::slug($filter) }}">
                    {{ $filter }}
                </label>
            </div>
        @endforeach
    </div>

    <div class="form-section">
        <h5>Rental Fee Per Event</h5>
    <hr/>

        @foreach(['Under $500', '$500 - $1000', '$1000 - $1,500', '$1,500 and above'] as $price)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="{{ Str::slug($price) }}">
                <label class="form-check-label" for="{{ Str::slug($price) }}">
                    {{ $price }}
                </label>
            </div>
        @endforeach
    </div>

    <div class="form-section">
        <h5>Client Satisfaction</h5>
    <hr/>

        @foreach(['All ratings', 'Exquisite', 'Outstanding', 'Great'] as $rating)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="{{ Str::slug($rating) }}">
                <label class="form-check-label" for="{{ Str::slug($rating) }}">
                    {{ $rating }}
                </label>
            </div>
        @endforeach
    </div>
</div>


        <!-- Main Content -->
        <div class="col-md-9 venue-list">
            <div class="venue-title">
                <h3>Exclusive Offers</h3>
                <p>30 elegant venues found for: Paris, 10 Dec, 50 guests, Wedding</p>
            </div>
            @for($i = 0; $i < 6; $i++)
                <x-card-catalog
                    title="Gor Bulutangkis"
                    description="Lapangan indoor multifungsi dengan fasilitas lengkap untuk turnamen dan acara komunitas. Lapangan indoor multifungsi dengan fasilitas lengkap untuk turnamen dan acara komunitas."
                    price="Rp 500.000"
                    image="https://i.pinimg.com/736x/ed/d1/ee/edd1ee458d069d67f5866b7002a83e17.jpg"
                />
            @endfor
        </div>
    </div>
</div>
@endsection
