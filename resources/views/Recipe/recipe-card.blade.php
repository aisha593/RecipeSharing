@extends('layout.custom-layout')
@section('content')


  <div class=" px-4 py-3 sm:px-6 lg:px-8 lg:py-3 ">
    <div class="">
      <div class="">
        <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white">
          Recipe Details
        </h2>
      </div>
  
      <!-- Card -->
      <!-- Blog Article -->
<div class=" px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-2xl">
    <!-- Avatar Media -->
    <div class="flex justify-between items-center mb-6">
      <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
        <div class="shrink-0">
          {{-- Accessimg the profile of the one post the recipe here --}}
          <img class="size-12 rounded-full" src="{{ $recipe->user->profile_image ? asset('storage/' . $recipe->user->profile_image) : asset('images/user-profile.png') }}" alt="Avatar">
        </div>

        <div class="grow">
          <div class="flex justify-between items-center gap-x-2">
            <div>
              <!-- Tooltip -->
              <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                  <span class="font-semibold text-gray-800 dark:text-neutral-200">
                    {{-- Accessing the name of the one posted the recipe --}}
                    {{ $recipe->user->name }}
                  </span>

                  <!-- Dropdown Card -->
                  <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
                    <!-- Body -->
                    <div class="p-4 sm:p-5">
                      <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                        <div class="shrink-0">
                          <img class="size-12 rounded-full" src="{{ $recipe->user->profile_image ? asset('storage/' . $recipe->user->profile_image) : asset('images/user-profile.png') }}" alt="Avatar">
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
                          <span class="font-semibold text-gray-200 dark:text-neutral-200">56</span>
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
                  Jan 18
                </li>
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  8 min read
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
        <h2 class="text-lg font-sem-bold md:text-3xl dark:text-white">
          Recipe Title
        </h2>

        <p class="text-lg text-gray-800 dark:text-neutral-200">
        The recipe name is called
          {{ $recipe->title }} and it is grouped in category named {{ $recipe->category->name }}
         </p>
         
      </div>
      <div class="space-y-3">
      <h2 class="text-lg font-sem-bold md:text-3xl dark:text-white">
        Recipe Description
      </h2>
      
      <p class="text-lg text-gray-800 dark:text-neutral-200">
        We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
        {{ $recipe->description }}
      </p>
    </div>

    <div class="space-y-3">
      <h2 class="text-lg font-sem-bold md:text-3xl dark:text-white">
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
        <form action="{{ route('comment.save', ['recipeId' => $recipe->id]) }}" method="POST">
          @csrf
      <div>
        <label for="hs-feedback-post-comment-textarea-1" class="block mb-2 text-sm font-medium dark:text-white">Leave your Comment</label>
        <div class="mt-1">
          <textarea id="hs-feedback-post-comment-textarea-1" name="comment" rows="3" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Leave your comment here..."></textarea>
        </div>
        @error('comment')
        <span class="text-red-500">{{ $message }}</span>
        @enderror
        <div class="mt-6 grid">
          <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            
            Submit</button>
        </div>
      </form>
      </div>
      
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->

<!-- Sticky Share Group -->
<div class="sticky bottom-6 inset-x-0 text-center">
  <div class="inline-block bg-white shadow-md rounded-full py-3 px-4 dark:bg-neutral-800">
    <div class="flex items-center gap-x-1.5">
      <!-- Button -->
     
      <div class="hs-tooltip inline-block">
        <form action="{{ route('like.store', ['recipeId' => $recipe->id]) }}" method="POST" class="inline-block">
            @csrf
            <button type="submit" class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
                @php
                    $userHasLiked = $recipe->like()->where('user_id', Auth::user()->id)->exists();
                @endphp
    
                <!-- Change SVG icon based on like state -->
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <!-- If liked, display filled heart (red), else display outlined heart (gray) -->
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" class="{{ $userHasLiked ? 'text-red-500 fill-current' : 'text-gray-400 fill-none' }}"/>
                </svg>
    
                {{ $recipe->like->count() }} <!-- Display like count -->
    
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black" role="tooltip">
                    {{ $userHasLiked ? 'Unlike' : 'Like' }}
                </span>
            </button>
        </form>
    </div>
    
  
    
      <!-- Button -->

      <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>

      <!-- Button -->
      <div class="hs-tooltip inline-block">
      <a href="/comment/{{ $recipe->id }}">
        <button type="button" class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/></svg>
         {{ $recipe->comment->count() }}
          <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black" role="tooltip">
            Comment
          </span>
        </button>
      </a>
      </div>
      <!-- Button -->

      <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>

      <!-- Button -->
      <div class="hs-dropdown relative inline-flex">
        <button id="hs-blog-article-share-dropdown" type="button" class="flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><polyline points="16 6 12 2 8 6"/><line x1="12" x2="12" y1="2" y2="15"/></svg>
          Share
        </button>
        <div class="hs-dropdown-menu w-56 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mb-1 z-10 bg-gray-900 shadow-md rounded-xl p-2 dark:bg-neutral-950" role="menu" aria-orientation="vertical" aria-labelledby="hs-blog-article-share-dropdown">
        
          <button onclick="copyLink()" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900" >
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
            Copy link
          </button>


          <div class="border-t border-gray-600 my-2 dark:border-neutral-800"></div>
          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900" href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl) }}">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
            Share on Twitter
          </a>
          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl) }}">
         
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
            Share on Facebook
          </a>
          <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900" href=" mailto:?subject=Check out this recipe&body={{ urlencode(request()->fullUrl) }}">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
            {{-- Share on LinkedIn --}}
            Share via Email
          </a>

            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900" href="https://api.whatsapp.com/send?text={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener noreferrer">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.927 7.927 0 0 0 8.001 0C3.582 0 0 3.582 0 8c0 1.409.372 2.773 1.08 3.975L0 16l4.145-1.065A7.948 7.948 0 0 0 8 16c4.418 0 8-3.582 8-8 0-2.137-.833-4.144-2.399-5.674zM8 14.5c-1.29 0-2.548-.344-3.644-.993l-.26-.155-2.458.631.654-2.396-.17-.27A6.48 6.48 0 0 1 1.5 8c0-3.584 2.916-6.5 6.5-6.5S14.5 4.416 14.5 8 11.584 14.5 8 14.5zm3.623-4.377c-.198-.099-1.174-.58-1.356-.646-.182-.066-.315-.099-.447.099-.132.198-.515.646-.631.779-.116.132-.232.149-.43.05-.198-.099-.837-.308-1.594-.982-.589-.523-.987-1.17-1.103-1.368-.116-.198-.012-.305.087-.403.089-.088.198-.232.297-.348.099-.116.132-.198.198-.33.066-.132.033-.248-.016-.347-.049-.099-.447-1.079-.612-1.477-.161-.387-.325-.334-.447-.34h-.382c-.132 0-.347.05-.53.248-.182.198-.695.678-.695 1.654s.712 1.918.812 2.05c.099.132 1.4 2.14 3.396 3.003.475.205.844.327 1.132.419.475.15.907.129 1.248.078.38-.058 1.174-.48 1.34-.944.165-.464.165-.861.116-.944-.05-.082-.182-.132-.38-.232z"/>
            </svg>
            Share on WhatsApp
            </a>
        </div>
      </div>
      <!-- Button -->
    </div>
  </div>
</div>
<!-- End Sticky Share Group -->
      <!-- End Card -->
    </div>

    <script>
    
      function copyLink() {
        const text = "{{ request()->fullUrl() }}";
        navigator.clipboard.writeText(text).then(function() {
          alert('Link copied to clipboard');
        }).catch(err =>  {
          console.error('Error copying link to clipboard: ', err);
        });
      }
    </script>
  </div>
@endsection
