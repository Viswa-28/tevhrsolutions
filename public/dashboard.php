<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: admin-login.php");
    exit();
}

include('./config.php');
include('./includes/header.php');  // Your CSS and Bootstrap
include('./includes/admin-nav.php');  // Navigation bar

$logged_in_name = $_SESSION['admin_username'] ?? 'Admin';
$logged_in_email = $_SESSION['admin_email'] ?? '';

$sql = "SELECT * FROM admins";
$result = $conn->query($sql);
$admins = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $admins[] = $row;
    }
}
?>

<body>
    <div class="container mt-5 position-relative">

        <!-- Logout button moved to top-right corner -->
        <div style="position: absolute; top: 15px; right: 15px;">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <!-- Welcome Logged-in Admin -->
        <h2 class="text-center mb-1">
            Welcome <span class="gradient-text"><?php echo htmlspecialchars($logged_in_name); ?></span>
        </h2>
       

        <!-- List all admins WITHOUT edit/delete -->
        <h3 class="mb-3">All Admins</h3>

        <?php if (!empty($admins)): ?>
            <?php foreach ($admins as $admin): ?>
                <div class="card shadow p-4 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <i class="bi bi-person-circle" style="font-size: 4rem; color: #007bff;"></i>
                        </div>
                        <div class="col-md-10">
                            <h4 class="mb-0">
                                <?php echo htmlspecialchars($admin['username']); ?>
                            </h4>
                            <p class="text-muted mb-1">Email: <?php echo htmlspecialchars($admin['email']); ?></p>
                            <p class="text-muted mb-1">Role: Admin</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center text-muted">No admins found.</p>
        <?php endif; ?>

        <!-- Create Admin Button -->
        <a href="create-admin.php" class="btn primary-btn position-fixed bottom-0 end-0 mb-3 me-3 rounded">
            Create Admin
        </a>
    </div>
</body>
