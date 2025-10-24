@extends('layouts.admin')

@section('title', 'Applications')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Applications</h1>
    @if($applications->isEmpty())
        <p class="text-gray-600">No applications found.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded shadow">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">Name</th>
                        <th class="px-4 py-2 border-b">Email</th>
                        <th class="px-4 py-2 border-b">Phone</th>
                        <th class="px-4 py-2 border-b">Country</th>
                        <th class="px-4 py-2 border-b">Course</th>
                        <th class="px-4 py-2 border-b">Message</th>
                        <th class="px-4 py-2 border-b">Applied At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $app)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $app->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $app->email }}</td>
                            <td class="px-4 py-2 border-b">{{ $app->phone }}</td>
                            <td class="px-4 py-2 border-b">{{ $app->country }}</td>
                            <td class="px-4 py-2 border-b">{{ $app->course }}</td>
                            <td class="px-4 py-2 border-b">{{ $app->message }}</td>
                            <td class="px-4 py-2 border-b">
                                {{ $app->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
