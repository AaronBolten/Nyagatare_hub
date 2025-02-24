<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nyagatare Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="index.php" class="flex items-center">
            <img src="images/IBRA4 1.png" alt="Logo" class="h-15">
            <span class="ml-2 text-lg font-bold text-gray-700">Nyagatare Hub</span>
        </a>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-750 focus:outline-none" onclick="toggleMenu()">
            ☰
        </button>

        <!-- Navigation Links -->
        <nav id="nav-menu" class="hidden md:flex space-x-6">
            <a href="index.php" class="text-gray-600 hover:text-blue-600">Home</a>
            <a href="startup-list.php" class="text-gray-600 hover:text-blue-600">Startup Listing</a>
            <a href="news.php" class="text-gray-600 hover:text-blue-600">News</a>
        </nav>

        <!-- Auth Links -->
        <div class="hidden md:flex space-x-4">
            <a href="login.php" class="px-4 py-2 text-gray-600 border border-gray-600 rounded hover:bg-gray-600 hover:text-white">Sign In</a>
            <a href="register.php" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Sign Up</a>
        </div>
    </div>
</header>

<script>
function toggleMenu() {
    var menu = document.getElementById("nav-menu");
    menu.classList.toggle("hidden");
}
</script>
