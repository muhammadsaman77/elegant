@extends('layouts.main')

@section('content')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f2f4f7;
        margin: 0;
    }

    a {
        text-decoration: none;
    }

    .bg-activity {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    padding: 40px 16px;
    overflow: hidden;
    background-color: white;
}

    .background-overlay {
        content: "";
        position: absolute;
        inset: 0;
        background: url('{{ asset("img/bg-boxes.jpg") }}') no-repeat;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    /* efek putih yang hanya berada di background, tidak mengganggu konten */
    .background-overlay::after {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 50% 50%, rgba(255,255,255,1) 0%, rgba(255,255,255,0.9) 40%, rgba(255,255,255,0.1) 100%);
        z-index: 1;
    }

    /* card/form tetap di atas */
    .card-summary {
        position: relative;
        z-index: 2;
    }

    .header-section {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 10px;
    }

    .btn-back {
        background: none;
        border: none;
        color: #0d0d0d;
        font-weight: 500;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: all 0.3s ease;
        padding: 0;
    }

        input[type="date"] {
        appearance: none;
        -webkit-appearance: none;
        background-color: rgba(255, 255, 255, 0.08);
        border: 1px solid #555;
        border-radius: 12px;
        padding: 12px 16px;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
        color: #0d0d0d;
        width: 100%;
        transition: 0.3s ease;
        position: relative;
        backdrop-filter: blur(10px);
    }

    input[type="date"]::placeholder {
        color: #aaa;
    }

    input[type="date"]:focus {
        outline: none;
        border-color: #0d0d0d;
        box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.15);
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(20%);
        cursor: pointer;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    input[type="date"]::-webkit-calendar-picker-indicator:hover {
        opacity: 1;
    }


    .btn-back:hover {
        color: #0d0d0d;
        transform: translateX(-3px);
        text-decoration: underline;
    }

    .form-section {
        display: flex;
        flex-direction: column;
        gap: 20px;
        padding-top: 10px;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 6px;
        color: #0d0d0d;
    }

    .form-select {
        border-radius: 12px;
        padding: 12px 16px;
        font-size: 1rem;
        border: 1px solid #555;
        background-color: rgba(255, 255, 255, 0.08);
        color: #0d0d0d;
        transition: 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .form-select:focus {
        outline: none;
        border-color: #161A30;
        box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.15);
    }

    option {
        color: #444;
    }

    .title-section {
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        color: #0d0d0d;
        letter-spacing: 0.5px;
    }

    .form-button {
        display: flex;
        justify-content: center;
    }

    .btn-next {
        background-color: #f0f0f0;
        border: 1px solid #555;
        border-radius: 14px;
        padding: 12px 24px;
        font-weight: 600;
        font-size: 15px;
        color: #0d0d0d;
        transition: background 0.3s ease, transform 0.2s ease;
        display: inline-block;
        width: 50%;
    }

    .btn-next:hover {
        background-color: transparent;
        color: #010101;
        transform: scale(1.03);
        border-color: #888;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>


<div class="container-fluid bg-activity">
<div class="background-overlay"></div>

    <x-asymmetric-form class="card-summary">
        <div class="header-section">
            <a href="/select-activity" class="btn-back">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                </svg>
                Kembali
            </a>

        </div>
        <h1 class="title-section">Step 2: Pilih Hari & Tanggal Booking</h1>

        <div class="form-section">
            <div>
                <label for="tanggalMulai" class="form-label">Tanggal Mulai Booking</label>
                <input class="form-control" type="date" id="tanggalMulai">
            </div>

            <div>
                <label for="tanggalSelesai" class="form-label">Tanggal Selesai Booking</label>
                <input class="form-control" type="date" id="tanggalSelesai">
            </div>

            <div>
                <label for="hariLatihan" class="form-label">Pilih Hari Latihan</label>
                <select class="form-select" id="hariLatihan">
                    <option selected disabled>--- Pilih Hari Latihan ---</option>
                    <option value="1">Senin</option>
                    <option value="2">Rabu</option>
                    <option value="3">Jumat</option>
                </select>
            </div>

            <div class="form-button">
                <a href="/select-time" class="btn btn-next">Pilih Slot Waktu</a>
            </div>
        </div>
    </x-asymmetric-form>
</div>
@endsection
