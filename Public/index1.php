<?php include 'header1.php'; ?>
<?php
include 'db.php';
?>
<!-- Hero Section -->
<section class="bg-black bg-opacity-50 relative h-[500px] bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('images/Nyagatare-launch.jpg');">
    <div class="bg-black bg-opacity-0 p-8 rounded-lg text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Welcome to Nyagatare Hanga Hub</h1>
        <p class="mt-2 text-lg md:text-xl">Innovate, Invest, and Grow</p>
        <a href="register.php" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white text-lg rounded hover:bg-blue-700">Join Now</a>
    </div>
</section>

<!-- Ecosystem Stats -->

<!-- Ecosystem Statistics Section -->
<section class="bg-white py-12 text-center">
    <div class="container mx-auto">
        
        <!-- Logos Row -->
        <div class="flex justify-center items-center space-x-8 mb-5">
            <img src="images/ict_chamber.png" alt="ICT Chamber" class="h-16">
            <img src="images/EU-logo.svg" alt="EU Logo" class="h-12">
            <img src="images/RISA Logo.jfif" alt="RISA" class="h-16">
            <img src="images/MINICT-Logo-JPEG" alt="Ministry of ICT & Innovation" class="h-16">
        </div>

        <!-- Title -->
        <h2 class="text-3xl font-semibold text-gray-800 mb-8">Our Growing Ecosystem at a Glance</h2>
        <!-- Fetch Ecosystem Stats from Database -->
<?php
$query = "SELECT startups, investors, mentors FROM ecosystem_stats LIMIT 1";
$result = mysql_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Assigning values
$startups = $row['startups'] ?? 0;
$investors = $row['investors'] ?? 0;
$mentors = $row['mentors'] ?? 0;
?>


        <!-- Statistics Row -->
        <div class="flex justify-center space-x-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900"><?php echo $startups;?>+</h3>
                <p class="text-gray-600">Startups are innovating across various industries</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-gray-900"><?php echo $investors; ?></h3>
                <p class="text-gray-600">Investors are actively funding the next big ideas</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-gray-900"><?php echo $mentors; ?>+</h3>
                <p class="text-gray-600">Mentors are guiding entrepreneurs toward success</p>
            </div>
        </div>
    </div>
</section>


<!-- Discover Section -->
<section class="bg-gray-200 py-12 text-center">
    <h2 class="text-3xl font-bold text-gray-700">Discover What's Happening</h2>
    <div class="container mx-auto mt-8 flex flex-wrap justify-center gap-8">
        <div class="w-64 bg-gray-800 text-white p-4 rounded-lg">
            <h3 class="text-xl font-bold">3D Printing Innovations</h3>
            <p>Latest in 3D Printing</p>
        </div>
        <div class="w-64 bg-gray-800 text-white p-4 rounded-lg">
            <h3 class="text-xl font-bold">Advanced CNC Technology</h3>
            <p>Precision Manufacturing</p>
        </div>
        <div class="w-64 bg-gray-800 text-white p-4 rounded-lg">
            <h3 class="text-xl font-bold">Electronics & Circuitry</h3>
            <p>New Tech Development</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
