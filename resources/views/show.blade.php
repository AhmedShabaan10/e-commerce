<x-layout></x-layout>
<div class="bg-white py-2 px-4 sm:px-4 lg:px-10">
    <div class="max-w-2xl mx-auto lg:max-w-7xl">
        <div class="flex flex-col lg:flex-row lg:space-x-10 ml-20">
            <!-- صورة المنتج -->
            <div >
                <div class="w-auto h-auto overflow-hidden rounded-lg bg-gray-200">
                    <img src="{{ asset('images/' . $product->image) }}" class="w-full h-auto object-cover object-center"> <!-- الحفاظ على الحجم الثابت للصورة -->
                </div>
            </div>

            <!-- تفاصيل المنتج -->
            <div class="lg:w-1/2 flex flex-col justify-between mt-8">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900">{{ $product->name }}</h1>
                    <p class="mt-6 text-2xl text-gray-600">{{ $product->description }}</p>
                    <p class="mt-8 text-2xl font-bold text-green-600">Price : ${{ $product->price }}</p>

                    <!-- المقاسات المتاحة -->
                    <p class="mt-8 text-lg font-medium text-gray-700">Available Sizes: S, M, L, XL</p>
                    
                    <p class="mt-8 text-lg font-medium text-gray-700">Colors :</p>

                    <!-- الألوان المتاحة -->
                    <div class="mt-4 ml-2 flex space-x-4 items-center"> <!-- استخدام space-x-4 لزيادة المسافة بين العناصر -->
                        <div class="flex items-center space-x-2">
                            <span class="block w-6 h-6 rounded-full" style="background-color: #2f0c12;"></span>
                            <p class="text-gray-700">Dark Red</p> <!-- النص لكل لون -->
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="block w-6 h-6 rounded-full" style="background-color: #000000;"></span>
                            <p class="text-gray-700">Black</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="block w-6 h-6 rounded-full" style="background-color: #1f24ac;"></span>
                            <p class="text-gray-700">Blue</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="block w-6 h-6 rounded-full" style="background-color: #329145;"></span>
                            <p class="text-gray-700">Green</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="block w-6 h-6 rounded-full" style="background-color: #8c8c8c;"></span>
                            <p class="text-gray-700">Gray</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="block w-6 h-6 rounded-full" style="background-color: #b60a0a;"></span>
                            <p class="text-gray-700">Red</p>
                        </div>
                    </div>
                    

                </div>
                
                <!-- الأزرار -->
                <div class="flex space-x-4 mb-40"> <!-- تقليل المسافة هنا -->
                    <button type="button" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Add to Cart
                    </button>
                    <button type="button" class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-md text-red-600 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 8.121a3.75 3.75 0 015.304-5.303 3.75 3.75 0 015.303 5.303l-5.304 5.303-5.304-5.303z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
