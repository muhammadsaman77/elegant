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
    <div class="container-fluid">
        <div class="card-summary shadow rounded">
            <h1>Step 3: Pilih Slot Waktu</h1>
            <div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Slot Waktu</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>--- Pilih Slot Waktu ---</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <a href="/booking-summary" class="btn btn-dark btn-sm">Lanjut ke Ringkasan</a>
            </div>
        </div>
    </div>
@endsection
