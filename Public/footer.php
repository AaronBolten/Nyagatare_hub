<footer class="footer">
    <div class="footer-container">
        <!-- Left Section: Logo & Social Media -->
        <div class="footer-left">
            <img src="images/IBRA4 1.png" alt="Hanga Central Logo" class="footer-logo">
            <p>Follow us on social media for the latest updates, insights, and opportunities in Rwanda's Innovation Ecosystem.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>

        <!-- Middle Section: Explore Links -->
        <div class="footer-middle">
            <h3>Explore</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Maturity Assessment</a></li>
            </ul>
        </div>

        <!-- Right Section: Events from Database -->
        <div class="footer-right">
            <h3>Events</h3>
            <?php
            include 'db.php';
            $result = $conn->query("SELECT * FROM events ORDER BY date ASC LIMIT 2");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='event'>
                        <img src='{$row['image']}' alt='Event Image'>
                        <div>
                            <h4>" . date("d M, Y", strtotime($row['date'])) . "</h4>
                            <p>{$row['title']}</p>
                        </div>
                      </div>";
            }
            ?>
        </div>

        <!-- Contact Info -->
        <div class="footer-contact">
            <h3>Contact Info</h3>
            <p><i class="fas fa-map-marker-alt"></i> P83F+C7G, Nyagatare - Ryabega Road, Ryabega</p>
            <p><i class="fas fa-envelope"></i> info@nyagatarehub.org</p>
            <p><i class="fas fa-phone"></i> (+250) 788 683 340</p>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="footer-bottom">
        <p>© Copyright 2025. All Rights Reserved.</p>
        <ul>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Support</a></li>
        </ul>
    </div>
</footer>

