<x-app-layout>
  <x-slot:title>
    RSApp | Manage recipes by Admin
  </x-slot:title>
  
    <div class="flex flex-col bg-white dark:bg-neutral-900 shadow rounded-lg">
        <!-- Header -->
       
             <div class="pl-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
             
              <!-- Input -->
               
              <form action="{{ route('recipe.showAll') }}" method="GET" class="mb-4">
                <div class="flex flex-wrap gap-4 items-end">
                
                  <div class="flex-1 relative">
                    <label for="search" class="sr-only">Search Recipes</label>
                    <input 
                      type="text" 
                      name="search" 
                      id="search" 
                      value="{{ request('search') }}" 
                      placeholder="Search by title or ingredients" 
                      class="w-full py-2 pl-10 pr-3 border rounded focus:outline-none focus:border-blue-500"
                    >
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                      </svg>
                    </div>
                  </div>
              
                  <!-- Category Dropdown (Optional) -->
                  <div class="w-48">
                    <label for="category_id" class="sr-only">Filter by Category</label>
                    <select name="category_id" id="select_category" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Category">
                      <option value=""  {{ old('category_id') ? '' : 'selected' }}>Select category</option>
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>

                          {{ $category->name }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                  <div>
                    <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600">
                      Search
                    </button>
                  </div>
                </div>
              </form>
              
              
               <!-- End Input -->
                 <div class="pr-6">
                 <a href="/add/recipe" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition">Add Recipe</a>
                 </div>
             </div>
             <!-- End Header -->
   <div class="-m-1.5 overflow-x-auto">
     <div class="p-1.5 min-w-full inline-block align-middle">
       <div class="overflow-hidden">
         <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
           <thead>
             <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">#</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Image</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Title</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Ingredients</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Description</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Created_at</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Delete</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Edit</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">View</th>
               </tr>
           </thead>
           <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @if (count($recipes) > 0)
                    @foreach ($recipes as $recipe)
 
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $loop->iteration }}</td> 
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                          <img src="{{ asset('storage/' . $recipe->image) }}" class="h-24 w-24 object-cover sm:h-24 sm:w-24 md:h-24 md:w-40 lg:h-32 lg:w-32" alt="Recipe Image"> 
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $recipe->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ str($recipe->ingredients)->words(3) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ str($recipe->description)->words(3) }}</td>
 
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $recipe->created_at }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-red-800 dark:text-red-800">
                         <a href="/delete-recipe/{{ $recipe->id }}" onclick="return confirm('Are you sure you want to delete this recipe:?')">
  
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                          </svg>
                         </a>
                          
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-800 dark:text-blue-800">
                          <a href="/edit/recipe/{{ $recipe->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                            
                          </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-800 dark:text-green-800">
                          <a href="/view/recipe/{{ $recipe->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            
                          </a>
                        </td>
                    
                    </tr>
                    @endforeach
                @else
                    <tr>
                      <td colspan="9" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center">No data found !</td>
                    </tr>
                @endif
            
 
           </tbody>
         </table>
           <div class="py-4 px-3">
                     
                     <div class="flex">
                      <div class="flex space-x-4 items-center mb-3">
                          <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                          <form method="GET" action="{{ route('recipe.showAll') }}">
                              <select name="perPage" onchange="this.form.submit()"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                  <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
                                  <option value="7" {{ $perPage == 7 ? 'selected' : '' }}>7</option>
                                  <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                                  <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20</option>
                                  <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                                  <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100</option>
                              </select>
                          </form>
                      </div>
                  </div>
       </div>
     </div>
   </div>
 </div>
 </div>
</x-app-layout>