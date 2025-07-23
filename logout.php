<?php
session_start();
session_destroy();
header("Location: login.php");
exit();
?>
<!-- This file handles the logout functionality by destroying the session and redirecting to the login page.