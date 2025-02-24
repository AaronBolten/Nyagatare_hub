session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

session_regenerate_id(true); // Prevent session hijacking

