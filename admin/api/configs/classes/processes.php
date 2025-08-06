<?php
include "filemanager.php";


if (isset($_POST['add_tenant'])) {
    if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['user_type'])) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $user_type = htmlspecialchars($_POST['user_type']);
        addTenants($username, $email, $password, $user_type);
        $response = [
            "status" => "success",
            "message" => "Tenant added successfully"
        ];
        echo json_encode($response);
    }
    
} else if (isset($_POST['log_tenant'])) {
    if (isset($_POST['email'], $_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars(($_POST['password']));
        $user = logTenants($email, $password);
        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
            $response = [
                "status" => "success",
                "message" => "Login successful",
                "data" => [
                    "email" => $email,
                    "user_type" => $user['user_type']
                ]
            ];
        } else {
            $response = [
                "status" => "error",
                "message" => "Login failed"
            ];
        }
        echo json_encode($response);
    }
} else if (isset($_POST['add_contact'])) {
    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        addContact($name, $email, $message);
        $response = [
            "status" => "success",
            "message" => "Contact added successfully"
        ];
        echo json_encode($response);
    }
} else if (isset($_POST['assign'])){
    if(isset($_POST['tenant_id']) && isset($_POST['house_id'])){
        $id = $_POST['tenant_id'];
        assignHouse($id, $_POST['house_id']);
    }
} else if (isset($_POST['add_house'])){
    if(isset($_POST['price']) && isset($_POST['description'])){
        AddHouses($_POST['price'], $_POST['description']);
    }
}
    


