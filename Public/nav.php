<?php
    $current_page = basename($_SERVER['PHP_SELF']); // Detect current page
?>
<nav class="navbar">
    <div class="nav-left">
        <a href="index.php">
            <img src="images/hanga-logo.png" alt="Hanga hubs Logo" class="logo">
        </a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a></li>
        <li><a href="startups.php" class="<?= ($current_page == 'startups.php') ? 'active' : '' ?>">Startup Listing</a></li>
        <li><a href="news.php" class="<?= ($current_page == 'news.php') ? 'active' : '' ?>">News & Opportunities</a></li>
    </ul>
    <div class="nav-right">
        <a href="login.php" class="signin-button">Sign In</a>
        <a href="register.php" class="signup-button">Sign Up</a>
    </div>
</nav>
