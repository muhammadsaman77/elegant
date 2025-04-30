@extends('layouts.main')
@section('content')
<style>
    .card-summary {
        width: 60%;
        margin: 100px auto 0px auto;
        padding: 20px;
    }
    h1 {
        font-size: 28px;
    }
    .summary {
        padding: 20px;
        margin: 10px 0;

    }
</style>
<div class="container-fluid " >
    <div class="card-summary shadow rounded ">
        <h1>Ringkasan Booking</h1>
        <div class="card summary">
            <table >
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
                        <td>: GOR Bulutangkis - Olahraga - Pagi - Non-Government</td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>: Rp 350.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="btn btn-dark btn-sm">Submit Order</a>
    </div>
</div>
@endsection
