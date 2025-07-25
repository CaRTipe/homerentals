<?php
include "./api/configs/classes/filemanager.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messsages</title>
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
                    <span class="text-muted">Admin</span> / <span>Messages</span>
                </p>
            </div>
        </div>
    </div>

    <div class = "container mt-5">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class = "table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($contact) && is_array($contact)) {
                        foreach($contact as $row) {
                            echo "<tr>";
                                  echo "<td>".htmlspecialchars($row['name'] ?? '')."</td>";
                                  echo "<td>".htmlspecialchars($row['email_address'] ?? '')."</td>";
                                  echo "<td>".htmlspecialchars($row['message'] ?? '')."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo '<tr><td colspan="5" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>