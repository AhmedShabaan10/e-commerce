<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div>
    <header>
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                @guest
                    <div class="hidden w-full text-gray-600 md:flex ">
                        <a class="mt-3 text-gray-900 hover:underline sm:mx-3 sm:mt-0" href="/register">Sign Up</a>
                        <a class="mt-3 text-gray-900 hover:underline sm:mx-3 sm:mt-0" href="/login">Login</a>
                    </div>
                @endguest
                @auth
                    <div class="hidden w-full text-gray-600 md:flex space-x-6 mr-6">
                        <a href="/profile" class="text-gray-900 hover:underline"><img class="h-8 w-8 rounded-full"
                            src="{{ asset('images/' . Auth::user()->profile_pic) }}" alt="User Profile"></a>
                        <form method="POST" action="/logout">
                            @csrf
                            <button type='submit' class="font-bold text-red-500 ml-4">Log Out</button>
                        </form>
                    </div>
                @endauth
                <div class="w-full text-gray-700 md:text-center text-2xl font-semibold ml-4">
                    E-commerce
                </div>
                <div class="flex items-center justify-end w-full mr-4 space-x-4">
                    <a class="text-gray-900 focus:outline-none mx-4 sm:mx-0 space-x-4" href="/Wish">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                            </path>
                        </svg>
                    </a>
                    <a class="text-gray-900 focus:outline-none mx-4 sm:mx-0 space-x-4" href="#">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>
            <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                <div class="flex flex-col sm:flex-row">
                    <a class="{{ request()->is('/') ? 'text-green-700 font-bold' : 'text-gray-600' }} mt-3 hover:underline sm:mx-3 sm:mt-0" href="/">Home</a>
                    
                    <a class="{{ request()->is('shop') ? 'text-green-700 font-bold' : 'text-gray-600' }} mt-3 hover:underline sm:mx-3 sm:mt-0" href="/shop">Shop</a>

                    <div class="relative mt-3 sm:mx-3 sm:mt-0">
                        <button id="categoriesButton" class="{{ request()->is('Category/Men') || request()->is('Category/Women') || request()->is('Category/Kids') || request()->is('Category/Men/*') || request()->is('Category/Women/*') || request()->is('Category/Kids/*')? 'font-bold text-green-700' : 'text-gray-600' }} mt-3 hover:underline sm:mx-2 sm:mt-0">
                            Section
                        </button>
                        <div id="categoriesMenu" class=" hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="categoriesButton">
                                <a href="/Category/Men" class="{{ request()->is('Category/Men') || request()->is('Category/Men/*') ? 'bg-gray-200 text-gray-800' : 'text-gray-600' }} block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem">Men</a>
                                <a href="/Category/Men" class="{{ request()->is('Category/Men') || request()->is('Category/Men/*') ? 'bg-gray-200 text-gray-800' : 'text-gray-600' }} block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem">Women</a>
                                <a href="/Category/Kids" class="{{ request()->is('Category/Kids') || request()->is('Category/Kids/*') ? 'bg-gray-200 text-gray-800' : 'text-gray-600' }} block px-4 py-2 text-sm hover:bg-gray-100"  role="menuitem">Kids</a>
                            </div>
                        </div>
                    </div>
                    
            
                    <a class="{{ request()->is('about') ? 'text-green-700 font-bold' : 'text-gray-600' }} mt-3 hover:underline sm:mx-3 sm:mt-0" href="/about">About</a>
                </div>
            </nav>

            <div class="relative mt-6 max-w-lg mx-auto">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>

                <input
                    class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Search">
            </div>
        </div>
    </header>
    <main class="my-8">

    </main>

</div>
<script>
    document.getElementById('categoriesButton').addEventListener('click', function() {
        var menu = document.getElementById('categoriesMenu');
        menu.classList.toggle('hidden');
    });


    document.addEventListener('click', function(event) {
        var button = document.getElementById('categoriesButton');
        var menu = document.getElementById('categoriesMenu');
        if (!button.contains(event.target) && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script>