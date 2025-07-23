<?php
include "filemanager.php";


if (isset($_POST['add_tenant'])) {
    if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
        addTenants($_POST['username'], $_POST['email'], $_POST['password']);
    }
} else if (isset($_POST['log_tenant'])) {
    if (isset($_POST['email'], $_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars(($_POST['password']));
        $user = logTenants($email, $password);
        if ($user == false) {
            header("Location: ../login.php?error=invalid emailaddress or password");
            exit();
        } 
        $user_type = $user['user_type'];
        if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
            if ($user_type == "admin") {
                header("Location: ../admin/index.php");
                exit();
            } else if ($user_type == "tenant") {
                header("Location: ../pay/payment.php");
                exit();
            }
        } else {
            header("Location: ../login.php?error=invalid emailaddress or password");
            exit();
        }
    } else {
        header("Location: ../login.php?error=email and password required");
        exit();
    }
} else if (isset($_POST['add_contact'])) {
    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
        addContact($_POST['name'], $_POST['email'], $_POST['message']);
    }
}
