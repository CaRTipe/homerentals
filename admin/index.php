<?php
session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] !== TRUE) {
    header("Location: ../login.php");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'includes/navbar.php';  // Include the navbar from includes/navbar.php
    ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">
                <p class="fw-bold fs-5">
                    <span class="text-muted">Admin</span> / <span>Dashboard</span>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4">
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Total Tenants</h5>
                        <p class="card-text display-6 fw-bold">10</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Total Houses</h5>
                        <p class="card-text display-6 fw-bold">10</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Total Paid</h5>
                        <p class="card-text display-6 fw-bold">10</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Total Unpaid</h5>
                        <p class="card-text display-6 fw-bold">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>