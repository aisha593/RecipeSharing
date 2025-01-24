<div>
    <form action="{{ route('user.profile') }}" method="POST"  enctype="multipart/form-data" >
        @csrf
        <div class="mb-4 sm:mb-8">
            <label for="profile_image" class="block mb-2 text-sm font-medium dark:text-white">Upload Image</label>
        
            <!-- Image Preview -->
            <div id="image-preview" class="mb-4 w-48 h-48 bg-gray-200 rounded-lg flex items-start justify-start p-2">
                <!-- Check if there is an old image or use a placeholder -->
                <img id="preview-img" 
                     src="{{ old('image') ? asset('storage/' . old('image')) : (isset($image) ? asset('storage/' . $image) : asset('images/default-placeholder.jpg')) }}" 
                     alt="Image Preview" 
                     class="w-48 h-44 object-cover rounded-lg" />
            </div>
        
            <!-- Image File Input -->
            <input type="file" id="profile_image" name="profile_image" 
                   class="py-3 px-1 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                   onchange="previewImage(event)" />
            
            @error('profile_image')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
            <div class="mt-6 grid">
              <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Update Profille</button>
            </div>
    
    </form>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview-img');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
      </script>
</div>