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
    include 'includes/navbar.php';  // Include the navbar from includes/navbar.php
    ?>


    <!-- Home Page -->
    <div class="container mt-5" id="home">
        <div class="row d-flex flex-row align-items-center justify-content-between">
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
    <!-- About Page -->
    <div class="container mt-5" id="about">
    <div class="row text-md-start">
        <div class="col-12 col-md-8">
            <h1 class="fw-bold">About Us</h1>
            <div class="text-muted mt-4">
                <p>🏠 Affordable & Spacious Rental Houses in Freehold, Nakuru!</p>
                <p>Looking for a comfortable and secure place to call home? Our rental houses in Freehold, Nakuru are now available!</p>
                <p>✅ Spacious & clean rooms</p>
                <p>✅ Reliable water & electricity supply</p>
                <p>✅ Secure gated compound</p>
                <p>✅ Convenient location – close to shops, schools, and public transport</p>
                <p>We offer bedsitters, 1-bedroom, and 2-bedroom units at affordable prices to suit your budget.</p>
                <p>📍 Location: Freehold, Nakuru</p>
                <p>🏡 Your next home is waiting – come and see it for yourself!</p>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact Page -->
    <div class="container mt-5" id="contact">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    Contact Us
                </h1>
                <div class="text-muted mt-4">
                    <p>
                        📞 Contact us today to book a viewing: +254 722 257 250
                    </p>
                </div>
            </div>
        </div>
        <div class = "row mt-5">
            <h1>
                OR
            </h1>
            <div class="col-md-6 mt-5">
                <form action="./server/processes.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary" name="add_contact">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <?php
        include 'includes/footer.php';  // Include the navbar from includes/navbar.php
        ?>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>