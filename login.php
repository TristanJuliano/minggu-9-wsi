<?php
session_start();

// Jika sudah login, langsung arahkan ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

$error = '';

// Simulasi database sederhana
$users = [
    'admin' => ['password' => 'admin123', 'role' => 'admin'],
    'user' => ['password' => 'user123', 'role' => 'user'],
    'mahasiswa1' => ['password' => 'mhs123', 'role' => 'user']
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        // Set Session
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username]['role'];
        
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<?php require_once 'includes/header.php'; ?>

<style>
    body {
        background-color: #f3f6f9;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }
    .login-wrapper {
        width: 100%;
        max-width: 400px;
        padding: 15px;
    }
    .login-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        background: #ffffff;
        overflow: hidden;
    }
    .login-header {
        background: var(--primary-color);
        color: white;
        padding: 30px 20px;
        text-align: center;
    }
    .login-header i {
        font-size: 3rem;
        margin-bottom: 15px;
        display: inline-block;
    }
    .login-body {
        padding: 40px 30px;
    }
    .form-control {
        border-radius: 8px;
        padding: 0.75rem 1rem;
        border: 1px solid #e2e8f0;
    }
    .form-control:focus {
        box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        border-color: var(--primary-color);
    }
    .btn-login {
        background: var(--primary-color);
        border: none;
        padding: 0.75rem;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s;
    }
    .btn-login:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
    }
</style>

<div class="login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <i class="bi bi-person-circle"></i>
            <h4 class="fw-bold mb-0">Login Sistem</h4>
            <p class="mb-0 mt-2 opacity-75 small">Masuk ke akun Anda</p>
        </div>
        <div class="login-body">
            <?php if ($error): ?>
                <div class="alert alert-danger custom-alert d-flex align-items-center mb-4" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <div><?php echo $error; ?></div>
                </div>
            <?php endif; ?>
            <form method="POST" action="">
                <div class="mb-4">
                    <label class="form-label text-muted fw-semibold small">Username</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="bi bi-person"></i></span>
                        <input type="text" name="username" class="form-control border-start-0 ps-0" required placeholder="admin / user">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label text-muted fw-semibold small">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" class="form-control border-start-0 ps-0" required placeholder="admin123 / user123">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 btn-login mt-2">
                    Masuk <i class="bi bi-arrow-right ms-2"></i>
                </button>
                <div class="text-center mt-4">
                    <a href="index.php" class="text-decoration-none text-muted small"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>