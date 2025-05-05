<style>
.card-custom {
    width: 100%;
    max-width: 380px;
    border: 5px solid #B6BBC4;
    border-radius: 20px;
    overflow: hidden;
    font-family: 'Lora', serif;
    position: relative;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    transition: 0.3s ease;
    background: #f9f9f9;
}

.card-custom:hover {
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.45);
    transform: translateY(-4px);
}

.image-wrapper {
    position: relative;
    height: 280px;
    background-color: #000;
    overflow: hidden;
    border-radius: 15px 15px 0 0;
}

.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease, filter 0.4s ease;
    filter: brightness(0.65);
}

.card-custom:hover .image-wrapper img {
    transform: scale(1.05);
    filter: brightness(1) contrast(1.05);
}

.corner-label {
    position: absolute;
    top: 0;
    left: 0;
    background-color: #161A30;
    padding: 8px 28px 8px 14px;
    clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
    z-index: 3;
    display: flex;
    align-items: center;
}

.corner-label h2 {
    margin: 0;
    color: white;
    font-size: 1.1rem;
    font-weight: 600;
    text-transform: uppercase;
    white-space: nowrap;
}

.corner-cut {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100px;
    height: 60px;
    background-color: #161A30;
    clip-path: polygon(100% 0, 100% 100%, 15% 100%);
    z-index: 2;
}

/* === Elegant Detail Panel === */
.card-detail-panel {
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    padding: 0 1.5rem;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(12px);
    border-radius: 0 0 20px 20px;
    box-shadow: inset 0 1px 10px rgba(0,0,0,0.05);
    transition: max-height 0.5s ease, opacity 0.5s ease, padding 0.3s ease;
}

.card-custom:hover .card-detail-panel {
    max-height: 350px;
    opacity: 1;
    padding: 1.5rem;
}

.card-detail-panel .title {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 0.6rem;
    color: #1a1a2f;
}

.card-detail-panel .description {
    font-size: 0.95rem;
    color: #444;
    margin-bottom: 1.2rem;
    line-height: 1.5;
}

.card-detail-panel .extra-info {
    display: flex;
    gap: 8px;
    margin-bottom: 1rem;
    flex-wrap: wrap;
}

.card-detail-panel .extra-info .badge {
    background: rgba(22, 26, 48, 0.07);
    color: #1a1a2f;
    font-size: 0.8rem;
    padding: 0.4rem 0.8rem;
    border-radius: 50px;
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
}

.card-detail-panel .extra-info .badge i {
    font-size: 1rem;
    color: #444;
}

.location {
    padding-bottom: 1em;
}

.card-detail-panel .buttons {
    display: flex;
    justify-content: space-between;
    gap: 0.75rem;
}

.card-detail-panel .buttons a {
    flex: 1;
    text-align: center;
    padding: 0.6rem 0.8rem;
    border-radius: 12px;
    font-size: 0.9rem;
    font-weight: 600;
    transition: 0.3s ease;
    text-decoration: none;
    white-space: nowrap;
}

.card-detail-panel .btn-outline-light {
    border: 1px solid #bbb;
    background-color: transparent;
    color: #1a1a2f;
}

.card-detail-panel .btn-outline-light:hover {
    background-color: #B6BBC4;
}

.card-detail-panel .btn-primary {
    background-color: #161A30;
    color: #fff;
    border: none;
}

.card-detail-panel .btn-primary:hover {
    background-color: #B6BBC4;
    color: #161A30;
}
</style>

<!-- HTML Structure -->
<div class="card-custom">
    <div class="image-wrapper">
        <img src="{{$image}}" alt="GOR Bulutangkis">
        <div class="corner-label">
            <h2>{{$title}}</h2>
        </div>
        <div class="corner-cut"></div>
    </div>

    <div class="card-detail-panel">
        <h3 class="title">{{$title}}</h3>
        <p class="description">Lapangan bulutangkis berstandar nasional, tersedia AC, Wifi, dan kantin untuk kenyamanan Anda.</p>
        <div class="extra-info">
            <span class="badge"><i class="bi bi-wind"></i> AC</span>
            <span class="badge"><i class="bi bi-wifi"></i> Wifi</span>
            <span class="badge"><i class="bi bi-cup-hot"></i> Kantin</span>
        </div>
        <div class="location"><i class="bi bi-geo-alt-fill me-1"></i>Jl. Pierre Tendean - Tanah Grogot</div>
        <div class="buttons">
            <a href="#" class="btn btn-outline-light">Selengkapnya</a>
            <a href="/select-activity" class="btn btn-primary">Booking Now</a>
        </div>
    </div>
</div>
