<?php
    $current_page = basename($_SERVER['PHP_SELF']); // Detect current page
?>
<div class="subcontainer">
 <nav class="navbar">
    <div class="nav-left ">
        <a href="index.php">
            <img src="images/hanga-logo.png" alt="Hanga hubs Logo" class="logo">
        </a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php" class="nav-items">Home</a></li>
        <li><a href="startups.php" class="nav-items">Startup Listing</a></li>
        <li><a href="news.php" class="nav-items">News & Opportunities</a></li>
    <div class="nav-right">
        <a href="login.php" class="signin-button">Sign In</a>
        <a href="register.php" class="signup-button">Sign Up</a>
    </div>
    </ul>
    <div class="hamburger" 0nclick="toggleMenu()"> 
        <span class=bar></span>
        <span class=bar></span>
        <span class=bar></span>
    </div>    
  </nav>
</div>


<script>
     document.addEventListener("DOMContentLoaded", function () {
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");
        const navRight = document.querySelector(".nav-right");

        hamburger.addEventListener("click", function () {
            navLinks.classList.toggle("active");
            navRight.classList.toggle("active");
        });
    
function toggleMenu() {
    const navLinks = document.querySelector(".nav-links");
    const navRight = document.querySelector(".nav-right");
    const hamburger = document.querySelector(".hamburger");


    // Toggle class for opening menu
    navLinks.classList.toggle("active");
    navRight.classList.toggle("active");
    hamburger.classList.toggle("active");

    // Ensure body is scrollable
    document.body.classList.toggle("menu-open"); 
}


    // Close menu when a link is clicked
    document.querySelectorAll(".nav-links a").forEach(link => {
        link.addEventListener("click", function () {
            navLinks.classList.remove("active");
            navRight.classList.remove("active");
            hamburger.classList.remove("active");
            document.body.style.overflow = "auto"; // Enable scrolling when menu is closed
        });
    });
});
</script>
