<x-layout></x-layout>
<div class="p-6 bg-gray-100 shadow-lg rounded-lg max-w-lg mx-auto">
    <div class="flex items-center justify-center mb-6">
        @if (Auth::user()->profile_pic)
            <img src="{{ asset('images/' . Auth::user()->profile_pic) }}" class="w-48 h-48 rounded-full object-cover shadow-md border-4 border-gray-300">
        @else
            <img src="https://via.placeholder.com/150" class="w-32 h-32 rounded-full object-cover filter grayscale shadow-md border-4 border-gray-300">
        @endif
    </div>


    <form action="/profile" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="relative inline-block w-40">
            <input type="file" name="profile_pic_file" id="profile_pic_file" class="w-full cursor-pointer" onchange="updateFileName(this)">
            <input type="hidden" name="profile_pic" id="profile_pic">
            <button type="submit" class="mt-4 w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Update Picture
            </button>
        </div>
    </form>
    
    <script>
        function updateFileName(input) {
            if (input.files.length > 0) {
                const fileName = input.files[0].name;
                document.getElementById('profile_pic').value = fileName;
            }
        }
    </script>
    


    <div class="mb-6 bg-white p-4 rounded-md shadow-md">
        <label class="block text-sm font-bold text-gray-900 mb-1">Name</label>
        <p class="text-lg text-gray-700">{{ Auth::user()->name }}</p>
    </div>
    <div class="mb-6 bg-white p-4 rounded-md shadow-md">
        <label class="block text-sm font-bold text-gray-900 mb-1">Phone Number</label>
        <p class="text-lg text-gray-700">+20 {{ Auth::user()->phone_num }}</p>
    </div>

{{-- <div class="flex justify-between">
        <a href="/password/reset" class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-md shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Reset Password
        </a>
    </div> --}}
</div>

    <script>
        function updateFileName(input) {
            if (input.files.length > 0) {
                const fileName = input.files[0].name;
                document.getElementById('profile_pic').value = fileName;
            }
        }
    </script>
