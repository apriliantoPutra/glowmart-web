@extends('admin.layout.main')

@section('container')
    <main class="p-6 bg-gray-100 flex-1 mt-6">
        <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Total Products</h2>
                <p class="text-2xl mt-2">{{ $totalProduct }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Total Users</h2>
                <p class="text-2xl mt-2">{{ $totalUser }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Active Products</h2>
                <p class="text-2xl mt-2">{{ $productActive }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Active Users</h2>
                <p class="text-2xl mt-2">{{ $userActive }}</p>
            </div>
        </div>

        <!-- Latest Products -->
        <h2 class="text-xl font-bold mt-8">Latest Products</h2>
        <div class="bg-white p-6 rounded-lg shadow-md mt-4">
            <ul>
                @foreach ($products as $product)

                <li class="border-b py-2">Product {{ $loop->iteration }} {{ $product->name }} - {{ $product->price }}</li>
                @endforeach

            </ul>
        </div>

    </main>

@endsection
