
<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<?php include 'nav.php';?>


<!-- Hero Section -->
<div class="hero">
    <div class="hero-content">
        <h1>Welcome to Hanga hub Nyagatare</h1>
        <p>Innovate, Invest and Grow</p>
        <a href="register.php" class="hero-button">Join now</a>
    </div>
</div>

<?php
    // $data = json_decode(file_get_contents('https://testing.hangacentral.rw/api/investors/419pVj9SfP/nyagatare'), true);

//     require('../vendor/autoload.php');
//     $client =   new \GuzzleHttp\Client();

//     try {
//         $response   =   $client->request(
//             'POST',
//             'https://testing.hangacentral.org/api/investors/419pVj9SfP/nyagatare',
//         );
//         $response   =   json_decode($response->getBody());

//         print($response);

//     } catch (\Throwable $th) {
//         die($th);
//     }
    
// ?>
<!-- Ecosystem Section -->
<div class="ecosystem-section">
    <div class="logos">
        <img src="images/ict_chamber.png" alt="ICT Chamber logo">
        <img src="images/EU-logo.svg" alt="EU Logo">
        <img src="images/RISA Logo.jfif" alt="RISA logo">
        <img src="images/MINICT-logo-JPEG.webp" alt="MINICT logo">
    </div>

    <h2>Our Growing Ecosystem at a Glance</h2>

    <div class="stats-container">
        <?php
        include 'db.php';
        $result = $conn->query("SELECT * FROM ecosystem_stats WHERE title IN ('Startups', 'Investors', 'Mentors')");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='stat-box'>
                    <h3>{$row['value']}</h3>
                    <p>{$row['description']}</p>
                  </div>";
        }
        ?>
    </div>
</div>

<!-- What You Can Do Section -->
<div class="what-you-can-do">
    <h2>What You Can Do at Hanga Hub Nyagatare</h2>

    <div class="cards-container">
        <!-- Card 1: Accelerate Your Growth -->
        <div class="info-card">
            <div class="card-content">
                <h3>Accelerate Your Growth Today</h3>
                <p>Join Hanga Hub Nyagatare to expand your business, connect with investors, access mentorship, and gain the tools to drive your startup's growth.</p>
            </div>
            <img src="images/startups.png" alt="Startups Icon">
        </div>

        <!-- Card 2: Empower Entrepreneurs -->
        <div class="info-card">
            <div class="card-content">
                <h3>Empower the Next Wave of Entrepreneurs</h3>
                <p>Support Rwanda's entrepreneurial ecosystem by mentoring, investing in, and collaborating with innovative startups.</p>
            </div>
            <img src="images/mentor.png" alt="Mentor Icon">
        </div>

        <!-- Card 3: Support the Ecosystem -->
        <div class="info-card">
            <div class="card-content">
                <h3>Support the Ecosystem</h3>
                <p>Contribute to a thriving ecosystem by offering resources, expertise, and opportunities to startups and entrepreneurs.</p>
            </div>
            <img src="images/hubs.png" alt="Support Icon">
        </div>

        <!-- Card 4: Discover High-Impact Startups -->
        <div class="info-card">
            <div class="card-content">
                <h3>Discover High-Impact Startups</h3>
                <p>Stay updated on the latest innovations and connect with startups making a significant impact across various sectors.</p>
            </div>
            <img src="images/investor.png" alt="Investor Icon">
        </div>
    </div>
</div>
<!-- Explore Our Vibrant Ecosystem Section -->
<section class="ecosystem-section1">
    
        <!-- Section Title -->
        <h2 class="section-title">Explore Our Vibrant Ecosystem</h2>
        <p class="section-subtitle">Discover the people and organizations driving innovation and growth in our community.</p>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search startups, mentors, investors...">
            <div class="tabs">
              <a href="" class="tab-link <?php if($activePage == 'startups') { echo 'active'; } ?>">Startups</a>
              <a href="" class="tab-link <?php if($activePage == 'investors') { echo 'active'; } ?>">Investors</a>
              <a href="" class="tab-link <?php if($activePage == 'mentors') { echo 'active'; } ?>">Mentors</a>
            </div>

            <a href="#" class="view-all">View all</a>
        </div>

        <!-- Grid Display -->
        <div class="cards_2-container">
            <!-- Dummy Data for Startups -->
            <div class="card_2">
                <img src="uploads/startup1.png" alt="HiQ Africa" class="card_2-logo">
                <h3 class="card-title1">HiQ Africa</h3>
                <p class="card-subtitle1">FinTech</p>
                <p class="card-description1">We are enabling FMCG merchants to access timely and affordable financing...</p>
                <button class="card-button1">Show More Results</button>
            </div>

            <div class="card_2">
                <img src="uploads/startup2.png" alt="Hview Tech" class="card_2-logo">
                <h3 class="card-title1">Hview Tech</h3>
                <p class="card-subtitle1">Others</p>
                <p class="card-description1">Hview Tech Group is your reliable software development partner...</p>
                <button class="card-button1">Show More Results</button>
            </div>

            <div class="card_2">
                <img src="uploads/startup3.png" alt="Global Real Estate" class="card_2-logo">
                <h3 class="card-title1">Global Real Estate</h3>
                <p class="card-subtitle1">PropTech</p>
                <p class="card-description1">Global Real Estate is an innovative platform that...</p>
                <button class="card-button1">Show More Results</button>
            </div>
        </div>

</section>


<!-- Discover Section -->
<div class="discover-section">
    <h2>Discover What's Happening at Hanga Hub Nyagatare</h2>

    <!-- Slideshow Container -->
    <div class="slideshow-container">
        <div class="slide fade">
            <img src="images/3D-print.jpg" alt="3D Printing">
        </div>
        <div class="slide fade">
            <img src="images/Fiston-CNC.jpg" alt="CNC Machine">
        </div>
        <div class="slide fade">
            <img src="images/electronics.jpg" alt="Electronics Work">
        </div>

        <!-- Navigation Arrows -->
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>

    <!-- Information Cards -->
    <div class="discover-cards">
        <div class="info-card_1">
            <h3>3D Printing Innovations</h3>
            <p>Discover cutting-edge 3D printing solutions shaping the future of tech.</p>
        </div>
        <div class="info-card_1">
            <h3>Advanced CNC Technology</h3>
            <p>Explore high-precision CNC technology driving the manufacturing industry.</p>
        </div>
        <div class="info-card_1">
            <h3>Electronics and Circuitry</h3>
            <p>Learn about the latest advancements in electronics and smart systems.</p>
        </div>
        <div class="info-card_1">
            <h3>Hands-On Training</h3>
            <p>Engage with industry experts in hands-on innovation workshops.</p>
        </div>
    </div>
</div>

<script src="script.js"></script>
<script scr="script1.js"></script>


<?php include 'footer.php'; ?>
