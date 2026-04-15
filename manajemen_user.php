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
            <h2 class="fw-bold mb-0 text-dark"><i class="bi bi-person-gear me-2 text-primary"></i> Manajemen User</h2>
            <button class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i> Tambah User</button>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th class="ps-4 fw-medium border-0">Username</th>
                                <th class="fw-medium border-0">Role</th>
                                <th class="fw-medium border-0">Terakhir Login</th>
                                <th class="text-end pe-4 fw-medium border-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4"><div class="fw-semibold text-dark">admin</div></td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 rounded-pill">Admin</span></td>
                                <td class="text-muted">Baru saja</td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-outline-primary rounded-circle"><i class="bi bi-pencil"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4"><div class="fw-semibold text-dark">user</div></td>
                                <td><span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded-pill">User</span></td>
                                <td class="text-muted">Kemarin, 14:30</td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-outline-primary rounded-circle"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-warning rounded-circle ms-1"><i class="bi bi-arrow-counterclockwise"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
