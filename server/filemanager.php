<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "homerentals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}       

$sql = "SELECT * FROM registered";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_all(MYSQLI_ASSOC)) {
        $_SESSION['registered'][] = $row;
    }
}
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_all(MYSQLI_ASSOC)) {
        $_SESSION['contact'][] = $row;
    }
}




function addTenants($name, $emailaddress, $password) {
    global $conn;
    $query = "INSERT INTO registered (name, email_address, password) VALUES ('$name', '$emailaddress', '$password')";

    if ($conn->query($query) == TRUE) {
        $_SESSION['signup'] = TRUE;
        header("Location: ../login.php");
    } else {
        $_SESSION['signup'] = FALSE;
        echo "Error: " . $query . "<br>" . $conn->error;
        header("Location: register.php");
    }
}

function logTenants($emailaddress, $password) {
    global $conn;
    $sql = "SELECT * FROM registered where email_address = '$emailaddress' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['login'] = TRUE;
    } else {
        $_SESSION['login'] = FALSE;
        echo "Invalid Email And Password!!";
    }
} 

function addContact($name, $emailaddress, $message) {
    global $conn;
    $query = "INSERT INTO contact (name, email_address, message) VALUES ('$name', '$emailaddress', '$message')";

    if ($conn->query($query) == TRUE) {
        $_SESSION['contact'] = TRUE;
        header("Location: ../index.php");
    } else {
        $_SESSION['contact'] = FALSE;
        echo "Error: " . $query . "<br>" . $conn->error;
        header("Location: contact.php");
    }
}
?>