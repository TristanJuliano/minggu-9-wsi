<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebar">
    <div class="text-center mb-4">
        <i class="bi bi-mortarboard-fill" style="font-size: 2.5rem; color: var(--primary-color);"></i>
        <h5 class="mt-2 text-white fw-bold">SI Mahasiswa</h5>
    </div>
    
    <div class="sidebar-heading">Main Menu</div>
    <a href="dashboard.php" class="<?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
        <i class="bi bi-grid-1x2-fill"></i> Dashboard
    </a>
    
    <?php if ($_SESSION['role'] === 'admin'): ?>
        <div class="sidebar-heading">Admin Panel</div>
        <a href="data_mahasiswa.php" class="<?php echo ($current_page == 'data_mahasiswa.php') ? 'active' : ''; ?>">
            <i class="bi bi-people-fill"></i> Data Semua Mahasiswa
        </a>
        <a href="input_nilai.php" class="<?php echo ($current_page == 'input_nilai.php') ? 'active' : ''; ?>">
            <i class="bi bi-journal-check"></i> Input Nilai
        </a>
        <a href="manajemen_user.php" class="<?php echo ($current_page == 'manajemen_user.php') ? 'active' : ''; ?>">
            <i class="bi bi-person-gear"></i> Manajemen User
        </a>
    <?php elseif ($_SESSION['role'] === 'user'): ?>
        <div class="sidebar-heading">Akademik</div>
        <a href="jadwal_kuliah.php" class="<?php echo ($current_page == 'jadwal_kuliah.php') ? 'active' : ''; ?>">
            <i class="bi bi-calendar-event"></i> Jadwal Kuliah
        </a>
        <a href="lihat_nilai.php" class="<?php echo ($current_page == 'lihat_nilai.php') ? 'active' : ''; ?>">
            <i class="bi bi-award"></i> Lihat Nilai (KHS)
        </a>
        
        <div class="sidebar-heading">Akun</div>
        <a href="profil_mahasiswa.php" class="<?php echo ($current_page == 'profil_mahasiswa.php') ? 'active' : ''; ?>">
            <i class="bi bi-person-circle"></i> Profil Mahasiswa
        </a>
    <?php endif; ?>
</div>