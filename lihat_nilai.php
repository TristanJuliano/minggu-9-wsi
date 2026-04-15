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
            <h2 class="fw-bold mb-0 text-dark"><i class="bi bi-award me-2 text-primary"></i> Kartu Hasil Studi (KHS)</h2>
            <div class="d-flex">
                <select class="form-select w-auto me-2">
                    <option>Semester Ganjil 2023/2024</option>
                    <option>Semester Genap 2022/2023</option>
                </select>
                <button class="btn btn-outline-primary"><i class="bi bi-printer"></i> Cetak</button>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center py-3">
                    <div class="text-muted small fw-semibold mb-1">Index Prestasi Semester (IPS)</div>
                    <h3 class="fw-bold text-primary mb-0">3.85</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center py-3">
                    <div class="text-muted small fw-semibold mb-1">Total SKS Diambil</div>
                    <h3 class="fw-bold text-dark mb-0">21</h3>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th class="ps-4 fw-medium border-0">Kode MK</th>
                                <th class="fw-medium border-0">Mata Kuliah</th>
                                <th class="text-center fw-medium border-0">SKS</th>
                                <th class="text-center fw-medium border-0">Nilai Angka</th>
                                <th class="text-center fw-medium border-0">Nilai Huruf</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 text-muted">TIF101</td>
                                <td><div class="fw-semibold text-dark">Pemrograman Web Lanjut</div></td>
                                <td class="text-center">3</td>
                                <td class="text-center">92</td>
                                <td class="text-center"><span class="badge bg-success bg-opacity-10 text-success pe-3 ps-3 py-2 rounded-pill fw-bold">A</span></td>
                            </tr>
                            <tr>
                                <td class="ps-4 text-muted">TIF102</td>
                                <td><div class="fw-semibold text-dark">Basis Data</div></td>
                                <td class="text-center">4</td>
                                <td class="text-center">85</td>
                                <td class="text-center"><span class="badge bg-primary bg-opacity-10 text-primary pe-3 ps-3 py-2 rounded-pill fw-bold">A-</span></td>
                            </tr>
                            <tr>
                                <td class="ps-4 text-muted">TIF103</td>
                                <td><div class="fw-semibold text-dark">Sistem Operasi</div></td>
                                <td class="text-center">3</td>
                                <td class="text-center">88</td>
                                <td class="text-center"><span class="badge bg-success bg-opacity-10 text-success pe-3 ps-3 py-2 rounded-pill fw-bold">A</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
