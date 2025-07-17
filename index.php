<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Rentals</title>
    <!-- Bootstrap 5 CSS -->
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

    <!-- Navbar -->
   <?php
    include 'includes/navbar.php'; // Include the navbar from includes/navbar.php
   ?>


    <!-- Home Page -->
    <div class="container mt-5" id="home">
        <div class="row d-flex flex-row align-items-center justify-content-between ">
            <div class="col-md-6">
                <h1 class="fw-bold">Welcome Tenants and House Seekers</h1>
                <p class="text-muted">Find a cozy place to call home.</p>
                <a href="#" class="btn btn-secondary" style="text-align: center;">Explore Now</a>
            </div>
            <div class="col-md-6">
                <img src="./assets/images/house.avif" alt="Home Image" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>