<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'RecipeSharingApp' }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- <body class="font-sans antialiased"> --}}
        <body class="bg bg-gray-100">
            
            <!-- ========== MAIN CONTENT ========== -->
<!-- Breadcrumb -->
<!-- ========== HEADER ========== -->
<header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 lg:ps-[260px] dark:bg-neutral-800 dark:border-neutral-700">
  <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
    <div class="me-5 lg:me-0 lg:hidden">
      <!-- Logo -->
      <a class="flex item-center gap-2 rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Preline">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-10 h-10"><g data-name="30-cooking book"><path d="M28 56H1v-2s8-3 15-3c7.07 0 12 5 12 5zM63 54v2H36s4.93-5 12-5c7 0 15 3 15 3z" style="fill:#918778"/><path style="fill:#733125" d="M7 60h50v3H7z"/><path d="M57 56v4H7v-4h21c0-1.11 1.79-2 4-2s4 .89 4 2zM36 10.5v.18a19.606 19.606 0 0 0-3 2.29V10.5a1.5 1.5 0 0 1 3 0z" style="fill:#da684e"/><path d="M57 1v10.87C54.21 10.15 49.79 8 45 8a16.946 16.946 0 0 0-9 2.68v-.18a1.5 1.5 0 0 0-3 0v2.47A12.821 12.821 0 0 0 32 14s-5-6-13-6c-4.79 0-9.21 2.15-12 3.87V1z" style="fill:#da684e"/><path d="M32 51v3c-2.21 0-4 .89-4 2 0 0-4.93-5-12-5-7 0-15 3-15 3V17l3-2v34a27.145 27.145 0 0 1 13-3c8 0 15 5 15 5z" style="fill:#ded0b3"/><path d="M63 17v37s-8-3-15-3c-7.07 0-12 5-12 5 0-1.11-1.79-2-4-2v-3s7-5 15-5a27.145 27.145 0 0 1 13 3V15z" style="fill:#eddebf"/><path d="M18 31c-2.76 0-5 1.24-5 4a5 5 0 0 0 10 0c0-2.76-2.24-4-5-4zm-1.31-7h5.54A2.783 2.783 0 0 0 25 21.2a2.612 2.612 0 0 0-2.31-2.4s-2.77.4-2.77-1.2-3.27-1.6-3.27-1.6C14.36 16 13 17.43 13 19.2c0 2.65 1.65 4.8 3.69 4.8zM7 11.87C9.79 10.15 14.21 8 19 8c8 0 13 6 13 6v37s-7-5-15-5a27.145 27.145 0 0 0-13 3V14a26.423 26.423 0 0 1 3-2.13z" style="fill:#ffe8b8"/><path d="M47 39c0-8-8-8-8-8 0 8 8 8 8 8zm1-8c0 8 8 8 8 8 0-8-8-8-8-8zm9-19.13A26.423 26.423 0 0 1 60 14v35a27.145 27.145 0 0 0-13-3c-8 0-15 5-15 5V14a12.821 12.821 0 0 1 1-1.03 19.606 19.606 0 0 1 3-2.29A16.946 16.946 0 0 1 45 8c4.79 0 9.21 2.15 12 3.87z" style="fill:#ffebc2"/><path d="M16 51c-7 0-15 3-15 3v2s8-3 15-3a17.453 17.453 0 0 1 9.452 3H28s-4.93-5-12-5zM48 51c-7.07 0-12 5-12 5h2.548A17.453 17.453 0 0 1 48 53c7 0 15 3 15 3v-2s-8-3-15-3z" style="fill:#696157"/><path d="M36 56c0-1.11-1.79-2-4-2s-4 .89-4 2H7v2h21c0-1.11 1.79-2 4-2s4 .89 4 2h21v-2zM32 11s-5-6-13-6C14.21 5 9.79 7.15 7 8.87v3C9.79 10.15 14.21 8 19 8c8 0 13 6 13 6a12.821 12.821 0 0 1 1-1.03V10.5a1.479 1.479 0 0 1 .171-.682c-.055.049-.12.105-.171.152A12.821 12.821 0 0 0 32 11zM45 5a16.946 16.946 0 0 0-9 2.68 18.942 18.942 0 0 0-1.966 1.4A1.482 1.482 0 0 1 36 10.5v.18A16.946 16.946 0 0 1 45 8c4.79 0 9.21 2.15 12 3.87v-3C54.21 7.15 49.79 5 45 5z" style="fill:#a64f3c"/><path d="M32 51s-7-5-15-5a27.145 27.145 0 0 0-13 3V15l-2 1.333V52s9.932-4.563 15-4a27.436 27.436 0 0 1 13.957 6.077A7.774 7.774 0 0 1 32 54z" style="fill:#c1c4aa"/><path d="M62 52V16.333L60 15v34a27.145 27.145 0 0 0-13-3c-8 0-15 5-15 5v3a7.774 7.774 0 0 1 1.043.077A27.436 27.436 0 0 1 47 48c5.068-.563 15 4 15 4z" style="fill:#d0d4b8"/><path d="M24.719 42.511a20.271 20.271 0 0 1-6.247-2.559c-.157.015-.31.048-.472.048a5 5 0 0 1-5-5c0-.024.007-.043.007-.067A19.849 19.849 0 0 1 9 22.978V10.741c-.728.38-1.407.764-2 1.129A26.423 26.423 0 0 0 4 14v35a27.145 27.145 0 0 1 13-3c8 0 15 5 15 5v-6a36.532 36.532 0 0 0-7.281-2.489z" style="fill:#edd39c"/><path d="M54.719 42.511A20.241 20.241 0 0 1 47 38.946V39s-8 0-8-8a9.409 9.409 0 0 1 1.789.231A19.863 19.863 0 0 1 39 22.978V9.164a18.45 18.45 0 0 0-3 1.516 19.606 19.606 0 0 0-3 2.29A12.821 12.821 0 0 0 32 14v37s7-5 15-5a27.145 27.145 0 0 1 13 3v-4.853a35.982 35.982 0 0 0-5.281-1.636z" style="fill:#f0daad"/><path d="M19.92 17.6c0 1.6 2.77 1.2 2.77 1.2A2.612 2.612 0 0 1 25 21.2a2.783 2.783 0 0 1-2.77 2.8h-5.54C14.65 24 13 21.85 13 19.2c0-1.77 1.36-3.2 3.65-3.2 0 0 3.27 0 3.27 1.6z" style="fill:#ea735c"/><path d="M18 31c2.76 0 5 1.24 5 4a5 5 0 0 1-10 0c0-2.76 2.24-4 5-4z" style="fill:#e84655"/><path d="m39 31 8 8s-8 0-8-8zM48 31l8 8s-8 0-8-8z" style="fill:#658f41"/><path d="m47 39-8-8s8 0 8 8zM56 39l-8-8s8 0 8 8z" style="fill:#96b343"/><circle cx="17" cy="19" r="1" style="fill:#ffd0c9"/><path d="M19 38a5 5 0 0 1-5-5 4.377 4.377 0 0 1 .071-.676A3.579 3.579 0 0 0 13 35a4.993 4.993 0 0 0 9.855 1.147A4.967 4.967 0 0 1 19 38z" style="fill:#c43b48"/><ellipse cx="20.577" cy="33.708" rx=".825" ry="1.148" transform="rotate(-45.02 20.577 33.707)" style="fill:#f6fafd"/><path d="M18.451 11.134a1.341 1.341 0 0 0-.45.849 1.27 1.27 0 0 0 .27.771A5.051 5.051 0 0 0 20.2 14.16a14.037 14.037 0 0 1 4.827 3.846 27.337 27.337 0 0 0 2.441 3.376 1.511 1.511 0 0 0 1.591.534 1.218 1.218 0 0 0 .454-.4A3.969 3.969 0 0 0 30 19.157q-.009-1.265-.063-2.528a6.739 6.739 0 0 0-.209-1.618 5.119 5.119 0 0 0-1.843-2.447c-2.273-1.82-6.962-3.905-9.434-1.43zM47.669 10.08a3.124 3.124 0 0 0-2.644 2.3 1.611 1.611 0 0 0 .23 1.182 2.176 2.176 0 0 0 .686.579 19.207 19.207 0 0 0 5.312 1.686 33.243 33.243 0 0 1 3.689 1.192c1.033.394 2.222 1.235 3.337.911a1.12 1.12 0 0 0 .455-.226c.5-.461.177-1.728-.046-2.254-1.017-2.4-3.965-3.862-6.34-4.65a9.793 9.793 0 0 0-4.679-.72z" style="fill:#fff3db"/><path d="M7 60v3h2a2 2 0 0 1 2-2h42a2 2 0 0 1 2 2h2v-3z" style="fill:#471e17"/><path d="M8 2h48v6h2V1a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v7h2z"/><path d="M63.555 16.168 61 14.465V14a1 1 0 0 0-.35-.759C60.354 12.986 53.274 7 45 7a17.676 17.676 0 0 0-8.4 2.163A2.5 2.5 0 0 0 32 10.5v2.042A18.97 18.97 0 0 0 19 7c-8.274 0-15.354 5.986-15.65 6.241A1 1 0 0 0 3 14v.465l-2.555 1.7A1 1 0 0 0 0 17v39a1 1 0 0 0 1 1h5v6a1 1 0 0 0 1 1h50a1 1 0 0 0 1-1v-6h5a1 1 0 0 0 1-1V17a1 1 0 0 0-.445-.832zM59 14.479v32.907A30.023 30.023 0 0 0 47 45c-6.032 0-11.429 2.672-14 4.182v-34.8a17.612 17.612 0 0 1 2-1.781V44h2V11.255A15.857 15.857 0 0 1 45 9c6.549 0 12.52 4.321 14 5.479zM34 10.5a.5.5 0 0 1 .5-.5.493.493 0 0 1 .389.2q-.473.318-.889.631zM5 14.479C6.48 13.321 12.451 9 19 9c6.494 0 10.96 4.285 12 5.386v34.8C28.429 47.672 23.032 45 17 45a30.023 30.023 0 0 0-12 2.386zm-3 3.056 1-.667V49a1 1 0 0 0 1.513.858A26.506 26.506 0 0 1 17 47c7.571 0 14.352 4.766 14.419 4.814a1 1 0 0 0 1.162 0C32.648 51.766 39.408 47 47 47a26.506 26.506 0 0 1 12.487 2.858A1 1 0 0 0 61 49V16.868l1 .667V52.6A48.8 48.8 0 0 0 48 50a19.048 19.048 0 0 0-11.715 4.409A6.15 6.15 0 0 0 32 53a6.15 6.15 0 0 0-4.285 1.409A19.048 19.048 0 0 0 16 50a48.8 48.8 0 0 0-14 2.6zm0 37.173C4 54.022 10.378 52 16 52a16.588 16.588 0 0 1 9.134 3H2zM56 59H16v2h40v1H8v-1h2v-2H8v-2h20v-.01a.98.98 0 0 0 .38-.066A1 1 0 0 0 29 56c0-.249 1.064-1 3-1s3 .751 3 1a1 1 0 0 0 1 1h20zm-17.134-4A16.588 16.588 0 0 1 48 52c5.622 0 12 2.022 14 2.708V55z"/><path d="M16.692 25h5.538A3.789 3.789 0 0 0 26 21.2a3.584 3.584 0 0 0-3.308-3.4 1.1 1.1 0 0 0-.14.01 2.359 2.359 0 0 1-1.629-.21c0-1.919-2.3-2.6-4.271-2.6C13.957 15 12 16.767 12 19.2c0 3.2 2.105 5.8 4.692 5.8zm-.04-8c1.149 0 2.271.379 2.271.6a1.993 1.993 0 0 0 .7 1.553 4.37 4.37 0 0 0 3.119.65A1.675 1.675 0 0 1 24 21.2a1.788 1.788 0 0 1-1.77 1.8h-5.538C15.233 23 14 21.26 14 19.2c0-1.337 1.041-2.2 2.652-2.2z"/><path d="M16 18h2v2h-2zM24 35a4.739 4.739 0 0 0-3.87-4.724A6.022 6.022 0 0 1 22 30v-2a7.519 7.519 0 0 0-3 .579V27h-2v1.389A9.37 9.37 0 0 0 14 28v2a8.363 8.363 0 0 1 2.165.21C13.6 30.769 12 32.515 12 35a6 6 0 0 0 12 0zm-10 0c0-2.708 2.8-3 4-3s4 .292 4 3a4 4 0 0 1-8 0zM46 19a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 17c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 19.886 41.365 19 46 19z"/><path d="M46 22a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 20c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 22.886 41.365 22 46 22z"/><path d="M46 25a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 23c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 25.886 41.365 25 46 25zM47 40a1 1 0 0 0 1-1c0-7.119-5.887-9-9-9a1 1 0 0 0-1 1c0 7.119 5.887 9 9 9zm-6.482-6.068 3.388 3.388a6.069 6.069 0 0 1-3.388-3.388zm4.964 2.136-3.388-3.388a6.069 6.069 0 0 1 3.388 3.388z"/><path d="M48 30a1 1 0 0 0-1 1c0 7.119 5.887 9 9 9a1 1 0 0 0 1-1c0-7.119-5.887-9-9-9zm6.482 6.068-3.388-3.388a6.069 6.069 0 0 1 3.388 3.388zm-4.964-2.136 3.388 3.388a6.069 6.069 0 0 1-3.388-3.388zM12 59h2v2h-2z"/></g></svg>
<span class="font-semibold text-lg text-gray-800 dark:text-white">RecipesApp</span>
  </a>
  <!-- End Logo -->

  <div class="lg:hidden ms-1"></div>
    </div>

    <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

  <div class="hidden md:block flex-1 max-w-xs">
   
  </div>

  <div class="flex flex-row items-center justify-end gap-1">
   

    <!-- Notifications -->
    <a href="/notifications" class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
      <span class="sr-only">Notifications</span>
    </a>

    <!-- Activity -->
    <button type="button" class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
      <span class="sr-only">Activity</span>
    </button>

    <!-- Dropdown -->
    <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
    <button id="hs-dropdown-account" type="button" class="size-[38px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:text-white" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
      <img class="shrink-0 size-[38px] rounded-full object-cover" src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : asset('images/user-profile.png') }}" alt="Avatar">
    </button>
      <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
    <div class="py-3 px-5 bg-gray-100 rounded-t-lg dark:bg-neutral-700">
      <p class="text-sm text-gray-500 dark:text-neutral-500">Signed in as</p>
      <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">{{ auth()->user()->name }}</p>
    </div>
    <div class="p-1.5 space-y-0.5">
      <x-slot name="content">
        <x-dropdown-link :href="route('profile.edit')">
        {{ __('Profile') }}
        </x-dropdown-link>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <x-dropdown-link :href="route('logout')"
          onclick="event.preventDefault();
              this.closest('form').submit();">
      {{ __('Log Out') }}
      </x-dropdown-link>
      </form>
      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"/><path d="M12 12v9"/><path d="m8 17 4 4 4-4"/></svg>
        Downloads
      </a>
      <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        Team Account
      </a>
    </div>
      </div>
    </div>
    <!-- End Dropdown -->
  </div>
    </div>
  </nav>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<div class="-mt-px">
  <!-- Breadcrumb -->
  <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
    <div class="flex items-center py-2">
      <!-- Navigation Toggle -->
      <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
        <span class="sr-only">Toggle Navigation</span>
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
      </button>
      <!-- End Navigation Toggle -->

      <!-- Breadcrumb -->
      <ol class="ms-3 flex items-center whitespace-nowrap">
        <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
          Application Layout
          <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </li>
        <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
          Dashboard
        </li>
      </ol>
      <!-- End Breadcrumb -->
    </div>
  </div>
  <!-- End Breadcrumb -->
</div>

<!-- Sidebar -->
<div id="hs-application-sidebar" class="hs-overlay  [--auto-close:lg]
  hs-overlay-open:translate-x-0
  -translate-x-full transition-all duration-300 transform
  w-[260px] h-full
  hidden
  fixed inset-y-0 start-0 z-[60]
  bg-white border-e border-gray-200
  lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
  dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-label="Sidebar">
  <div class="relative flex flex-col h-full max-h-full">
    <div class="px-6 pt-4 flex items-center">
      <!-- Logo -->
      <a class="flex item-center gap-2 rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Preline">
       
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-10 h-10"><g data-name="30-cooking book"><path d="M28 56H1v-2s8-3 15-3c7.07 0 12 5 12 5zM63 54v2H36s4.93-5 12-5c7 0 15 3 15 3z" style="fill:#918778"/><path style="fill:#733125" d="M7 60h50v3H7z"/><path d="M57 56v4H7v-4h21c0-1.11 1.79-2 4-2s4 .89 4 2zM36 10.5v.18a19.606 19.606 0 0 0-3 2.29V10.5a1.5 1.5 0 0 1 3 0z" style="fill:#da684e"/><path d="M57 1v10.87C54.21 10.15 49.79 8 45 8a16.946 16.946 0 0 0-9 2.68v-.18a1.5 1.5 0 0 0-3 0v2.47A12.821 12.821 0 0 0 32 14s-5-6-13-6c-4.79 0-9.21 2.15-12 3.87V1z" style="fill:#da684e"/><path d="M32 51v3c-2.21 0-4 .89-4 2 0 0-4.93-5-12-5-7 0-15 3-15 3V17l3-2v34a27.145 27.145 0 0 1 13-3c8 0 15 5 15 5z" style="fill:#ded0b3"/><path d="M63 17v37s-8-3-15-3c-7.07 0-12 5-12 5 0-1.11-1.79-2-4-2v-3s7-5 15-5a27.145 27.145 0 0 1 13 3V15z" style="fill:#eddebf"/><path d="M18 31c-2.76 0-5 1.24-5 4a5 5 0 0 0 10 0c0-2.76-2.24-4-5-4zm-1.31-7h5.54A2.783 2.783 0 0 0 25 21.2a2.612 2.612 0 0 0-2.31-2.4s-2.77.4-2.77-1.2-3.27-1.6-3.27-1.6C14.36 16 13 17.43 13 19.2c0 2.65 1.65 4.8 3.69 4.8zM7 11.87C9.79 10.15 14.21 8 19 8c8 0 13 6 13 6v37s-7-5-15-5a27.145 27.145 0 0 0-13 3V14a26.423 26.423 0 0 1 3-2.13z" style="fill:#ffe8b8"/><path d="M47 39c0-8-8-8-8-8 0 8 8 8 8 8zm1-8c0 8 8 8 8 8 0-8-8-8-8-8zm9-19.13A26.423 26.423 0 0 1 60 14v35a27.145 27.145 0 0 0-13-3c-8 0-15 5-15 5V14a12.821 12.821 0 0 1 1-1.03 19.606 19.606 0 0 1 3-2.29A16.946 16.946 0 0 1 45 8c4.79 0 9.21 2.15 12 3.87z" style="fill:#ffebc2"/><path d="M16 51c-7 0-15 3-15 3v2s8-3 15-3a17.453 17.453 0 0 1 9.452 3H28s-4.93-5-12-5zM48 51c-7.07 0-12 5-12 5h2.548A17.453 17.453 0 0 1 48 53c7 0 15 3 15 3v-2s-8-3-15-3z" style="fill:#696157"/><path d="M36 56c0-1.11-1.79-2-4-2s-4 .89-4 2H7v2h21c0-1.11 1.79-2 4-2s4 .89 4 2h21v-2zM32 11s-5-6-13-6C14.21 5 9.79 7.15 7 8.87v3C9.79 10.15 14.21 8 19 8c8 0 13 6 13 6a12.821 12.821 0 0 1 1-1.03V10.5a1.479 1.479 0 0 1 .171-.682c-.055.049-.12.105-.171.152A12.821 12.821 0 0 0 32 11zM45 5a16.946 16.946 0 0 0-9 2.68 18.942 18.942 0 0 0-1.966 1.4A1.482 1.482 0 0 1 36 10.5v.18A16.946 16.946 0 0 1 45 8c4.79 0 9.21 2.15 12 3.87v-3C54.21 7.15 49.79 5 45 5z" style="fill:#a64f3c"/><path d="M32 51s-7-5-15-5a27.145 27.145 0 0 0-13 3V15l-2 1.333V52s9.932-4.563 15-4a27.436 27.436 0 0 1 13.957 6.077A7.774 7.774 0 0 1 32 54z" style="fill:#c1c4aa"/><path d="M62 52V16.333L60 15v34a27.145 27.145 0 0 0-13-3c-8 0-15 5-15 5v3a7.774 7.774 0 0 1 1.043.077A27.436 27.436 0 0 1 47 48c5.068-.563 15 4 15 4z" style="fill:#d0d4b8"/><path d="M24.719 42.511a20.271 20.271 0 0 1-6.247-2.559c-.157.015-.31.048-.472.048a5 5 0 0 1-5-5c0-.024.007-.043.007-.067A19.849 19.849 0 0 1 9 22.978V10.741c-.728.38-1.407.764-2 1.129A26.423 26.423 0 0 0 4 14v35a27.145 27.145 0 0 1 13-3c8 0 15 5 15 5v-6a36.532 36.532 0 0 0-7.281-2.489z" style="fill:#edd39c"/><path d="M54.719 42.511A20.241 20.241 0 0 1 47 38.946V39s-8 0-8-8a9.409 9.409 0 0 1 1.789.231A19.863 19.863 0 0 1 39 22.978V9.164a18.45 18.45 0 0 0-3 1.516 19.606 19.606 0 0 0-3 2.29A12.821 12.821 0 0 0 32 14v37s7-5 15-5a27.145 27.145 0 0 1 13 3v-4.853a35.982 35.982 0 0 0-5.281-1.636z" style="fill:#f0daad"/><path d="M19.92 17.6c0 1.6 2.77 1.2 2.77 1.2A2.612 2.612 0 0 1 25 21.2a2.783 2.783 0 0 1-2.77 2.8h-5.54C14.65 24 13 21.85 13 19.2c0-1.77 1.36-3.2 3.65-3.2 0 0 3.27 0 3.27 1.6z" style="fill:#ea735c"/><path d="M18 31c2.76 0 5 1.24 5 4a5 5 0 0 1-10 0c0-2.76 2.24-4 5-4z" style="fill:#e84655"/><path d="m39 31 8 8s-8 0-8-8zM48 31l8 8s-8 0-8-8z" style="fill:#658f41"/><path d="m47 39-8-8s8 0 8 8zM56 39l-8-8s8 0 8 8z" style="fill:#96b343"/><circle cx="17" cy="19" r="1" style="fill:#ffd0c9"/><path d="M19 38a5 5 0 0 1-5-5 4.377 4.377 0 0 1 .071-.676A3.579 3.579 0 0 0 13 35a4.993 4.993 0 0 0 9.855 1.147A4.967 4.967 0 0 1 19 38z" style="fill:#c43b48"/><ellipse cx="20.577" cy="33.708" rx=".825" ry="1.148" transform="rotate(-45.02 20.577 33.707)" style="fill:#f6fafd"/><path d="M18.451 11.134a1.341 1.341 0 0 0-.45.849 1.27 1.27 0 0 0 .27.771A5.051 5.051 0 0 0 20.2 14.16a14.037 14.037 0 0 1 4.827 3.846 27.337 27.337 0 0 0 2.441 3.376 1.511 1.511 0 0 0 1.591.534 1.218 1.218 0 0 0 .454-.4A3.969 3.969 0 0 0 30 19.157q-.009-1.265-.063-2.528a6.739 6.739 0 0 0-.209-1.618 5.119 5.119 0 0 0-1.843-2.447c-2.273-1.82-6.962-3.905-9.434-1.43zM47.669 10.08a3.124 3.124 0 0 0-2.644 2.3 1.611 1.611 0 0 0 .23 1.182 2.176 2.176 0 0 0 .686.579 19.207 19.207 0 0 0 5.312 1.686 33.243 33.243 0 0 1 3.689 1.192c1.033.394 2.222 1.235 3.337.911a1.12 1.12 0 0 0 .455-.226c.5-.461.177-1.728-.046-2.254-1.017-2.4-3.965-3.862-6.34-4.65a9.793 9.793 0 0 0-4.679-.72z" style="fill:#fff3db"/><path d="M7 60v3h2a2 2 0 0 1 2-2h42a2 2 0 0 1 2 2h2v-3z" style="fill:#471e17"/><path d="M8 2h48v6h2V1a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v7h2z"/><path d="M63.555 16.168 61 14.465V14a1 1 0 0 0-.35-.759C60.354 12.986 53.274 7 45 7a17.676 17.676 0 0 0-8.4 2.163A2.5 2.5 0 0 0 32 10.5v2.042A18.97 18.97 0 0 0 19 7c-8.274 0-15.354 5.986-15.65 6.241A1 1 0 0 0 3 14v.465l-2.555 1.7A1 1 0 0 0 0 17v39a1 1 0 0 0 1 1h5v6a1 1 0 0 0 1 1h50a1 1 0 0 0 1-1v-6h5a1 1 0 0 0 1-1V17a1 1 0 0 0-.445-.832zM59 14.479v32.907A30.023 30.023 0 0 0 47 45c-6.032 0-11.429 2.672-14 4.182v-34.8a17.612 17.612 0 0 1 2-1.781V44h2V11.255A15.857 15.857 0 0 1 45 9c6.549 0 12.52 4.321 14 5.479zM34 10.5a.5.5 0 0 1 .5-.5.493.493 0 0 1 .389.2q-.473.318-.889.631zM5 14.479C6.48 13.321 12.451 9 19 9c6.494 0 10.96 4.285 12 5.386v34.8C28.429 47.672 23.032 45 17 45a30.023 30.023 0 0 0-12 2.386zm-3 3.056 1-.667V49a1 1 0 0 0 1.513.858A26.506 26.506 0 0 1 17 47c7.571 0 14.352 4.766 14.419 4.814a1 1 0 0 0 1.162 0C32.648 51.766 39.408 47 47 47a26.506 26.506 0 0 1 12.487 2.858A1 1 0 0 0 61 49V16.868l1 .667V52.6A48.8 48.8 0 0 0 48 50a19.048 19.048 0 0 0-11.715 4.409A6.15 6.15 0 0 0 32 53a6.15 6.15 0 0 0-4.285 1.409A19.048 19.048 0 0 0 16 50a48.8 48.8 0 0 0-14 2.6zm0 37.173C4 54.022 10.378 52 16 52a16.588 16.588 0 0 1 9.134 3H2zM56 59H16v2h40v1H8v-1h2v-2H8v-2h20v-.01a.98.98 0 0 0 .38-.066A1 1 0 0 0 29 56c0-.249 1.064-1 3-1s3 .751 3 1a1 1 0 0 0 1 1h20zm-17.134-4A16.588 16.588 0 0 1 48 52c5.622 0 12 2.022 14 2.708V55z"/><path d="M16.692 25h5.538A3.789 3.789 0 0 0 26 21.2a3.584 3.584 0 0 0-3.308-3.4 1.1 1.1 0 0 0-.14.01 2.359 2.359 0 0 1-1.629-.21c0-1.919-2.3-2.6-4.271-2.6C13.957 15 12 16.767 12 19.2c0 3.2 2.105 5.8 4.692 5.8zm-.04-8c1.149 0 2.271.379 2.271.6a1.993 1.993 0 0 0 .7 1.553 4.37 4.37 0 0 0 3.119.65A1.675 1.675 0 0 1 24 21.2a1.788 1.788 0 0 1-1.77 1.8h-5.538C15.233 23 14 21.26 14 19.2c0-1.337 1.041-2.2 2.652-2.2z"/><path d="M16 18h2v2h-2zM24 35a4.739 4.739 0 0 0-3.87-4.724A6.022 6.022 0 0 1 22 30v-2a7.519 7.519 0 0 0-3 .579V27h-2v1.389A9.37 9.37 0 0 0 14 28v2a8.363 8.363 0 0 1 2.165.21C13.6 30.769 12 32.515 12 35a6 6 0 0 0 12 0zm-10 0c0-2.708 2.8-3 4-3s4 .292 4 3a4 4 0 0 1-8 0zM46 19a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 17c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 19.886 41.365 19 46 19z"/><path d="M46 22a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 20c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 22.886 41.365 22 46 22z"/><path d="M46 25a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 23c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 25.886 41.365 25 46 25zM47 40a1 1 0 0 0 1-1c0-7.119-5.887-9-9-9a1 1 0 0 0-1 1c0 7.119 5.887 9 9 9zm-6.482-6.068 3.388 3.388a6.069 6.069 0 0 1-3.388-3.388zm4.964 2.136-3.388-3.388a6.069 6.069 0 0 1 3.388 3.388z"/><path d="M48 30a1 1 0 0 0-1 1c0 7.119 5.887 9 9 9a1 1 0 0 0 1-1c0-7.119-5.887-9-9-9zm6.482 6.068-3.388-3.388a6.069 6.069 0 0 1 3.388 3.388zm-4.964-2.136 3.388 3.388a6.069 6.069 0 0 1-3.388-3.388zM12 59h2v2h-2z"/></g></svg>
     <span class="font-semibold text-lg text-gray-800 dark:text-white">RecipesApp</span>
      </a>
      <!-- End Logo -->

      <div class="hidden lg:block ms-2">

      </div>
    </div>

    <!-- Content -->
    <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
      <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="flex flex-col space-y-1">
         
          <li>
            <a class="{{ request()->is('dashboard*') ? 'bg-gray-100 text-gray-800 dark:bg-neutral-700 dark:text-white' : 'text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-700' }} flex items-center gap-x-3.5 py-2 px-2.5 b text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-white" href="/dashboard">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              Dashboard
            </a>
          </li>
          
          <li>
            <a class="{{ request()->is('categories*') ? 'bg-gray-100 text-gray-800 dark:bg-neutral-700 dark:text-white' : 'text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-700' }} w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300" href="/categories">
              <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="15" r="3"/><circle cx="9" cy="7" r="4"/><path d="M10 15H6a4 4 0 0 0-4 4v2"/><path d="m21.7 16.4-.9-.3"/><path d="m15.2 13.9-.9-.3"/><path d="m16.6 18.7.3-.9"/><path d="m19.1 12.2.3-.9"/><path d="m19.6 18.7-.4-1"/><path d="m16.8 12.3-.4-1"/><path d="m14.3 16.6 1-.4"/><path d="m20.7 13.8 1-.4"/></svg>
            Manage Category
          </a>
        </li>

          <li><a class="{{ request()->is('recipes*') ? 'bg-gray-100 text-gray-800 dark:bg-neutral-700 dark:text-white' : 'text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-700' }} w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300" href="/recipes">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            Manage Recipes
          </a>
        </li>

          <li><a class="{{ request()->is('users*') ? 'bg-gray-100 text-gray-800 dark:bg-neutral-700 dark:text-white' : 'text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-700' }} w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-300" href="/users">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>

           Manage Users
          </a></li>
        </ul>
      </nav>
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Sidebar -->

<!-- Content -->
<div class="w-full lg:ps-64">
  <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
    <!-- your content goes here ... -->
    {{ $slot }}
  </div>
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->
  <x-toaster-hub />
    </body>
</html>
