@extends('admin.layout.main')

@section('container')
    <main class="p-6 bg-gray-100 flex-1 my-6">
        <h1 class="text-2xl font-bold mb-6">Users</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->phone }}</td>

                            @if ($user->is_approved == false)
                                <td class="px-6 py-4 whitespace-nowrap text-red-500">Pending</td>
                            @else
                                <td class="px-6 py-4 whitespace-nowrap text-green-500">Approve</td>
                            @endif

                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-blue-500">View</a>
                                @if ($user->is_approved == false)
                                    <a href="{{ route('users.approve', $user->id) }}" class="text-green-500 ml-2">Approve</a>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
