@extends('layouts.main')

@section('content')
<style>
    .card-summary {
        width: 60%;
        margin: 100px auto 0 auto;
        padding: 20px;
    }
    h1{
        font-size: 28px;
    }
</style>
<div class="container-fluid" >
    <div class="card-summary shadow rounded">
        <h1>Step 2: Pilih Hari & Tanggal Booking</h1>
        <div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Tanggal Mulai Booking</label>
                <input class="form-control" type="date" id="formFile">
              </div>
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Tanggal Selesai Booking</label>
                <input class="form-control" type="date" id="formFileMultiple" multiple>
              </div>
              <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Pilih Hari Latihan</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--- Pilih Hari Latihan ---</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
              </div>
              <a href="/select-time" class="btn btn-dark btn-sm">Pilih Slot Waktu</a>

        </div>
    </div>
</div>
@endsection
