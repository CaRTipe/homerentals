<?php
include "./server/filemanager.php";

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
                        <p class="card-text display-6 fw-bold"><?php echo count($registered); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Total Houses</h5>
                        <p class="card-text display-6 fw-bold"><?php echo count($houses); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Total Paid</h5>
                        <p class="card-text display-6 fw-bold"></p>
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
    <div class="container mt-5" id="tenant">
    <div class="d-flex flex-row justify-content-end my-3 gap-4">
            <div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#assignModal">
                    Assign House
                </button>
            </div>
        </div>
     <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>House</th>
                    <th>Email Address</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($registered) && is_array($registered)) {
                    foreach($registered as $row) {
                        echo "<tr>";
                              echo "<td>".htmlspecialchars($row['name'] ?? '')."</td>";
                              echo "<td>".htmlspecialchars($row['house_id'] ?? '')."</td>";
                              echo "<td>".htmlspecialchars($row['email_address'] ?? '')."</td>";
                              echo "<td>".htmlspecialchars($row['status'] ?? '')."</td>";
                              echo "<td>".htmlspecialchars($row['price'] ?? '')."</td>";
                              echo "<td>";
                                    echo "<a href=\"#\" class=\"btn btn-sm btn-secondary\">View</a>";
                              echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo '<tr><td colspan="5" class="text-center">No records found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="assignModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign House</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="house_id" class="form-label">House ID</label>
                            <select name="house_id" id="" class="form-select">
                                <option value="">Select House</option>
                                <?php
                                if(isset($houses) && is_array($houses)) {
                                    foreach($houses as $house) {
                                        echo '<option value="'.$house['id'].'">'.$house['id'].'</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tenant_id" class="form-label">Tenant ID</label>
                            <select name="tenant_id" id="" class="form-select">
                                <option value="">Select Tenant</option>
                                <?php
                                if(isset($registered) && is_array($registered)) {
                                    foreach($registered as $tenant) {
                                        echo '<option value="'.$tenant['id'].'">'.$tenant['name'].'</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-secondary">Assign</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>