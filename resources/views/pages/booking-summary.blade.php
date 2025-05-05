@extends('layouts.main')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f2f4f7;
        margin: 0;
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
    h1 {
        font-size: 24px;
        font-weight: 600;
        color: #0d0d0d;
        text-align: center;
        margin-bottom: 20px;
    }

    .summary {
        background-color: rgba(255, 255, 255, 0.05);
        border-radius: 14px;
        padding: 24px;
        font-size: 15px;
        color: #ffffff;
        font-weight: 500;
        box-shadow: 0 1px 12px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(12px);
        animation: fadeIn 0.6s ease-out;
        width: 100%;
        margin: 0 auto;
    }

    table {
        width: 100%;
    }

    table th, table td {
        text-align: left;
        padding: 10px 0;
    }

    table th {
        width: 40%;
        font-weight: 500;
        color: #0d0d0d;
    }

    table td {
        color: #0d0d0d;
    }

    .btn-submit {
        background-color: #f0f0f0;
        border: 1px solid #555;
        border-radius: 14px;
        padding: 12px 24px;
        font-weight: 600;
        font-size: 15px;
        color: #0d0d0d;
        text-decoration: none;
        transition: background 0.3s ease, transform 0.2s ease;
        width: 70%;
        text-align: center;
        margin-top: 24px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-submit:hover {
        background-color: transparent;
        color: #010101;
        transform: scale(1.03);
        border-color: #888;
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="container-fluid bg-activity">
<div class="background-overlay"></div>

    <x-asymmetric-form class="card-summary">
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

        <!-- Tombol Submit sekarang berada di tengah -->
        <a href="/booking-success" class="btn-submit">Submit Order</a>
    </x-asymmetric-form>
</div>
@endsection
