<?php
$dsn = "mysql:host=localhost;dbname=food_db";
$user_name = "root";
$user_password = "";

try {
    $conn = new PDO($dsn, $user_name, $user_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
