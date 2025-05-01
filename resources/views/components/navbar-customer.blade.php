<style>
    .navbar-custom {
        background-color: #ffffff;
        padding: 1rem 2.5rem;
        border-bottom: 1px solid #dee2e6;
        font-family: 'Lora', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 1.5rem;
        color: #1B1833;
        letter-spacing: 1.5px;
        transition: color 0.3s ease;
    }

    .navbar-brand:hover {
        color: #000;
    }

    .nav-btn-dark,
    .nav-btn-outline {
        border-radius: 8px;
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        transition: all 0.3s ease;
    }

    .nav-btn-dark {
        background-color: #1B1833;
        color: #fff;
        border-radius: 20px;
    }

    .nav-btn-dark:hover {
        background-color: #B6BBC4;
        color: #fff
    }

    .nav-btn-outline {
        border: 1px solid #1B1833;
        color: #1B1833;
        font-weight: 700;
        background-color: transparent;
        border-radius: 20px;
    }

    .nav-btn-outline:hover {
        background-color: #B6BBC4;
        color: #fff;
    }

    @media (max-width: 768px) {
        .navbar-custom {
            padding: 1rem;
        }

        .navbar-brand {
            font-size: 1.3rem;
        }

        .nav-btn-dark,
        .nav-btn-outline {
            font-size: 0.8rem;
            padding: 0.4rem 0.8rem;
        }
    }
</style>

<nav class="navbar navbar-custom shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">Elegant Venue</a>
        <div class="d-flex gap-2">
            <button href="#" class="btn nav-btn-dark">Register</button>
            <button href="#" class="btn nav-btn-outline">Login</button>
        </div>
    </div>
</nav>
