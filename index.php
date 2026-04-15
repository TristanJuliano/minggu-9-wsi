<?php require_once 'includes/header.php'; ?>

<style>
    body {
        background-color: #f8fafc;
    }
    .landing-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .hero-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 40px -15px rgba(0,0,0,0.1);
        padding: 4rem 3rem;
        max-width: 800px;
        text-align: center;
        border-top: 5px solid var(--primary-color);
    }
    .hero-icon {
        font-size: 5rem;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        display: inline-block;
        background: #eff6ff;
        width: 120px;
        height: 120px;
        line-height: 120px;
        border-radius: 50%;
    }
    .btn-hero {
        padding: 0.8rem 2.5rem;
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 50px;
        transition: all 0.3s ease;
    }
    .btn-hero:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px -10px var(--primary-color);
    }
</style>

<div class="container landing-container">
    <div class="hero-card">
        <div class="hero-icon">
            <i class="bi bi-mortarboard-fill"></i>
        </div>
        <h1 class="display-5 fw-bold text-dark mb-3">Sistem Informasi Akademik</h1>
        <p class="lead text-muted mb-4 px-md-5">Platform modern terpadu untuk pengelolaan data akademik, nilai, dan informasi mahasiswa secara efisien dan profesional.</p>
        
        <div class="mt-5">
            <p class="text-muted small mb-3">Silakan masuk untuk mengakses dasbor Anda</p>
            <a class="btn btn-primary btn-hero" href="login.php" role="button">
                Login ke Sistem <i class="bi bi-arrow-right-circle ms-2"></i>
            </a>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>