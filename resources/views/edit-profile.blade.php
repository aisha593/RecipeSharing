<div>
    <form action="{{ route('user.profile') }}" method="POST"  enctype="multipart/form-data" >
        @csrf
        <div class="mb-4 sm:mb-8">
            <label for="profile_image" class="block mb-2 text-sm font-medium dark:text-white">Upload Image</label>
        
            <!-- Image Preview -->
            <div id="image-preview" class="mb-4 w-24 h-24 sm:w-48 sm:h-48 bg-gray-200 rounded-full flex items-center justify-center p-2 overflow-hidden">
                <!-- Check if there is a user profile or use a placeholder -->
                <img id="preview-img" 
                     src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : asset('images/user-profile.png') }}"
                     alt="Image Preview" 
                     class="w-full h-full object-contain rounded-full" />
            </div>
            <!-- Image File Input -->
            <input type="file" id="profile_image" name="profile_image" 
                   class="py-3 px-1 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                   onchange="previewImage(event)" />
            
            @error('profile_image')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        {{-- <div class="mt-6 grid">
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Update Profille</button>
          </div> --}}
    
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
    
                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Saved.') }}</p>
                @endif
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