@extends('layouts.admin')

@section('title', 'View Suggestion')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <a href="{{ route('admin.suggestions.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center mb-4">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Suggestions
        </a>
        <h1 class="text-3xl font-bold text-gray-900">Suggestion Details</h1>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="border-b border-gray-200 bg-gray-50 px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    @if($suggestion->is_read)
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Read
                        </span>
                    @else
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            Unread
                        </span>
                    @endif
                    
                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                        @if($suggestion->type === 'suggestion') bg-blue-100 text-blue-800
                        @elseif($suggestion->type === 'complaint') bg-red-100 text-red-800
                        @elseif($suggestion->type === 'service') bg-purple-100 text-purple-800
                        @elseif($suggestion->type === 'design') bg-indigo-100 text-indigo-800
                        @else bg-gray-100 text-gray-800
                        @endif">
                        {{ ucfirst($suggestion->type) }}
                    </span>
                </div>

                <div class="flex space-x-2">
                    @if($suggestion->is_read)
                        <form action="{{ route('admin.suggestions.mark-unread', $suggestion) }}" method="POST" class="inline-block">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white text-sm font-medium rounded-md transition-colors">
                                Mark as Unread
                            </button>
                        </form>
                    @else
                        <form action="{{ route('admin.suggestions.mark-read', $suggestion) }}" method="POST" class="inline-block">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-md transition-colors">
                                Mark as Read
                            </button>
                        </form>
                    @endif
                    
                    <form action="{{ route('admin.suggestions.destroy', $suggestion) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this suggestion?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md transition-colors">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="px-6 py-6">
            <!-- Sender Information -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Sender Information</h2>
                <div class="bg-gray-50 rounded-lg p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Name</label>
                        <p class="text-gray-900 font-medium">{{ $suggestion->name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                        <a href="mailto:{{ $suggestion->email }}" class="text-blue-600 hover:text-blue-800">
                            {{ $suggestion->email }}
                        </a>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Submitted</label>
                        <p class="text-gray-900">{{ $suggestion->created_at->format('F j, Y g:i A') }}</p>
                        <p class="text-sm text-gray-500">{{ $suggestion->created_at->diffForHumans() }}</p>
                    </div>
                    @if($suggestion->read_at)
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Read At</label>
                        <p class="text-gray-900">{{ $suggestion->read_at->format('F j, Y g:i A') }}</p>
                        <p class="text-sm text-gray-500">{{ $suggestion->read_at->diffForHumans() }}</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Message -->
            <div>
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Message</h2>
                <div class="bg-gray-50 rounded-lg p-6">
                    <p class="text-gray-800 whitespace-pre-line leading-relaxed">{{ $suggestion->message }}</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="border-t border-gray-200 bg-gray-50 px-6 py-4">
            <div class="flex justify-between items-center">
                <p class="text-sm text-gray-500">
                    Suggestion ID: #{{ $suggestion->id }}
                </p>
                <a href="mailto:{{ $suggestion->email }}?subject=Re: Your {{ ucfirst($suggestion->type) }}" 
                   class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md transition-colors inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Reply via Email
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
