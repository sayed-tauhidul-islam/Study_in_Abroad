@extends('layouts.admin')

@section('title', 'Manage Degrees')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manage Degrees</h1>
        <a href="{{ route('admin.degrees.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-300">
            <i class="fas fa-plus mr-2"></i>Add New Degree
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Level
                    </th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration
                    </th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                    </th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($degrees as $degree)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $degree->name }}</div>
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
@if($degree->level == 'Undergraduate') bg-green-100 text-green-800
@elseif($degree->level == 'Postgraduate') bg-blue-100 text-blue-800
@elseif($degree->level == 'Doctoral') bg-purple-100 text-purple-800
@elsebg-gray-100 text-gray-800 @endif">
                            {{ $degree->level }}
                        </span>
                    </td>
                    <td class=" px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $degree->duration_years }}
                                year{{ $degree->duration_years > 1 ? 's' : '' }}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                            {{ $degree->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $degree->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.degrees.show', $degree) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
                            <a href="{{ route('admin.degrees.edit', $degree) }}"
                                class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                            <form method="POST"
                                action="{{ route('admin.degrees.destroy', $degree) }}"
                                onsubmit="return confirm('Are you sure you want to delete this degree?')"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-gray-500">
                            No degrees found. <a href="{{ route('admin.degrees.create') }}"
                                class="text-blue-600 hover:text-blue-900">Create one now</a>.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($degrees->hasPages())
        <div class="mt-6">
            {{ $degrees->links() }}
        </div>
    @endif
</div>
@endsection
