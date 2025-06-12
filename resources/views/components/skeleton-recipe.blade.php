<div>
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