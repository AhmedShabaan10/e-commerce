<x-layout></x-layout>
<div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-1 sm:px-6 lg:max-w-7xl lg:px-10">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">T-shirts</h2>

        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach($M_products as $product)
                <div class="group relative flex flex-col bg-white border rounded-lg overflow-hidden shadow-md">
                    <a href="/Category/Men/{{$product['id']}}">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-t-lg bg-gray-200 group-hover:opacity-75 transition-all duration-300">
                        <img src="{{ asset('images/' . $product->image) }}" class="h-64 w-full object-cover object-center">
                    </div>
                    <div class="flex-1 p-4 flex flex-col justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $product->name }}
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">{{ $product->color }}</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">${{ $product->price }}</p>
                    </div>
                    </a>
                    <div class="p-4 flex justify-between space-x-2">
                        <button type="button" class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-transform transform active:scale-95">
                            Add to Cart
                        </button>
                        <button type="button" class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-md text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-transform transform active:scale-95">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 8.121a3.75 3.75 0 015.304-5.303 3.75 3.75 0 015.303 5.303l-5.304 5.303-5.304-5.303z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
