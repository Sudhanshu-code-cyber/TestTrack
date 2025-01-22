<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-[#070F2B] text-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                TestWebsite
            </div>

            <!-- Navigation Menu -->
            <nav class="hidden md:flex space-x-6">
                <a href="#home" class="hover:text-blue-300 transition duration-300">Home</a>
                <a href="#features" class="hover:text-blue-300 transition duration-300">Features</a>
                <a href="#tests" class="hover:text-blue-300 transition duration-300">Tests</a>
                <a href="#results" class="hover:text-blue-300 transition duration-300">Results</a>
                <a href="#contact" class="hover:text-blue-300 transition duration-300">Contact</a>
            </nav>

            <!-- Actions -->
            <div class="flex space-x-4">
                <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-md text-white shadow-md transition duration-300">
                    Log In
                </button>
                <button class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 rounded-md text-black shadow-md transition duration-300">
                    Sign Up
                </button>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="hidden bg-blue-800 md:hidden">
            <a href="#home" class="block px-4 py-2 text-white hover:bg-blue-600">Home</a>
            <a href="#features" class="block px-4 py-2 text-white hover:bg-blue-600">Features</a>
            <a href="#tests" class="block px-4 py-2 text-white hover:bg-blue-600">Tests</a>
            <a href="#results" class="block px-4 py-2 text-white hover:bg-blue-600">Results</a>
            <a href="#contact" class="block px-4 py-2 text-white hover:bg-blue-600">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-[#1B1A55] text-white">
        <div class="container mx-auto px-6 py-16 flex flex-col md:flex-row items-center">
            <!-- Left Content -->
            <div class="md:w-1/2 text-center md:text-left fade-in">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6 animate-bounce">
                    Ace Your Tests with Ease
                </h1>
                <p class="text-lg md:text-xl mb-6 animate-fade-in">
                    Take your test preparation to the next level. Access practice tests, track your progress, and achieve your goals with our easy-to-use platform.
                </p>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="#tests" class="px-6 py-3 bg-yellow-400 text-black font-medium rounded-md shadow-md hover:bg-yellow-500 transition duration-300">
                        Get Started
                    </a>
                    <a href="#features" class="px-6 py-3 bg-transparent border border-white font-medium rounded-md hover:bg-white hover:text-blue-700 transition duration-300">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center fade-in">
                <img src="https://www.webpagetest.org/assets/images/wpt_home_featureimg-sonar.webp" alt="Hero Image" class="rounded-lg shadow-md transform transition duration-500 hover:scale-105">
            </div>
        </div>
    </section>

    <script>
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        menuToggle.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>

</body>

</html>