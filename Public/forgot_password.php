<?php
include 'db.php';
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $token = bin2hex(random_bytes(50));

    $stmt = $conn->prepare("UPDATE users SET verification_token = ? WHERE email = ?");
    $stmt->bind_param("ss", $token, $email);
    $stmt->execute();

    $reset_link = "http://yourwebsite.com/reset_password.php?token=$token";

    $mail = new PHPMailer(true);
    $mail->setFrom('no-reply@yourwebsite.com', 'Hanga Central');
    $mail->addAddress($email);
    $mail->Subject = 'Reset Password';
    $mail->Body = "Click here to reset your password: $reset_link";
    $mail->send();

    echo "Check your email for the reset link.";
}
?>
