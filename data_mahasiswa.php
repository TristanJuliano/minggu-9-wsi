<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
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
            <h2 class="fw-bold mb-0 text-dark"><i class="bi bi-people-fill me-2 text-primary"></i> Data Mahasiswa</h2>
            <button class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i> Tambah Mahasiswa</button>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th class="ps-4 fw-medium border-0">NIM</th>
                                <th class="fw-medium border-0">Nama Lengkap</th>
                                <th class="fw-medium border-0">Program Studi</th>
                                <th class="fw-medium border-0">Status</th>
                                <th class="text-end pe-4 fw-medium border-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">20210001</td>
                                <td><div class="fw-semibold text-dark">Ahmad Budiawan</div><div class="small text-muted">ahmad@student.edu</div></td>
                                <td>Sistem Informasi</td>
                                <td><span class="badge bg-success bg-opacity-10 text-success px-2 py-1 rounded-pill">Aktif</span></td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-outline-primary rounded-circle"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger rounded-circle ms-1"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">20210002</td>
                                <td><div class="fw-semibold text-dark">Siti Aminah</div><div class="small text-muted">siti@student.edu</div></td>
                                <td>Teknik Informatika</td>
                                <td><span class="badge bg-success bg-opacity-10 text-success px-2 py-1 rounded-pill">Aktif</span></td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-outline-primary rounded-circle"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger rounded-circle ms-1"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-top text-center py-3">
                <span class="text-muted small">Menampilkan 2 dari 120 mahasiswa</span>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
