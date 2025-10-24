<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gradient-to-br from-blue-900 via-blue-700 to-blue-400 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md mx-auto p-8 bg-white rounded-2xl shadow-2xl border-t-8 border-blue-700">
        <h1 class="text-3xl font-extrabold mb-6 text-center text-blue-800 tracking-tight">Admin Login</h1>
        @if($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="space-y-6" autocomplete="on">
            @csrf
            <div>
                <label class="block mb-1 font-semibold text-blue-900" for="email">Email</label>
                <input id="email" type="email" name="email"
                    value="{{ old('email') ?? (request()->cookie('admin_email') ?? '') }}"
                    required autofocus
                    class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-blue-50">
            </div>
            <div x-data="{ show: false }" class="relative">
                <label class="block mb-1 font-semibold text-blue-900" for="password">Password</label>
                <input :type="show ? 'text' : 'password'" id="password" name="password" required
                    class="w-full px-4 py-2 border-2 border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-blue-50 pr-12"
                    value="{{ request()->cookie('admin_password') ?? '' }}">
                <button type="button" @click="show = !show" tabindex="-1"
                    class="absolute right-3 top-9 text-blue-600 hover:text-blue-900 focus:outline-none">
                    <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.956 9.956 0 012.293-3.95m3.32-2.69A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.956 9.956 0 01-4.043 5.197M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-between">
                <label class="inline-flex items-center text-blue-900">
                    <input type="checkbox" name="remember" class="form-checkbox text-blue-600 rounded"
                        {{ request()->cookie('admin_email') ? 'checked' : '' }}>
                    <span class="ml-2">Remember me</span>
                </label>
            </div>
            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 text-white py-3 rounded-lg font-bold shadow-lg hover:from-blue-800 hover:to-blue-600 transition">Log
                in</button>
        </form>
        <div class="mt-8 text-center text-blue-900 text-xs opacity-70">
            &copy; 2025 StudyAbroad Admin. All rights reserved.
        </div>
    </div>
</body>

</html>
