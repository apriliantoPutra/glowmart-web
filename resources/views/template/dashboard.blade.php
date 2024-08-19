<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin GlowMart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <h1 class="text-xl">GlowMart Admin</h1>
        <button id="sidebar-toggle" class="p-2 bg-blue-800 text-white md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </header>

    <div class="flex flex-grow">
        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Main Content -->
        <main class="flex-grow p-8 bg-gray-100 transition-all duration-300">
            <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-bold">Total Products</h2>
                    <p class="text-2xl mt-2">12</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-bold">Total Users</h2>
                    <p class="text-2xl mt-2">34</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-bold">Active Products</h2>
                    <p class="text-2xl mt-2">8</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-bold">Active Users</h2>
                    <p class="text-2xl mt-2">20</p>
                </div>
            </div>

            <!-- Latest Products -->
            <h2 class="text-xl font-bold mt-8">Latest Products</h2>
            <div class="bg-white p-6 rounded-lg shadow-lg mt-4">
                <ul>
                    <li class="border-b py-2">Product 1 - $19.99</li>
                    <li class="border-b py-2">Product 2 - $29.99</li>
                    <li class="border-b py-2">Product 3 - $39.99</li>
                    <li class="border-b py-2">Product 4 - $49.99</li>
                    <li class="border-b py-2">Product 5 - $59.99</li>
                    <li class="border-b py-2">Product 6 - $69.99</li>
                    <li class="border-b py-2">Product 7 - $79.99</li>
                    <li class="border-b py-2">Product 8 - $89.99</li>
                    <li class="border-b py-2">Product 9 - $99.99</li>
                    <li class="border-b py-2">Product 10 - $109.99</li>
                </ul>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 p-4 text-white text-center">
        <p>&copy; 2024 GlowMart Admin. All Rights Reserved.</p>
    </footer>

    <!-- Toggle Sidebar Script -->
    <script>
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('sidebar');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
