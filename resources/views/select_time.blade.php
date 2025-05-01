@extends('layouts.main')

@section('content')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f2f4f7;
    }

    a {
        text-decoration: none;
    }

    .bg-activity {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('{{ asset('img/what-the-hex.png') }}');
        background-repeat: repeat;
        background-size: auto;
        padding: 30px 15px;
    }

    /* Overlay Gelap */
    .bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.4); /* Gelap 40% */
        z-index: 0; /* Pastikan overlay di belakang konten */
    }

    .card-summary {
        width: 100%;
        max-width: 520px;
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        padding: 30px 28px;
        display: flex;
        flex-direction: column;
        gap: 24px;
        z-index: 1; /* Pastikan card tetap di depan overlay */
    }

    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-back {
        background: none;
        border: none;
        color: #161A30;
        font-weight: 500;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: all 0.3s ease;
        padding: 0;
    }

    .btn-back:hover {
        color: #000;
        text-decoration: underline;
        transform: translateX(-2px);
    }

    .title-section {
        text-align: center;
        font-size: 22px;
        font-weight: 600;
        color: #161A30;
        margin: 0 auto;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 6px;
        color: #333;
    }

    .form-section {
        display: flex;
        flex-direction: column;
        gap: 1.1em;
    }

    .form-select {
        border-radius: 12px;
        padding: 12px 16px;
        font-size: 1rem;
        border: 1px solid #ced4da;
        background-color: #f9fafb;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-select:focus {
        border-color: #161A30;
        box-shadow: 0 0 0 4px rgba(22, 26, 48, 0.1);
    }

    .btn-next {
        background-color: #161A30;
        border: none;
        border-radius: 14px;
        padding: 12px 24px;
        font-weight: 500;
        font-size: 15px;
        color: #f1f1f1;
        transition: background 0.3s ease, transform 0.2s ease;
        display: inline-block;
        width: 100%;
    }

    .btn-next:hover {
        background-color: #b6bbc4;
        transform: scale(1.02);
    }
</style>

<div class="container-fluid bg-activity">
<div class="bg-overlay"></div>

    <div class="card-summary">
        <div class="header-section">
            <a href="/select-date" class="btn-back">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                </svg>
                Kembali
            </a>
        </div>
        <h1 class="title-section">Step 3: Pilih Slot Waktu</h1>
        
        <div class="form-section">
            <div>
                <label for="slotWaktu" class="form-label">Slot Waktu</label>
                <select class="form-select" id="slotWaktu">
                    <option selected disabled>--- Pilih Slot Waktu ---</option>
                    <option value="1">Pagi (08.00 - 10.00)</option>
                    <option value="2">Siang (13.00 - 15.00)</option>
                    <option value="3">Malam (19.00 - 21.00)</option>
                </select>
            </div>

            <a href="/booking-summary" class="btn btn-next">Lanjut ke Ringkasan</a>
        </div>
    </div>
</div>
@endsection
