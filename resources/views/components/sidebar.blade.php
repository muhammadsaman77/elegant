<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    .sidebar {
        background-color: #fff;
        padding: 2rem !important;
        border-right: 1px solid #f1f1f1;
        font-family: 'Poppins', sans-serif;
        box-shadow: 6px 6px 12px #dcdcdc, -6px -6px 12px #ffffff;
        border-radius: 20px;
        transition: all 0.4s ease;
    }

    .sidebar:hover {
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.12);
    }
    .sidebar h5 {
        font-weight: 600;
        color: #161A30;
        font-size: 1.4rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .sidebar h5::before {
        content: '📌';
        font-size: 1.1rem;
    }

    .form-section {
        margin-bottom: 2.2rem;
    }

    .form-label {
        font-weight: 500;
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 0.5rem;
    }

    .input-group-text {
        background-color: #eee;
        color: #555;
        border: 1px solid #f1f1f1;
        border-radius: 12px 0 0 12px;
    }

    .form-control {
        background-color: #fff;
        border: 2px solid #f1f1f1;
        border-radius: 0 12px 12px 0;
        padding: 0.8rem;
        font-size: 0.95rem;
        transition: box-shadow 0.3s ease;
        box-shadow: inset 2px 2px 5px rgba(0,0,0,0.05);
    }

    .form-control:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(22, 26, 48, 0.1);
    }

    .btn-explore {
        background-color: #161A30 !important;
        color: #fff !important;
        font-weight: 600 !important;
        padding: 0.8rem !important;
        border-radius: 15px !important;
        font-size: 1rem !important;
        transition: all 0.3s ease !important;
        border: none !important;
    }

    .btn-explore:hover {
        background-color: #B6BBC4 !important;
        color: #0d0d0d !important;
        transform: scale(1.04) !important;
    }

    .form-check-input {
        margin-right: 1rem;
        width: 1.2rem;
        height: 1.2rem;
        border-radius: 0.25rem;
        border: 1px solid #aaa;
    }

    .form-check-label {
        font-size: 0.95rem;
        color: #333;
    }

    .form-check-input:checked {
        background-color: #161A30;
        border-color: #161A30;
    }

    hr {
        margin: 1rem 0;
        border-color: #555;
    }
</style>

<div class="col-12 col-md-3 sidebar">
    <h5>Cari Gedung Olahraga</h5>
    <hr />
    <div class="form-section">
        <div class="mb-3">
            <label class="form-label">Lokasi Venue</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                <input type="text" class="form-control" placeholder="Contoh: Grogot, Kaltim">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Event</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Tamu</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-people"></i></span>
                <input type="number" class="form-control" placeholder="Contoh: 50 tamu">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Event</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-star"></i></span>
                <input type="text" class="form-control" placeholder="Contoh: Pernikahan, Pesta">
            </div>
        </div>

        <button class="btn btn-explore w-100">Eksplorasi</button>
    </div>

    <div class="form-section">
        <h5>Filter Pencarian</h5>
        <hr />
        @foreach(['Venue Mewah', 'Layanan Kuliner', 'Event Profesional', 'Venue Premium'] as $filter)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="{{ Str::slug($filter) }}">
                <label class="form-check-label" for="{{ Str::slug($filter) }}">
                    {{ $filter }}
                </label>
            </div>
        @endforeach
    </div>

    <div class="form-section">
        <h5>Biaya Sewa Per Event</h5>
        <hr />
        @foreach(['Di bawah Rp500.000', 'Rp500.000 - Rp1.000.000', 'Rp1.000.000 - Rp1.500.000', 'Rp1.500.000 dan lebih'] as $price)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="{{ Str::slug($price) }}">
                <label class="form-check-label" for="{{ Str::slug($price) }}">
                    {{ $price }}
                </label>
            </div>
        @endforeach
    </div>
</div>
