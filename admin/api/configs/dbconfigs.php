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
$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_all(MYSQLI_ASSOC)) {
        $_SESSION['houses'][] = $row;
    }
}
$sql = "SELECT registered.name as name, registered.email_address as email_address, registered.status as status, houses.id as house_id, houses.price as price FROM registered LEFT JOIN houses ON registered.tenant_id = houses.tenant_id WHERE registered.user_type = 'tenant'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $registered = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $registered = [];
}

$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $houses = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $houses = [];
}

$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $contact = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $contact = [];
}
?>