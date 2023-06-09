<?php
include("path.php");
session_start();

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy();

header('Location: ' . BASE_URL . '/main/main.php');
exit();
?>

<!-- IT WAS BASE_URL -->
