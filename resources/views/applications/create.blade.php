@extends('layouts.app')

@section('title', 'Apply Now')

@section('content')
<div class="container mx-auto px-4 py-12 max-w-lg">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-700">Apply Now</h1>
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('applications.store') }}" method="POST"
        class="bg-white p-8 rounded-lg shadow-lg space-y-6">
        @csrf
        <div>
            <label class="block mb-1 font-semibold" for="name">Full Name</label>
            <input type="text" name="name" id="name" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="email">Email</label>
            <input type="email" name="email" id="email" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="phone">Phone</label>
            <input type="text" name="phone" id="phone"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="country">Country</label>
            <input type="text" name="country" id="country"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="course">Course</label>
            <input type="text" name="course" id="course"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="message">Message</label>
            <textarea name="message" id="message" rows="3"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>
        <button type="submit"
            class="w-full bg-blue-600 text-white py-3 rounded font-bold hover:bg-blue-700 transition">Submit
            Application</button>
    </form>
</div>
@endsection
