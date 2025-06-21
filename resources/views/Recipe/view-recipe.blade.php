<x-app-layout>
  <x-slot:title>
    RSApp | View Recipes 
  </x-slot:title>
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-3 ">
    <div class="mx-auto max-w-2xl">
      <div class="text-center">
        <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white">
          View Recipe
        </h2>
      </div>
  
      <!-- Card -->
      <!-- Blog Article -->
<div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-2xl">
    <!-- Avatar Media -->
    <div class="flex justify-between items-center mb-6">
      <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
        <div class="shrink-0">
          <img class="size-12 rounded-full" src="{{ $recipe->user->profile_image ? asset('storage/' . $recipe->user->profile_image) : asset('images/user-profile.png') }}" alt="Avatar">
        </div>

        <div class="grow">
          <div class="flex justify-between items-center gap-x-2">
            <div>
              <!-- Tooltip -->
              <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                  <span class="font-semibold text-gray-800 dark:text-neutral-200">
                    {{  $recipe->user->name  }}
                  </span>

                  <!-- Dropdown Card -->
                  <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
                    <!-- Body -->
                    <div class="p-4 sm:p-5">
                      <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                        <div class="shrink-0">
                          <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                        </div>

                        <div class="grow">
                          <p class="text-lg font-semibold text-gray-200 dark:text-neutral-200">
                            {{ $recipe->user->name }}
                          </p>
                        </div>
                      </div>
                      <p class="text-sm text-gray-400 dark:text-neutral-400">
                        Leyla is a Customer Success Specialist at Preline and spends her time speaking to in-house recruiters all over the world.
                      </p>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="flex justify-between items-center px-4 py-3 sm:px-5">
                      <ul class="text-xs space-x-3">
                        <li class="inline-block">
                          <span class="font-semibold text-gray-200 dark:text-neutral-200">{{ $imageCount }}</span>
                          <span class="text-gray-400 dark:text-neutral-400">articles</span>
                        </li>
                        <li class="inline-block">
                          <span class="font-semibold text-gray-200 dark:text-neutral-200">1k+</span>
                          <span class="text-gray-400 dark:text-neutral-400">followers</span>
                        </li>
                      </ul>

                      <div>
                        <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                          Follow
                        </button>
                      </div>
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Dropdown Card -->
                </div>
              </div>
              <!-- End Tooltip -->

              <ul class="text-xs text-gray-500 dark:text-neutral-500">
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                 Created_at:
                </li>
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  {{-- 8 min read --}}
                </li>
              </ul>
            </div>

           
          </div>
        </div>
      </div>
    </div>
    <!-- End Avatar Media -->

    <!-- Content -->
    <div class="space-y-5 md:space-y-8">
      <div class="space-y-3">
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">
          Recipe Title
        </h2>

        <p class="text-lg text-gray-800 dark:text-neutral-200">
        The recipe name is called
          {{ $recipe->title }} and it is grouped in category named {{ $recipe->category->name }}
         </p>
         
      </div>
      <div class="space-y-3">
      <h2 class="text-2xl font-bold md:text-3xl dark:text-white">
        Recipe Description
      </h2>
      
      <p class="text-lg text-gray-800 dark:text-neutral-200">
        We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
        {{ $recipe->description }}
      </p>
    </div>

    <div class="space-y-3">
      <h2 class="text-2xl font-bold md:text-3xl dark:text-white">
        Recipe Ingredients
      </h2>
      <p class="text-lg text-gray-800 dark:text-neutral-200">
        We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
        {{ $recipe->ingredients }}
      </p>
    </div>

      <figure>
        <img class="w-full object-cover rounded-xl" src="{{ $recipe->image  ? asset('storage/' . $recipe->image ) : asset('images/default-placeholder.jpg') }}" alt="Blog Image">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          A picture of this recipe
        </figcaption>
      </figure>

      <div class="mx-auto max-w-2xl">
       
      <div class="mt-6 grid">
        <a href="/edit/recipe/{{ $recipe->id }}">
          <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Edit</button>
        </a>
      </div>
      </div>
      
      
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->

      <!-- End Card -->
    </div>
  </div>

  
</x-app-layout>
    