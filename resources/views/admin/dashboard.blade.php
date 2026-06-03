<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard - Daftar Semua User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Data Pengguna Terdaftar</h3>

                    <table class="w-full text-left border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 p-2">ID</th>
                                <th class="border border-gray-300 p-2">Nama</th>
                                <th class="border border-gray-300 p-2">Email</th>
                                <th class="border border-gray-300 p-2">No. HP</th>
                                <th class="border border-gray-300 p-2">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="border border-gray-300 p-2">{{ $user->id }}</td>
                                <td class="border border-gray-300 p-2">{{ $user->name }}</td>
                                <td class="border border-gray-300 p-2">{{ $user->email }}</td>
                                <td class="border border-gray-300 p-2">{{ $user->no_hp }}</td>
                                <td class="border border-gray-300 p-2">
                                    <span class="px-2 py-1 text-xs rounded {{ $user->role === 'admin' ? 'bg-red-200 text-red-800' : 'bg-green-200 text-green-800' }}">
                                        {{ $user->role }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
