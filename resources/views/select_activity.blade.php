@extends('layouts.main')

@section('content')
<style>

    .card-summary {
        width: 60%;
        margin: 100px auto 0 auto;
        padding: 20px;
        background-color: #ffffff
    }
    h1 {
        font-size: 28px;
    }
    .bg-activity {
    height: 100vh;
    padding: 20px;
    background-image: url('{{ asset('img/what-the-hex.png') }}');
    background-repeat: repeat;
    background-size: auto; /* opsional, biarkan ukuran gambar asli */
    background-position: top left; /* opsional, mulai dari pojok kiri atas */
}
    .back {
        font-size: 18px;
        font-weight: 500;
    }
</style>
<div class="container-fluid bg-activity" >
    <button class="btn btn-sm btn-outlined-dark d-flex gap-2 px-">

            <svg xmlns="http://www.w3.org/2000/svg" width="30"  fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
              </svg>
    <span class="back">
        Back
    </span>
        </button>
    <div class="card-summary shadow rounded">
        <h1>Step 1: Pilih Jenis Kegiatan</h1>
        <div>
            <div class="my-3">
                <label for="formFile" class="form-label">Jenis Kegiatan</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--- Pilih Jenis Kegiatan ---</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <a href="/select-date" class="btn btn-dark btn-sm">Lanjut Pilih Tanggal</a>
        </div>
    </div>
</div>
@endsection
