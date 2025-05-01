@extends('layouts.main')

@section('content')
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
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 0; 
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
        z-index: 1;
    }

    h1 {
        font-size: 24px;
        font-weight: 600;
        color: #161A30;
        text-align: center;
        margin-bottom: 10px;
    }

    .summary {
        background-color: #f8f9fa;
        border-radius: 14px;
        padding: 24px;
        font-size: 15px;
        color: #333;
        font-weight: 500;
        box-shadow: 0 1px 8px #b6bbc4;
    }

    table {
        width: 100%;
    }

    table th {
        text-align: left;
        padding: 8px 0;
        width: 40%;
        font-weight: 500;
        color: #495057;
    }

    table td {
        padding: 8px 0;
        color: #212529;
    }

    .btn-submit {
        background-color: #161A30;
        border: none;
        border-radius: 14px;
        padding: 12px 24px;
        font-weight: 500;
        font-size: 15px;
        color: #f1f1f1;
        transition: background 0.3s ease, transform 0.2s ease;
        width: 100%;
        text-align: center;
    }

    .btn-submit:hover {
        background-color: #b6bbc4;
        transform: scale(1.02);
    }
</style>

<div class="container-fluid bg-activity">
<div class="bg-overlay"></div>

    <div class="card-summary">
        <h1>Ringkasan Booking</h1>
        <div class="summary">
            <table>
                <tbody>
                    <tr>
                        <th>Venue</th>
                        <td>: GOR Bulutangkis</td>
                    </tr>
                    <tr>
                        <th>Jenis Kegiatan</th>
                        <td>: Olahraga</td>
                    </tr>
                    <tr>
                        <th>Tanggal Mulai</th>
                        <td>: 2025-04-29</td>
                    </tr>
                    <tr>
                        <th>Tanggal Selesai</th>
                        <td>: 2025-10-29</td>
                    </tr>
                    <tr>
                        <th>Slot Waktu</th>
                        <td>: Pagi (08.00 - 10.00)</td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>: Rp 350.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="/booking-success" class="btn-submit">Submit Order</a>
    </div>
</div>
@endsection
