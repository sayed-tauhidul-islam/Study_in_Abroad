@extends('layouts.admin')

@section('title', 'View Degree')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">{{ $degree->name }}</h1>
        <p class="text-gray-600 mt-2">Degree Details</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Basic Information</h3>
            <div class="space-y-3">
                <div>
                    <span class="font-medium text-gray-600">Name:</span>
                    <span class="text-gray-900">{{ $degree->name }}</span>
                </div>
                <div>
                    <span class="font-medium text-gray-600">Level:</span>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
@if($degree->level == 'Undergraduate') bg-green-100 text-green-800
@elseif($degree->level == 'Postgraduate') bg-blue-100 text-blue-800
@elseif($degree->level == 'Doctoral') bg-purple-100 text-purple-800
@elsebg-gray-100 text-gray-800 @endif">
                        {{ $degree->level }}
                    </span>
                </div>
                <div>
                    <span class=" font-medium text-gray-600">Duration:</span>
                    <span class="text-gray-900">{{ $degree->duration_years }}
                        year{{ $degree->duration_years > 1 ? 's' : '' }}</span>
                </div>
                <div>
                    <span class="font-medium text-gray-600">Status:</span>
                    <span
                        class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                        {{ $degree->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $degree->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Description</h3>
            <p class="text-gray-700">
                {{ $degree->description ?: 'No description provided.' }}</p>
        </div>
    </div>

    <div class="border-t pt-6">
        <div class="flex items-center justify-between">
            <div class="text-sm text-gray-500">
                Created: {{ $degree->created_at->format('M d, Y') }}
                @if($degree->updated_at != $degree->created_at)
                    | Updated: {{ $degree->updated_at->format('M d, Y') }}
                @endif
            </div>
            <div class="space-x-3">
                <a href="{{ route('admin.degrees.edit', $degree) }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors duration-300">
                    Edit Degree
                </a>
                <a href="{{ route('admin.degrees.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md transition-colors duration-300">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
