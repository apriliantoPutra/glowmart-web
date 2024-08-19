@extends('admin.layout.main')

@section('container')

<div class="max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Add New Product</h2>

    <form action="/admin/products" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
        </div>

        <!-- Price Input -->
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Price</label>
            <input type="text" id="price" name="price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" step="0.01" required>
        </div>

        <!-- Image Upload -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Image</label>
            <input type="file" id="image" name="image" class="mt-1 block w-full text-gray-500 dark:text-gray-400 file:border file:bg-gray-50 file:py-2 file:px-4 file:rounded-md file:text-sm file:font-medium file:text-blue-700 hover:file:bg-gray-100 dark:file:bg-gray-700 dark:file:text-gray-200 dark:hover:file:bg-gray-600" required>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-medium text-sm rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500 dark:focus:ring-blue-400">
                Add Product
            </button>
        </div>
    </form>
</div>

@endsection
