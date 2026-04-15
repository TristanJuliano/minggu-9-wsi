<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Optional toggle for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <div class="d-flex align-items-center">
                <div class="me-4 text-end">
                    <span class="d-block fw-bold text-dark mb-0 leading-tight" style="line-height: 1;">
                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </span>
                    <span class="badge badge-role <?php echo $_SESSION['role'] === 'admin' ? 'badge-admin' : 'badge-user'; ?> mt-1">
                        <?php echo ucfirst(htmlspecialchars($_SESSION['role'])); ?>
                    </span>
                </div>
                <div class="vr me-3" style="height: 35px; opacity: 0.2;"></div>
                <a href="logout.php" class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-bold d-flex align-items-center gap-2">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </div>
        </div>
    </div>
</nav>