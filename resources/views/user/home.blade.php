<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | GlowMart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    @include('user.navbar')

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 mt-6">
        <h1 class="text-2xl font-bold text-center mb-4">Welcome to GlowMart!</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 justify-items-center">
            <!-- Example Product Card -->
            @foreach ($data as $product)
            <div class="border p-4 rounded-lg shadow-lg max-w-sm">
                <img src="{{ asset('storage/' . $product->image) }}" style="width: 200px" alt="Product Image" class="object-cover rounded-md">

                <h2 class="text-lg font-bold mt-4 text-center">{{ $product->name }}</h2>
                <p class="text-gray-700 text-center">{{ $product->price }}</p>
                <a href="#" class="text-blue-500 mt-2 block text-center">View Details</a>
            </div>
            @endforeach


        </div>
    </main>

    <footer class="bg-gray-800 p-4 text-white text-center mt-8">
        <p>&copy; 2024 GlowMart. All Rights Reserved.</p>
    </footer>

</body>
</html>
