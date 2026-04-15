<?php
session_start();
// Menggunakan require_once untuk menyertakan file koneksi database
require_once 'includes/config.php';

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
                            <?php
                            // Query untuk mengambil data jadwal kuliah
                            $query = "SELECT * FROM jadwal_kuliah ORDER BY FIELD(hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'), waktu ASC";
                            $result = mysqli_query($koneksi, $query);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td class='ps-4 fw-semibold text-dark'>" . htmlspecialchars($row['hari']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['waktu']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['mata_kuliah']) . "</td>";
                                    echo "<td><span class='badge bg-light text-dark border'>" . htmlspecialchars($row['ruangan']) . "</span></td>";
                                    echo "<td>" . htmlspecialchars($row['dosen']) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5' class='text-center py-4'>Belum ada jadwal kuliah.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
