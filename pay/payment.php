<?php

session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] !== TRUE) {
    header("Location: ../login.php?error=Please login to access this page");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <style>
        .bg-cream {
            background-color: #fdf5e6 !important;
            /* Cream */
        }
    </style>
</head>

<body>
    <?php
    include './navbar/navbar.php';
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center my-5">Payment Portal</h2>
                <p class="text-center">Please enter your details to proceed with the payment.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="./server//processes.php" method="post" class="mt-5">
                    <div class="mb-3">
                        <label for="tenant_id" class="form-label">Tenant ID</label>
                        <input type="text" class="form-control" id="tenant_id" name="tenant_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" required>
                    </div>
                    <button type="submit" name="pay_rent" class="btn btn-secondary w-50">Pay Rent</button>
                </form>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>