<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<div class="wrapper">
    <?php require_once 'includes/sidebar.php'; ?>

    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0 text-dark"><i class="bi bi-grid-1x2 me-2 text-primary"></i> Dashboard</h2>
            <div class="text-muted small">
                <?php echo date('l, d F Y'); ?>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="card bg-primary text-white border-0 shadow-sm" style="background: linear-gradient(135deg, var(--primary-color) 0%, #60a5fa 100%);">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-4 flex-shrink-0">
                            <i class="bi bi-person-check-fill opacity-75" style="font-size: 3rem;"></i>
                        </div>
                        <div>
                            <h4 class="mb-1 fw-bold">Selamat datang kembali, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h4>
                            <p class="mb-0 opacity-75">Senang melihat Anda kembali di sistem. Ini adalah ringkasan hari ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-light rounded-circle p-3 me-3 text-primary">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-0">Informasi Akses</h5>
                        </div>
                        
                        <?php if ($_SESSION['role'] === 'admin'): ?>
                            <div class="alert alert-danger bg-danger bg-opacity-10 border-0 text-danger mt-3">
                                <i class="bi bi-shield-lock-fill me-2"></i> Anda login sebagai <strong>Administrator</strong>.
                            </div>
                            <p class="text-muted">Sebagai Administrator, Anda memiliki hak akses penuh ke dalam sistem:</p>
                            <ul class="text-muted">
                                <li><strong>Mengelola data semua mahasiswa</strong> (Tambah, Edit, Hapus)</li>
                                <li><strong>Mengelola nilai akademik</strong> mahasiswa secara keseluruhan</li>
                                <li><strong>Manajemen sistem dan user</strong> terkait hak akses</li>
                            </ul>
                        <?php elseif ($_SESSION['role'] === 'user'): ?>
                            <div class="alert alert-primary bg-primary bg-opacity-10 border-0 text-primary mt-3">
                                <i class="bi bi-person-badge-fill me-2"></i> Anda login sebagai <strong>Mahasiswa</strong>.
                            </div>
                            <p class="text-muted">Sebagai Mahasiswa, panel ini memberikan ringkasan data akademik Anda:</p>
                            <ul class="text-muted">
                                <li>Silakan periksa <strong>Jadwal Kuliah</strong> secara berkala.</li>
                                <li>Akses <strong>Lihat Nilai (KHS)</strong> setelah ujian selesai.</li>
                                <li>Update data personal Anda di menu <strong>Profil Mahasiswa</strong>.</li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-light rounded-circle p-3 me-3 text-success">
                                <i class="bi bi-activity fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-0">Aktivitas Terakhir</h5>
                        </div>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item px-0 border-0 d-flex align-items-center text-muted">
                                <i class="bi bi-check2-circle text-success me-3 fs-5"></i> 
                                Login berhasil dari IP address Anda
                                <span class="ms-auto small">Baru saja</span>
                            </li>
                            <li class="list-group-item px-0 border-0 d-flex align-items-center text-muted">
                                <i class="bi bi-check2-circle text-success me-3 fs-5"></i> 
                                Sesi diamankan dengan token
                                <span class="ms-auto small">Baru saja</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>