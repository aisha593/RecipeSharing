<div>
<section id="about-skeleton" class="relative overflow-hidden bg-gray-100 dark:bg-neutral-800 animate-pulse">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-white/70 dark:bg-black/60 z-10"></div>

  <!-- Gradient Skeleton Backgrounds -->
  <div aria-hidden="true" class="absolute -top-96 start-1/2 transform -translate-x-1/2 z-0">
    <div class="bg-gradient-to-r from-violet-200 to-purple-200 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] -translate-x-[10rem]"></div>
    <div class="bg-gradient-to-r from-blue-100 via-blue-200 to-blue-100 blur-3xl w-[90rem] h-[50rem] rounded-full -rotate-12 -translate-x-[15rem]"></div>
  </div>

  <!-- Main Content Skeleton -->
  <div class="relative z-20 max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="max-w-2xl mx-auto text-center space-y-4">
      <div class="h-4 w-48 mx-auto bg-gray-300 dark:bg-neutral-600 rounded"></div>

      <div class="h-10 w-3/4 mx-auto bg-gray-300 dark:bg-neutral-600 rounded"></div>
      <div class="h-4 w-2/3 mx-auto bg-gray-300 dark:bg-neutral-600 rounded"></div>

      <div class="flex justify-center gap-4 mt-6">
        <div class="h-10 w-32 bg-gray-300 dark:bg-neutral-600 rounded-lg"></div>
        <div class="h-10 w-32 bg-gray-300 dark:bg-neutral-600 rounded-lg"></div>
      </div>
    </div>
  </div>

  <!-- Category Section Skeleton -->
  <div class="py-6 dark:bg-neutral-900">
    <div class="text-center space-y-3 mb-6">
      <div class="h-6 w-60 mx-auto bg-gray-300 dark:bg-neutral-600 rounded"></div>
      <div class="h-4 w-80 mx-auto bg-gray-300 dark:bg-neutral-600 rounded"></div>
    </div>

    <div class="relative px-4 sm:px-8 md:px-16 lg:px-24">
      <div class="flex gap-4 overflow-hidden justify-center">
        @for ($i = 0; $i < 4; $i++)
          <div class="w-40 h-40 bg-gray-300 dark:bg-neutral-700 rounded-lg"></div>
        @endfor
      </div>
    </div>
  </div>
</section>


<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
  @for ($i = 0; $i < 6; $i++)
    <div class="animate-pulse flex flex-col h-full bg-gray-100 border border-gray-200 rounded-xl p-5 dark:border-neutral-700 dark:bg-neutral-800">
      
      <div class="w-full h-52 bg-gray-300 dark:bg-neutral-700 rounded-xl mb-4"></div>

      <div class="h-5 bg-gray-300 dark:bg-neutral-600 rounded w-3/4 mb-3"></div>

      <div class="space-y-2">
        <div class="h-4 bg-gray-300 dark:bg-neutral-600 rounded w-full"></div>
        <div class="h-4 bg-gray-300 dark:bg-neutral-600 rounded w-5/6"></div>
      </div>

      <div class="mt-4 flex justify-center">
        <div class="h-8 w-24 bg-gray-300 dark:bg-neutral-700 rounded-full"></div>
      </div>
    </div>
  @endfor
</div>

</div>