<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">


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

}

.card-custom:hover {
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.45);
    transform: translateY(-4px);
    transition: 0.3s ease;
}

.card-custom .image-wrapper img {
    transition: transform 0.4s ease, filter 0.4s ease;
}

.card-custom:hover .image-wrapper img {
    transform: scale(1.1);
    filter: brightness(0.75);
}

.image-wrapper {
    position: relative;
    height: 380px;
    background-color: #000;
}

.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    filter: brightness(0.65);
}

.corner-label {
    position: absolute;
    top: 0;
    left: 0;
    background-color: #161A30;
    padding: 8px 35px 8px 12px;
    clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
    z-index: 3;
    display: flex;
    align-items: center;
}

.corner-label h2 {
    margin: 0;
    color: white;
    font-size: 1.3rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    text-align: left;
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

/* Overlay konten di atas gambar */
.card-content-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 1.2rem 1.2rem;
    width: 100%;
    z-index: 3;
    color: white;
}

.card-content-overlay .price {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.card-content-overlay .price span {
    font-size: 0.9rem;
    font-weight: normal;
}

.card-content-overlay .badges {
    margin-bottom: 0.5rem;
}

.card-content-overlay .badges .badge {
    background-color: rgba(255, 255, 255, 0.2);
    margin-right: 6px;
    font-size: 0.75rem;
    padding: 0.2rem 0.6rem;
}

.card-content-overlay .location {
    font-size: 0.8rem;
    color: #ddd;
    margin-bottom: 1rem;
}

.card-content-overlay .buttons {
    display: flex;
    justify-content: space-between;
    gap: 0.5rem;
}

.card-content-overlay .buttons a {
    flex: 1;
    text-align: center;
    padding: 0.5rem 0.75rem;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 500;
    transition: 0.3s ease;
    text-decoration: none;
}

.card-content-overlay .btn-outline-light {
    border: 1px solid #ccc;
    background-color: transparent;
    color: white;
}

.card-content-overlay .btn-outline-light:hover {
    background-color: #fff;
    color: #1a1a2f;
}

.card-content-overlay .btn-primary {
    background-color: #fff;
    color: #1a1a2f;
    border: none;
}

.card-content-overlay .btn-primary:hover {
    background-color: #B6BBC4;
}
</style>

<div class="card-custom">
    <div class="image-wrapper">
        <img src="{{$image}}" alt="GOR Bulutangkis">
        <div class="corner-label">
            <h2>{{$title}}
            </h2>
        </div>
        <div class="corner-cut"></div>
        <div class="card-content-overlay">
            <div class="price">{{$price}}<span>/jam</span></div>
            <div class="badges">
                <span class="badge">AC</span>
                <span class="badge">Wifi</span>
                <span class="badge">Kantin</span>
            </div>
            <div class="location"><i class="bi bi-geo-alt-fill me-1"></i>Jl. Pierre Tendean - Tanah Grogot</div>
            <div class="buttons">
                <a href="#" class="btn-outline-light">Selengkapnya</a>
                <a href="/select-activity" class="btn btn-primary">Booking Now</a>
            </div>
        </div>
    </div>
</div>
