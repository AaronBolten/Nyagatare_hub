<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["token"];
    $new_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("UPDATE users SET password = ?, verification_token = NULL WHERE verification_token = ?");
    $stmt->bind_param("ss", $new_password, $token);
    $stmt->execute();

    echo "Password updated! You can now <a href='login.php'>Login</a>.";
}
?>
