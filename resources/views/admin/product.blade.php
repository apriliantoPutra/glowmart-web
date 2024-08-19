@extends('admin.layout.main')

@section('container')
    <main class="p-6 bg-gray-100 flex-1 my-6">

        <h1 class="text-2xl font-bold mb-6">Products</h1>
        <a href="/admin/products/create" class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4 inline-block">Add New
            Product</a>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ asset('storage/' . $product->image) }}" style="height: 100px" alt="...">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->price }}</td>
                            <td class="px-6 py-4 whitespace-nowrap ">
                                @if ($product->status === 'inactive')
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $product->status }}</span>
                                @else
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $product->status }}</span>
                                @endif

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="/admin/products/{{ $product->id }}/edit" class="text-blue-500">Edit</a>
                                <form action="/admin/products/{{ $product->id }}" method="POST" class="inline-block ml-2"
                                    onclick="confirmation(event)">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="text-red-500">Delete</button>
                                </form>

                                @if ($product->status === 'inactive')
                                    <form action="{{ route('products.updateStatus', $product->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-green-500 ml-2">Active</button>
                                    </form>
                                @endif


                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
