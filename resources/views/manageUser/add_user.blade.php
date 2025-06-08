<x-app-layout>

  <x-slot:title>
    RSApp | Add Recipe
  </x-slot>
  

    <!-- Comment Form -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-3 ">
    <div class="mx-auto max-w-2xl">
      <div class="text-center">
        <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white">
         Create User
        </h2>
      </div>
  
      <!-- Card -->
      <div class="mt-3 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
        <form action="{{ route('store.user') }}" method="POST"  enctype="multipart/form-data" >
          @csrf

          <div class="mb-4 sm:mb-8">
            <label for="name" class="block mb-2 text-sm font-medium dark:text-white">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter Your Name">
            @error('name')
            <span class="text-red-500">{{ $message }}</span> 
            @enderror
          </div>
  
          <div class="mb-4 sm:mb-8">
            <label for="email" class="block mb-2 text-sm font-medium dark:text-white">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter your Email">
            @error('email')
            <span class="text-red-500">{{ $message }}</span> 
            @enderror
          </div>
  
           <div class="mb-4 sm:mb-8">
            <label for="password" class="block mb-2 text-sm font-medium dark:text-white">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter Your Password">
            @error('password')
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
  


</x-app-layout>








