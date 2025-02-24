<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Main Section -->
<section class="relative bg-cover w-full object-cover bg-center flex items-center justify-center"
    style="background-image: url('homepage/assets/Ecosystem Breakfast.jpg'); height: 550px">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative mt-40 text-center text-white">
        <h1 class="text-4xl font-bold">Central Space For Digital Economy</h1>
        <p class="mt-4">Fueling Startups, Connecting Visionaries</p>
        <div class="mt-6">
            <a href="register.php" class="btn-primary">Join the Ecosystem</a>
        </div>
    </div>
</section>

<section class="p-6 lg:py-14 lg:px-24 bg-white">
    <div class="container lg:gap-24 gap-7 mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="flex">
            <img src="homepage/assets/your-image.jpg" alt="Innovation">
        </div>
        <div class="text-center">
            <h2 class="text-3xl font-bold text-navy">Innovation & Growth</h2>
            <p class="mt-4">Supporting startups with networking, funding, and mentorship.</p>
        </div>
    </div>
</section>

<!-- More sections can be added similarly -->

<?php include 'footer.php'; ?>
</body>
</html>
