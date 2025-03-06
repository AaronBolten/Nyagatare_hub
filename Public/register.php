
<?php
session_start();
include 'db.php';

// PHPMailer for sending verification emails
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . '/../vendor/autoload.php'; // Install using: composer require phpmailer/phpmailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(50)); // Generate a unique token

    // Store user in database with unverified status
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, verification_token, email_verified) VALUES (?, ?, ?, ?, 0)");
    $stmt->bind_param("ssss", $name, $email, $password, $token);

    if ($stmt->execute()) {
        $verification_link = "http://yourwebsite.com/verify.php?token=$token";
        
        // Send verification email
        $mail = new PHPMailer(true);
        try {
            $mail->setFrom('no-reply@yourwebsite.com', 'Hanga Central');
            $mail->addAddress($email);
            $mail->Subject = 'Verify Your Email';
            $mail->Body = "Click the link to verify your email: $verification_link";
            $mail->send();

            $_SESSION["message"] = "A verification email has been sent!";
            header("Location: login.php");
            exit();
        } catch (Exception $e) {
            echo "Error sending email.";
        }
    } else {
        $error = "Registration failed.";
    }
}
?>

<?php include 'header.php'; ?>
<div class="auth-container">
    <!-- Left Section -->
    <div class="auth-left">
        <h1>Join Hanga hub Nyagatare Today</h1>
    </div>

    <!-- Right Section -->
    <div class="auth-right">
        <img src="images/hanga-logo.png" class="auth-logo" alt="Hanga hubs Logo">
        <h2>Create an Account</h2>

        <form class="auth-form" method="POST" action="register_process.php">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Enter Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Enter Your Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm_password" required>

            <button type="submit" class="auth-button">Sign Up</button>
        </form>

        <div class="auth-footer">
            Already have an account? <a href="login.php">Sign In</a>
        </div>
    </div>
</div>


<script>
document.querySelector("form").addEventListener("submit", function (e) {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        e.preventDefault(); // Stop form submission
    }
});
</script>
