@extends('layout.custom-layout')
@section('content')
<div>
    <h3 class="text-lg font-bold">All Comments</h3>
</div>


  @foreach ($comment as $item)

  <div class=" items-center mb-6">
    <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
      <div class="shrink-0">
        {{-- Accessimg the profile of the one post the recipe here --}}
        <img class="size-12 rounded-full" src="{{ $item->user->profile_image ? asset('storage/' . $item->user->profile_image) : asset('images/user-profile.png') }}" alt="Avatar">
      </div>

      <div class="grow">
        <div class="flex justify-between items-center gap-x-2">
          <div>
            <!-- Tooltip -->
            <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
              <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                <span class="font-semibold text-gray-800 dark:text-neutral-200">
                  {{-- Accessing the name of the one posted the recipe --}}
                  {{ $item->user->name }}
                </span>

                <!-- Dropdown Card -->
                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
                  <!-- Body -->
                  <div class="p-4 sm:p-5">
                    <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                      <div class="shrink-0">
                        <img class="size-12 rounded-full" src="{{ $item->user->profile_image ? asset('storage/' . $item->user->profile_image) : asset('images/user-profile.png') }}" alt="Avatar">
                      </div>

                      <div class="grow">
                        <p class="text-lg font-semibold text-gray-200 dark:text-neutral-200">
                          {{ $item->user->name }}
                        </p>
                      </div>
                    </div>
                    <p class="text-sm text-gray-200 dark:text-neutral-400">
                      Leyla is a Customer Success Specialist at Preline and spends her time speaking to in-house recruiters all over the world.
                    </p>
                  </div>
                  <!-- End Body -->

                </div>
                <!-- End Dropdown Card -->

              </div>
              
            </div>
            <!-- End Tooltip -->

           
          </div>

       
        </div>
      </div>
    </div>
    <div class="mt-2">
        <p class="px-5 text-sm text-gray-700 dark:text-neutral-400">
            {{ ($item->comment )}}
          </p>
    </div>
  </div>
  
  
     
  @endforeach

  
@endsection
