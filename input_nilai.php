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
            <h2 class="fw-bold mb-0 text-dark"><i class="bi bi-journal-check me-2 text-primary"></i> Input Nilai</h2>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label text-muted fw-semibold small">Mata Kuliah</label>
                            <select class="form-select">
                                <option>Pemrograman Web</option>
                                <option>Basis Data</option>
                                <option>Algoritma</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label text-muted fw-semibold small">Mahasiswa</label>
                            <select class="form-select">
                                <option>Ahmad Budiawan - 20210001</option>
                                <option>Siti Aminah - 20210002</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label text-muted fw-semibold small">Bulan/Semester</label>
                            <input type="text" class="form-control" value="Ganjil 2023/2024" readonly>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <label class="form-label">Tugas (20%)</label>
                            <input type="number" class="form-control" placeholder="0-100">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Kuis (10%)</label>
                            <input type="number" class="form-control" placeholder="0-100">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">UTS (30%)</label>
                            <input type="number" class="form-control" placeholder="0-100">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">UAS (40%)</label>
                            <input type="number" class="form-control" placeholder="0-100">
                        </div>
                    </div>
                    
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Simpan Nilai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
