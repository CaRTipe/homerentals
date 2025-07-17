<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <style>
        .bg-cream {
            background-color: #fdf5e6 !important;
            /* Cream */
        }

        .container {
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    include 'includes/navbar.php'; // Include the navbar from includes/navbar.php
    ?>

    <div class="container ">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 d-flex flex-column justify-content-center align-items-center">
                <div>
                    <h2 class="text-center my-5">Register</h2>
                </div>
                <div class="card p-4 bg-cream shadow-sm" style="width: 500px; height: 400px;">
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-secondary w-50">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>