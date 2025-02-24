<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, password, email_verified FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password, $email_verified);
    
    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (!$email_verified) {
            $error = "Please verify your email before logging in.";
        } elseif (password_verify($password, $hashed_password)) {
            $_SESSION["user_id"] = $id;
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found.";
    }
}
?>

<?php include 'header.php'; ?>

<div class="auth-container">
    <!-- Left Section -->
    <div class="auth-left">
        <h1>Welcome to Hanga hub Nyagatare Platform</h1>
    </div>

    <!-- Right Section -->
    <div class="auth-right">
        <img src="images/hanga-logo.png" class="auth-logo" alt="Hanga hubs Logo">
        <h2>Sign in to Continue</h2>

        <form class="auth-form" method="POST" action="authenticate.php">
            <label for="email">Enter Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Enter Your Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="auth-button">Sign In</button>
        </form>
        <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        <div class="auth-footer">
            Need an account? <a href="register.php">Sign Up</a>
        </div>
    </div>
</div>



