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
        <h2 class="fw-bold mb-4 text-dark"><i class="bi bi-person-circle me-2 text-primary"></i> Profil Mahasiswa</h2>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body py-5">
                        <div class="mb-3">
                            <i class="bi bi-person-bounding-box text-primary opacity-50" style="font-size: 5rem;"></i>
                        </div>
                        <h4 class="fw-bold mb-1"><?php echo htmlspecialchars($_SESSION['username']); ?></h4>
                        <p class="text-muted mb-3">Mahasiswa Aktif</p>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">NIM: 202100XX</span>
                        
                        <div class="mt-4 pt-4 border-top">
                            <button class="btn btn-outline-primary w-100"><i class="bi bi-camera"></i> Ubah Foto</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4 border-bottom pb-2">Data Personal</h5>
                        
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label text-muted small fw-semibold">Nama Lengkap</label>
                                    <input type="text" class="form-control" value="Nama Lengkap User" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-muted small fw-semibold">Program Studi</label>
                                    <input type="text" class="form-control" value="Sistem Informasi" readonly>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label text-muted small fw-semibold">Email Akademik</label>
                                    <input type="email" class="form-control" value="user@student.edu">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-muted small fw-semibold">Nomor Telepon</label>
                                    <input type="text" class="form-control" value="08123456789">
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label text-muted small fw-semibold">Alamat Domisili</label>
                                <textarea class="form-control" rows="3">Jl. Pendidikan No. 123, Kota Pelajar</textarea>
                            </div>
                            
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary px-4"><i class="bi bi-save me-1"></i> Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
