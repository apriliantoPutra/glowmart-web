<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex items-center">
        <!-- Logo and Cart Button Group -->
        <div class="flex items-center space-x-4">
            <a href="/" class="text-white font-bold text-xl">GlowMart</a>
            @auth
                <a href="#" class="text-white font-bold text-xl">Cart</a>
            @endauth

        </div>
        <!-- Right Aligned Links -->
        <div class="ml-auto flex space-x-4">
            @auth
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white bg-transparent border-0 hover:underline">Logout</button>
                </form>
            @else
                <a href="/login" class="text-white">Login</a>
                <a href="/register" class="text-white">Register</a>
            @endauth


        </div>
    </div>
</nav>
