@extends('dashboard')

@section('content')
<main class="flex flex-col items-center justify-center flex-grow">

    <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-6">
        <h2 class="text-center text-2xl font-bold mb-6">Danh sách người dùng theo vai trò: <span class="text-blue-600">{{ $role->name }}</span></h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2 text-center">ID</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Tên</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($role->users as $user)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $user->id }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $user->name }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $user->email }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="border border-gray-300 px-4 py-2 text-center text-gray-500">Không có người dùng nào thuộc vai trò này.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </div>

</main>
@endsection
