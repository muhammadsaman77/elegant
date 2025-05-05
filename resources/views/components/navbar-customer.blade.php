<style>
    .navbar-custom {
        background-color: #ffffff;
        padding: 1rem 2.5rem;
        border-bottom: 1px solid #dee2e6;
        font-family: 'Lora', Tahoma, Geneva, Verdana, sans-serif;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        z-index: 1030;
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 1.8rem;
        color: #0d0d0d;
        text-transform: uppercase;
        font-family: 'Poppins', sans-serif;
        transition: color 0.3s ease;
        letter-spacing: 3px;
    }

    .navbar-brand:hover {
        color: #161A30;
    }

    .nav-link {
        font-weight: 600;
        color: #0d0d0d !important;
        margin: 0 0.75rem;
        transition: color 0.3s ease;
        position: relative;
    }

    .nav-link::after {
        content: "";
        display: block;
        width: 0%;
        height: 2px;
        background: #161A30;
        transition: width 0.3s ease;
        position: absolute;
        bottom: -4px;
        left: 0;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-btn-dark,
    .nav-btn-outline {
        border-radius: 20px;
        font-size: 1rem;
        padding: 0.6rem 1.2rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }

    .nav-btn-dark {
        background-color: #1B1833;
        color: #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-btn-dark:hover {
        background-color: #B6BBC4;
    }

    .nav-btn-outline {
        border: 1px solid #1B1833;
        color: #0d0d0d;
        background-color: transparent;
    }

    .nav-btn-outline:hover {
        background-color: #B6BBC4;
        color: #fff;
        border-color: #B6BBC4;
    }

    @media (max-width: 768px) {
        .navbar-custom {
            padding: 1rem 1.5rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .nav-link {
            margin: 0.5rem 0;
        }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Elegant Venue</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
            <!-- Menu Center -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-house-door"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-building"></i> Venue</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-ticket-perforated"></i> Promo</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-chat-dots"></i> Testimoni</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-telephone"></i> Kontak</a></li>
            </ul>

            <!-- Button Login/Register -->
            <div class="d-flex gap-2">
                <a href="#" class="btn nav-btn-outline"><i class="bi bi-person-plus"></i> Daftar</a>
                <a href="#" class="btn nav-btn-dark"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
            </div>
        </div>
    </div>
</nav>
