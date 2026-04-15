<?php
session_start();
require_once 'includes/config.php';

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
                                <th class="fw-medium border-0">Jurusan</th>
                                <th class="text-end pe-4 fw-medium border-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
                            $result = mysqli_query($koneksi, $query);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td class='ps-4'>" . htmlspecialchars($row['nim']) . "</td>";
                                    echo "<td>
                                            <div class='fw-semibold text-dark'>" . htmlspecialchars($row['nama']) . "</div>
                                            <div class='small text-muted'>" . htmlspecialchars($row['email']) . "</div>
                                          </td>";
                                    echo "<td>" . htmlspecialchars($row['jurusan']) . "</td>";
                                    echo "<td class='text-end pe-4'>
                                            <button class='btn btn-sm btn-outline-primary rounded-circle'><i class='bi bi-pencil'></i></button>
                                            <button class='btn btn-sm btn-outline-danger rounded-circle ms-1'><i class='bi bi-trash'></i></button>
                                          </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4' class='text-center py-4'>Tidak ada data mahasiswa.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-top text-center py-3">
                <span class="text-muted small">Menampilkan <?php echo mysqli_num_rows($result); ?> mahasiswa</span>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
