<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . '/../vendor/autoload.php'; // Ensure autoload works
    require_once __DIR__ . '/../db.php'; // Connect to your database

    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // 🔹 Check if passwords match
    if ($password !== $confirm_password) {
        echo "Error: Passwords do not match!";
        exit();
    }

    // 🔹 Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 🔹 Insert into database (adjust based on your table structure)
    $query = "INSERT INTO users (email, password) VALUES (?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: login.php");
    } else {
        echo "Error: Registration failed!";
    }
}
