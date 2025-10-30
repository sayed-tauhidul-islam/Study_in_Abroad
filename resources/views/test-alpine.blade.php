<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Alpine.js Dropdown</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Alpine.js Dropdown Test</h1>
        
        <!-- Test 1: Simple Toggle -->
        <div class="mb-8">
            <h2 class="text-xl mb-2">Test 1: Simple Toggle</h2>
            <div x-data="{ show: false }">
                <button type="button" @click="show = !show" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Toggle (Currently: <span x-text="show ? 'Open' : 'Closed'"></span>)
                </button>
                <div x-show="show" class="mt-2 p-4 bg-green-100 rounded">
                    Content is visible!
                </div>
            </div>
        </div>

        <!-- Test 2: Dropdown with Click Away -->
        <div class="mb-8">
            <h2 class="text-xl mb-2">Test 2: Dropdown with Click Away</h2>
            <div x-data="{ open: false }" @click.away="open = false" class="relative">
                <button type="button" @click="open = !open" 
                    class="bg-green-600 text-white px-4 py-2 rounded flex items-center">
                    Universities
                    <svg class="w-4 h-4 ml-2" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                
                <div x-show="open" 
                     x-cloak
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     class="absolute left-0 mt-2 w-80 bg-white rounded-lg shadow-2xl z-50">
                    
                    <div class="p-3 border-b border-gray-200">
                        <a href="#" class="text-blue-600 font-semibold">View All Universities</a>
                    </div>
                    
                    <div class="p-4">
                        <div class="mb-3 p-3 hover:bg-gray-50 rounded">
                            <h4 class="font-semibold">Harvard University</h4>
                            <p class="text-sm text-gray-500">Cambridge, USA</p>
                        </div>
                        <div class="mb-3 p-3 hover:bg-gray-50 rounded">
                            <h4 class="font-semibold">Stanford University</h4>
                            <p class="text-sm text-gray-500">Stanford, USA</p>
                        </div>
                        <div class="mb-3 p-3 hover:bg-gray-50 rounded">
                            <h4 class="font-semibold">MIT</h4>
                            <p class="text-sm text-gray-500">Cambridge, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alpine.js Status Check -->
        <div class="mb-8 p-4 bg-blue-50 rounded">
            <h2 class="text-xl mb-2">Alpine.js Status</h2>
            <div x-data="{ loaded: true }">
                <p x-show="loaded" class="text-green-600 font-semibold">✓ Alpine.js is working!</p>
            </div>
            <p class="text-sm text-gray-600 mt-2">If you see the green checkmark above, Alpine.js loaded successfully.</p>
        </div>

        <!-- Instructions -->
        <div class="p-4 bg-yellow-50 rounded">
            <h3 class="font-bold mb-2">Instructions:</h3>
            <ol class="list-decimal list-inside space-y-1 text-sm">
                <li>Test 1 should toggle content when you click the button</li>
                <li>Test 2 dropdown should open when clicked and close when clicking outside</li>
                <li>The chevron arrow should rotate when dropdown opens</li>
                <li>If any test fails, open browser console (F12) to check for errors</li>
            </ol>
        </div>
    </div>

    <!-- Console Logger -->
    <script>
        document.addEventListener('alpine:init', () => {
            console.log('✓ Alpine.js initialized successfully!');
        });
        
        window.addEventListener('load', () => {
            console.log('✓ Page loaded');
            if (window.Alpine) {
                console.log('✓ Alpine object available');
            } else {
                console.error('✗ Alpine object NOT available');
            }
        });
    </script>
</body>
</html>
