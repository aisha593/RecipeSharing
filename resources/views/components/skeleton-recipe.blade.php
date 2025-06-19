<!-- resources/views/components/skeleton-loader.blade.php -->
<div id="skeleton-loader" class="space-y-6 animate-pulse">
  @props(['count' => 6])


  <!-- Title Placeholder -->
  <div class="max-w-2xl mx-auto text-center mb-5 lg:mb-8">
    <div class="h-10 bg-gray-300 dark:bg-gray-700 rounded w-48 mx-auto mb-2"></div>
    <div class="h-4 bg-gray-300 dark:bg-gray-700 rounded w-72 mx-auto"></div>
  </div>

  <!-- Grid Placeholder -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @for ($i = 0; $i < $count; $i++)
      <div class="group flex flex-col h-full bg-gray-100 border border-gray-200 rounded-xl p-5 dark:border-neutral-700 transition">
        <!-- Image Placeholder -->
        <div class="w-full h-52 bg-gray-300 dark:bg-gray-700 rounded-xl mb-4"></div>

        <!-- Title Placeholder -->
        <div class="h-5 bg-gray-300 dark:bg-gray-700 rounded w-3/4 mb-3"></div>

        <!-- Description Placeholder -->
        <div class="space-y-2 mb-4">
          <div class="h-3 bg-gray-300 dark:bg-gray-700 rounded w-full"></div>
          <div class="h-3 bg-gray-300 dark:bg-gray-700 rounded w-5/6"></div>
        </div>

        <!-- Button Placeholder -->
        <div class="mt-auto text-center">
          <div class="inline-block h-9 w-24 bg-gray-300 dark:bg-gray-700 rounded-full"></div>
        </div>
      </div>
    @endfor
  </div>

</div>
