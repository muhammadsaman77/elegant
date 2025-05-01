<style>
    .venue-item {
        border-radius: 15px;
        border: 1px solid #F0ECE5;
        padding: 1.2rem;
        display: flex;
        background-color: #fff;
        box-shadow: 0 5px 10px #B6BBC4;
        transition: transform 0.2s ease;
        margin-bottom: 1.5rem;
    }

    .venue-item:hover {
        transform: scale(1.01);
    }

    .venue-item img {
        object-fit: cover;
        border-radius: 10px;
    }

    .venue-info {
        padding-left: 1rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .venue-info h3 {
        margin-bottom: 0.3rem;
        font-size: 1.3rem;
        font-weight: 700;
        color: #444;
    }

    .venue-info span {
        text-align: center;
        background-color: #333;
        padding: 0.3rem;
        border-radius: 10px;
    }

    .venue-info p {
        margin-bottom: 0.2rem;
    }

    .venue-info .text-muted {
        font-size: 0.9rem;
        color: #444;
    }

    .venue-info .fw-bold {
        font-size: 1rem;
        font-weight: bold;
        color: #161A30;
    }

    .venue-actions {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }

    .venue-actions .btn {
        border-radius: 8px;
        font-size: 0.85rem;
        padding: 0.45rem 0.8rem;
    }

    .btn-outline-dark {
        border: 1px solid #161A30;
        color: #161A30;
    }

    .btn-outline-dark:hover {
        background-color: #B6BBC4;
        color: #fff;
    }

    .btn-book {
        background-color: #161A30;
        color: #fff;
    }

    .btn-book:hover {
        background-color: #B6BBC4;
        color: #fff;
    }

</style>

<div class="venue-item row align-items-center py-4 border-bottom">
    <div class="col-auto">
        <img src="{{ $image }}" alt="{{ $title }}" style="width: 160px; height: auto; border-radius: 10px;">
    </div>

    <div class="venue-info col px-4">
        <h3 class="mb-2">{{ $title }}</h3>
        <p class="text-muted mb-1">Jl. Pierre Tendean - Tanah Grogot</p>
        <p class="text-muted" style="text-align: justify;">{{ $description }}</p>
        <div class="d-flex flex-wrap gap-2 pt-2">
            <span class="badge text-white">#Special Offer</span>
            <span class="badge text-white">#Top Choice</span>
        </div>
    </div>

    <!-- Garis vertikal pembatas di sisi kiri kolom actions -->
    <div class="col-auto venue-actions ps-4 border-start" style="border-color: #ddd !important;">
        <div class="text-center">
            <p class="fw-semibold text-muted mb-2">Mulai dari <span class="text-dark">{{ $price }}</span></p>
            <div class="d-flex flex-column gap-2">
                <a href="#" class="btn btn-outline-dark btn-sm">View Options</a>
                <a href="/select-activity" class="btn btn-dark btn-sm">Booking Now</a>
            </div>
        </div>
    </div>
</div>
