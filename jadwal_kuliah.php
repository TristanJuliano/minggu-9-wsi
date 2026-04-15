<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'user') {
    header("Location: dashboard.php");
    exit;
}
?>

<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<div class="wrapper">
    <?php require_once 'includes/sidebar.php'; ?>

    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0 text-dark"><i class="bi bi-calendar-event me-2 text-primary"></i> Jadwal Kuliah</h2>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th class="ps-4 fw-medium border-0">Hari</th>
                                <th class="fw-medium border-0">Waktu</th>
                                <th class="fw-medium border-0">Mata Kuliah</th>
                                <th class="fw-medium border-0">Ruangan</th>
                                <th class="fw-medium border-0">Dosen Pengampu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 fw-semibold text-dark">Senin</td>
                                <td>08:00 - 10:30</td>
                                <td>Pemrograman Web Lanjut</td>
                                <td><span class="badge bg-light text-dark border">Lab Komputer A</span></td>
                                <td>Budi Santoso, M.Kom</td>
                            </tr>
                            <tr>
                                <td class="ps-4 fw-semibold text-dark">Senin</td>
                                <td>11:00 - 13:00</td>
                                <td>Basis Data</td>
                                <td><span class="badge bg-light text-dark border">Ruang 302</span></td>
                                <td>Siti Aminah, Ph.D</td>
                            </tr>
                            <tr>
                                <td class="ps-4 fw-semibold text-dark">Selasa</td>
                                <td>09:00 - 11:30</td>
                                <td>Sistem Operasi</td>
                                <td><span class="badge bg-light text-dark border">Ruang 201</span></td>
                                <td>Andi Wirawan, M.T</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
