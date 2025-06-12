<x-app-layout>

  <x-slot:title>
    RSApp | Add Recipe
  </x-slot>
  

    <!-- Comment Form -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-3 ">
    <div class="mx-auto max-w-2xl">
      <div class="text-center">
        <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white">
         Create Recipe
        </h2>
      </div>
  
      <!-- Card -->
      <div class="mt-3 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
        <form action="{{ route('recipe.store') }}" method="POST"  enctype="multipart/form-data" >
          @csrf
         
            <div class="mb-4 sm:mb-8">
          <label for="category_id" class="block mb-2 text-sm font-medium dark:text-white">Category</label>
          <select name="category_id" id="select_category" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Category">
            <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>Select category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <span class="text-red-500">{{ $message }}</span> 
        @enderror
            </div>
        

          <div class="mb-4 sm:mb-8">
            <label for="title" class="block mb-2 text-sm font-medium dark:text-white">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Title">
            @error('title')
            <span class="text-red-500">{{ $message }}</span> 
            @enderror
          </div>
  
          <div class="mb-4 sm:mb-8">
            <label for="ingredients" class="block mb-2 text-sm font-medium dark:text-white">Ingredients</label>
            <input type="text" name="ingredients" id="ingredients" value="{{ old('ingredients') }}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Ingredients">
            @error('ingredients')
            <span class="text-red-500">{{ $message }}</span> 
            @enderror
          </div>
  
          <div class="mb-4 sm:mb-8">
            <label for="description" class="block mb-2 text-sm font-medium dark:text-white">Description</label>
            <div class="mt-1">
              <textarea id="description" name="description" rows="3" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Description">
                {{ old('description') }}
              </textarea>
              @error('description')
              <span class="text-red-500">{{ $message }}</span> 
              @enderror
            </div>
          </div>

         {{-- <div class="mb-4 sm:mb-8">
          <label for="image" class="block mb-2 text-sm font-medium dark:text-white">Upload Image</label>
      
          <!-- Image Preview -->
          <div id="image-preview" class="mb-4 w-48 h-48 bg-gray-200 rounded-lg flex items-start justify-start p-2">
              <!-- Check if there is an old image or use a placeholder -->
              <img id="preview-img" 
                   src="{{ old('image') ? asset('storage/' . old('image')) : (isset($image) ? asset('storage/' . $image) : asset('images/default-placeholder.jpg')) }}" 
                   alt="Image Preview" 
                   class="w-48 h-44 object-cover rounded-lg" />
          </div>
      
          <!-- Image File Input -->
          <input type="file" id="image" name="image" 
                 class="py-3 px-1 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                 onchange="previewImage(event)" />
          
          @error('image')
              <span class="text-red-500">{{ $message }}</span>
          @enderror
      </div> --}}
       <div class="mb-4 sm:mb-8">
            <label for="image" class="block mb-2 text-sm font-medium dark:text-white">Image</label>
            <input type="file" name="image" id="image" accept="image/*" class="block w-full text-sm text-gray-500
              file:mr-4 file:py-2 file:px-4
              file:rounded-lg file:border-0
              file:text-sm file:font-semibold
              file:bg-blue-50 file:text-blue-700
              hover:file:bg-blue-100
              dark:file:bg-neutral-800 dark:file:text-neutral-400 dark:hover:file:bg-neutral-700
              ">
            @error('image')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
            </div>
  
          <div class="mt-6 grid">
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Submit</button>
          </div>
        </form>
      </div>
      <!-- End Card -->
    </div>
  </div>
  <!-- End Comment Form -->
  
{{-- javascript to handle dynamically image preview --}}
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

</x-app-layout>








