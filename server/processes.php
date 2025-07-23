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
        logTenants($email, $password);
        if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
            header("Location: ../pay/payment.php");
            exit();
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
