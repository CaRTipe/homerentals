<?php
include __DIR__ . "/../dbconfigs.php";



// Check if user is not logged in
// if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
//     header("Location: ../../../../login.php");
//     exit();
// }

function addTenants($name, $emailaddress, $password, $user_type) {
    global $conn;
    $query = "INSERT INTO registered (name, email_address, password, user_type) VALUES ('$name', '$emailaddress', '$password', '$user_type')";

    if ($conn->query($query) == TRUE) {
        $_SESSION['signup'] = TRUE;
    } else {
        $_SESSION['signup'] = FALSE;
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

function logTenants($emailaddress, $password) {
    global $conn;
    $sql = "SELECT * FROM registered where email_address = '$emailaddress' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['login'] = TRUE;
        return $result->fetch_assoc();
    } else {
        $_SESSION['login'] = FALSE;
        echo "Invalid Email And Password!!";
        return false;
    }
} 

function addContact($name, $emailaddress, $message) {
    global $conn;
    $query = "INSERT INTO contact (name, email_address, message) VALUES ('$name', '$emailaddress', '$message')";

    if ($conn->query($query) == TRUE) {
        return true;
    } else {
        return false;
    }
}

function assignHouse($tenant_id, $house_id) {
    global $conn;
    $query = "UPDATE houses SET tenant_id = $tenant_id WHERE id = $house_id";
    $result = $conn->query($query);
    
    if ($result) {
        header("Location: ../../../index.php?success=1");
    } else {
        header("Location: ../../../index.php?error=" . urlencode($conn->error));
    }
    exit();
}
function AddHouses($price, $description) {
    global $conn;
    $query = "INSERT INTO houses (price, description) VALUES ('$price', '$description')";
    $result = $conn->query($query);
    if ($result) {
        header("Location: ../../../index.php?success=1");
    } else {
        header("Location: ../../../index.php?error=1");
    }
    exit();
}
?>