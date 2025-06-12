<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>
    
    <body class="font-sans antialiased bg-gray-200 dark:bg-black dark:text-white/50">
        
        

        <!-- ========== HEADER ========== -->
            <header class="bg-green-100 flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-7">
                <nav class=" relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
                <div class="lg:col-span-3 flex items-center">
                    <!-- Logo -->
                    <a class="flex item-center gap-2 rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Preline">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-10 h-10"><g data-name="30-cooking book"><path d="M28 56H1v-2s8-3 15-3c7.07 0 12 5 12 5zM63 54v2H36s4.93-5 12-5c7 0 15 3 15 3z" style="fill:#918778"/><path style="fill:#733125" d="M7 60h50v3H7z"/><path d="M57 56v4H7v-4h21c0-1.11 1.79-2 4-2s4 .89 4 2zM36 10.5v.18a19.606 19.606 0 0 0-3 2.29V10.5a1.5 1.5 0 0 1 3 0z" style="fill:#da684e"/><path d="M57 1v10.87C54.21 10.15 49.79 8 45 8a16.946 16.946 0 0 0-9 2.68v-.18a1.5 1.5 0 0 0-3 0v2.47A12.821 12.821 0 0 0 32 14s-5-6-13-6c-4.79 0-9.21 2.15-12 3.87V1z" style="fill:#da684e"/><path d="M32 51v3c-2.21 0-4 .89-4 2 0 0-4.93-5-12-5-7 0-15 3-15 3V17l3-2v34a27.145 27.145 0 0 1 13-3c8 0 15 5 15 5z" style="fill:#ded0b3"/><path d="M63 17v37s-8-3-15-3c-7.07 0-12 5-12 5 0-1.11-1.79-2-4-2v-3s7-5 15-5a27.145 27.145 0 0 1 13 3V15z" style="fill:#eddebf"/><path d="M18 31c-2.76 0-5 1.24-5 4a5 5 0 0 0 10 0c0-2.76-2.24-4-5-4zm-1.31-7h5.54A2.783 2.783 0 0 0 25 21.2a2.612 2.612 0 0 0-2.31-2.4s-2.77.4-2.77-1.2-3.27-1.6-3.27-1.6C14.36 16 13 17.43 13 19.2c0 2.65 1.65 4.8 3.69 4.8zM7 11.87C9.79 10.15 14.21 8 19 8c8 0 13 6 13 6v37s-7-5-15-5a27.145 27.145 0 0 0-13 3V14a26.423 26.423 0 0 1 3-2.13z" style="fill:#ffe8b8"/><path d="M47 39c0-8-8-8-8-8 0 8 8 8 8 8zm1-8c0 8 8 8 8 8 0-8-8-8-8-8zm9-19.13A26.423 26.423 0 0 1 60 14v35a27.145 27.145 0 0 0-13-3c-8 0-15 5-15 5V14a12.821 12.821 0 0 1 1-1.03 19.606 19.606 0 0 1 3-2.29A16.946 16.946 0 0 1 45 8c4.79 0 9.21 2.15 12 3.87z" style="fill:#ffebc2"/><path d="M16 51c-7 0-15 3-15 3v2s8-3 15-3a17.453 17.453 0 0 1 9.452 3H28s-4.93-5-12-5zM48 51c-7.07 0-12 5-12 5h2.548A17.453 17.453 0 0 1 48 53c7 0 15 3 15 3v-2s-8-3-15-3z" style="fill:#696157"/><path d="M36 56c0-1.11-1.79-2-4-2s-4 .89-4 2H7v2h21c0-1.11 1.79-2 4-2s4 .89 4 2h21v-2zM32 11s-5-6-13-6C14.21 5 9.79 7.15 7 8.87v3C9.79 10.15 14.21 8 19 8c8 0 13 6 13 6a12.821 12.821 0 0 1 1-1.03V10.5a1.479 1.479 0 0 1 .171-.682c-.055.049-.12.105-.171.152A12.821 12.821 0 0 0 32 11zM45 5a16.946 16.946 0 0 0-9 2.68 18.942 18.942 0 0 0-1.966 1.4A1.482 1.482 0 0 1 36 10.5v.18A16.946 16.946 0 0 1 45 8c4.79 0 9.21 2.15 12 3.87v-3C54.21 7.15 49.79 5 45 5z" style="fill:#a64f3c"/><path d="M32 51s-7-5-15-5a27.145 27.145 0 0 0-13 3V15l-2 1.333V52s9.932-4.563 15-4a27.436 27.436 0 0 1 13.957 6.077A7.774 7.774 0 0 1 32 54z" style="fill:#c1c4aa"/><path d="M62 52V16.333L60 15v34a27.145 27.145 0 0 0-13-3c-8 0-15 5-15 5v3a7.774 7.774 0 0 1 1.043.077A27.436 27.436 0 0 1 47 48c5.068-.563 15 4 15 4z" style="fill:#d0d4b8"/><path d="M24.719 42.511a20.271 20.271 0 0 1-6.247-2.559c-.157.015-.31.048-.472.048a5 5 0 0 1-5-5c0-.024.007-.043.007-.067A19.849 19.849 0 0 1 9 22.978V10.741c-.728.38-1.407.764-2 1.129A26.423 26.423 0 0 0 4 14v35a27.145 27.145 0 0 1 13-3c8 0 15 5 15 5v-6a36.532 36.532 0 0 0-7.281-2.489z" style="fill:#edd39c"/><path d="M54.719 42.511A20.241 20.241 0 0 1 47 38.946V39s-8 0-8-8a9.409 9.409 0 0 1 1.789.231A19.863 19.863 0 0 1 39 22.978V9.164a18.45 18.45 0 0 0-3 1.516 19.606 19.606 0 0 0-3 2.29A12.821 12.821 0 0 0 32 14v37s7-5 15-5a27.145 27.145 0 0 1 13 3v-4.853a35.982 35.982 0 0 0-5.281-1.636z" style="fill:#f0daad"/><path d="M19.92 17.6c0 1.6 2.77 1.2 2.77 1.2A2.612 2.612 0 0 1 25 21.2a2.783 2.783 0 0 1-2.77 2.8h-5.54C14.65 24 13 21.85 13 19.2c0-1.77 1.36-3.2 3.65-3.2 0 0 3.27 0 3.27 1.6z" style="fill:#ea735c"/><path d="M18 31c2.76 0 5 1.24 5 4a5 5 0 0 1-10 0c0-2.76 2.24-4 5-4z" style="fill:#e84655"/><path d="m39 31 8 8s-8 0-8-8zM48 31l8 8s-8 0-8-8z" style="fill:#658f41"/><path d="m47 39-8-8s8 0 8 8zM56 39l-8-8s8 0 8 8z" style="fill:#96b343"/><circle cx="17" cy="19" r="1" style="fill:#ffd0c9"/><path d="M19 38a5 5 0 0 1-5-5 4.377 4.377 0 0 1 .071-.676A3.579 3.579 0 0 0 13 35a4.993 4.993 0 0 0 9.855 1.147A4.967 4.967 0 0 1 19 38z" style="fill:#c43b48"/><ellipse cx="20.577" cy="33.708" rx=".825" ry="1.148" transform="rotate(-45.02 20.577 33.707)" style="fill:#f6fafd"/><path d="M18.451 11.134a1.341 1.341 0 0 0-.45.849 1.27 1.27 0 0 0 .27.771A5.051 5.051 0 0 0 20.2 14.16a14.037 14.037 0 0 1 4.827 3.846 27.337 27.337 0 0 0 2.441 3.376 1.511 1.511 0 0 0 1.591.534 1.218 1.218 0 0 0 .454-.4A3.969 3.969 0 0 0 30 19.157q-.009-1.265-.063-2.528a6.739 6.739 0 0 0-.209-1.618 5.119 5.119 0 0 0-1.843-2.447c-2.273-1.82-6.962-3.905-9.434-1.43zM47.669 10.08a3.124 3.124 0 0 0-2.644 2.3 1.611 1.611 0 0 0 .23 1.182 2.176 2.176 0 0 0 .686.579 19.207 19.207 0 0 0 5.312 1.686 33.243 33.243 0 0 1 3.689 1.192c1.033.394 2.222 1.235 3.337.911a1.12 1.12 0 0 0 .455-.226c.5-.461.177-1.728-.046-2.254-1.017-2.4-3.965-3.862-6.34-4.65a9.793 9.793 0 0 0-4.679-.72z" style="fill:#fff3db"/><path d="M7 60v3h2a2 2 0 0 1 2-2h42a2 2 0 0 1 2 2h2v-3z" style="fill:#471e17"/><path d="M8 2h48v6h2V1a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v7h2z"/><path d="M63.555 16.168 61 14.465V14a1 1 0 0 0-.35-.759C60.354 12.986 53.274 7 45 7a17.676 17.676 0 0 0-8.4 2.163A2.5 2.5 0 0 0 32 10.5v2.042A18.97 18.97 0 0 0 19 7c-8.274 0-15.354 5.986-15.65 6.241A1 1 0 0 0 3 14v.465l-2.555 1.7A1 1 0 0 0 0 17v39a1 1 0 0 0 1 1h5v6a1 1 0 0 0 1 1h50a1 1 0 0 0 1-1v-6h5a1 1 0 0 0 1-1V17a1 1 0 0 0-.445-.832zM59 14.479v32.907A30.023 30.023 0 0 0 47 45c-6.032 0-11.429 2.672-14 4.182v-34.8a17.612 17.612 0 0 1 2-1.781V44h2V11.255A15.857 15.857 0 0 1 45 9c6.549 0 12.52 4.321 14 5.479zM34 10.5a.5.5 0 0 1 .5-.5.493.493 0 0 1 .389.2q-.473.318-.889.631zM5 14.479C6.48 13.321 12.451 9 19 9c6.494 0 10.96 4.285 12 5.386v34.8C28.429 47.672 23.032 45 17 45a30.023 30.023 0 0 0-12 2.386zm-3 3.056 1-.667V49a1 1 0 0 0 1.513.858A26.506 26.506 0 0 1 17 47c7.571 0 14.352 4.766 14.419 4.814a1 1 0 0 0 1.162 0C32.648 51.766 39.408 47 47 47a26.506 26.506 0 0 1 12.487 2.858A1 1 0 0 0 61 49V16.868l1 .667V52.6A48.8 48.8 0 0 0 48 50a19.048 19.048 0 0 0-11.715 4.409A6.15 6.15 0 0 0 32 53a6.15 6.15 0 0 0-4.285 1.409A19.048 19.048 0 0 0 16 50a48.8 48.8 0 0 0-14 2.6zm0 37.173C4 54.022 10.378 52 16 52a16.588 16.588 0 0 1 9.134 3H2zM56 59H16v2h40v1H8v-1h2v-2H8v-2h20v-.01a.98.98 0 0 0 .38-.066A1 1 0 0 0 29 56c0-.249 1.064-1 3-1s3 .751 3 1a1 1 0 0 0 1 1h20zm-17.134-4A16.588 16.588 0 0 1 48 52c5.622 0 12 2.022 14 2.708V55z"/><path d="M16.692 25h5.538A3.789 3.789 0 0 0 26 21.2a3.584 3.584 0 0 0-3.308-3.4 1.1 1.1 0 0 0-.14.01 2.359 2.359 0 0 1-1.629-.21c0-1.919-2.3-2.6-4.271-2.6C13.957 15 12 16.767 12 19.2c0 3.2 2.105 5.8 4.692 5.8zm-.04-8c1.149 0 2.271.379 2.271.6a1.993 1.993 0 0 0 .7 1.553 4.37 4.37 0 0 0 3.119.65A1.675 1.675 0 0 1 24 21.2a1.788 1.788 0 0 1-1.77 1.8h-5.538C15.233 23 14 21.26 14 19.2c0-1.337 1.041-2.2 2.652-2.2z"/><path d="M16 18h2v2h-2zM24 35a4.739 4.739 0 0 0-3.87-4.724A6.022 6.022 0 0 1 22 30v-2a7.519 7.519 0 0 0-3 .579V27h-2v1.389A9.37 9.37 0 0 0 14 28v2a8.363 8.363 0 0 1 2.165.21C13.6 30.769 12 32.515 12 35a6 6 0 0 0 12 0zm-10 0c0-2.708 2.8-3 4-3s4 .292 4 3a4 4 0 0 1-8 0zM46 19a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 17c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 19.886 41.365 19 46 19z"/><path d="M46 22a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 20c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 22.886 41.365 22 46 22z"/><path d="M46 25a30.177 30.177 0 0 1 9.629 1.929l.742-1.858A31.728 31.728 0 0 0 46 23c-5.177 0-7.356 1.061-7.447 1.105l.894 1.79C39.465 25.886 41.365 25 46 25zM47 40a1 1 0 0 0 1-1c0-7.119-5.887-9-9-9a1 1 0 0 0-1 1c0 7.119 5.887 9 9 9zm-6.482-6.068 3.388 3.388a6.069 6.069 0 0 1-3.388-3.388zm4.964 2.136-3.388-3.388a6.069 6.069 0 0 1 3.388 3.388z"/><path d="M48 30a1 1 0 0 0-1 1c0 7.119 5.887 9 9 9a1 1 0 0 0 1-1c0-7.119-5.887-9-9-9zm6.482 6.068-3.388-3.388a6.069 6.069 0 0 1 3.388 3.388zm-4.964-2.136 3.388 3.388a6.069 6.069 0 0 1-3.388-3.388zM12 59h2v2h-2z"/></g></svg>
                    <span class="font-semibold text-lg text-gray-800 dark:text-white">RecipesApp</span>
                    </a> 
                    <!-- End Logo -->
            
                </div>
            
                <!-- Button Group -->
                <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
                @auth
            
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>

                @else
                <a href="/login">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl bg-white border border-gray-200 text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:hover:bg-white/10 dark:text-white dark:hover:text-white dark:focus:text-white">
                        Sign in
                    </button>
                </a>
                
                @endauth
            
                    <div class="lg:hidden">
                    <button type="button" class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
                        <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                        <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                    </div>
                </div>
                <!-- End Button Group -->
            
                <!-- Collapse -->
                <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
                    <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
                    <div>
                        <a class="relative inline-block text-black focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 dark:text-white" href="/" aria-current="page">Home</a>
                    </div>
                
                    <div>
                        <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">About</a>
                    </div>
                    <div>
                        <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Categories</a>
                    </div>
                    <div>
                        <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Blog</a>
                    </div>
                    </div>
                </div>
                <!-- End Collapse -->
                </nav>
            </header>
  <!-- ========== END HEADER ========== -->
      

                <!-- Hero -->
                <div class="relative overflow-hidden">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-2 py-3 sm:py-2">
                    <div class="text-center">

                    <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
                        <!-- Form -->
                        <form action="{{ route('category.item',['id' => $category->id]) }}" method="GET">
                        <div class="relative z-10 flex gap-x-3 p-3 bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-gray-900/20">
                            <div class="w-full">
                            <label for="hs-search-article-1" class="block text-sm text-gray-700 font-medium dark:text-white"><span class="sr-only">Search article</span></label>
                            <input type="text" name="search" id="hs-search-article-1" class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search recipe by name">
                            </div>
                            <div>
                           <button type="submit" class="size-11 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"/>
                                    <path d="m21 21-4.3-4.3"/>
                                </svg>
                          </button>

                            </div>
                        </div>
                        </form>
                        <!-- End Form -->

                        <!-- SVG Element -->
                        <div class="hidden md:block absolute top-0 end-0 -translate-y-12 translate-x-20">
                        <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                            <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                            <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                        </svg>
                        </div>
                        <!-- End SVG Element -->

                        <!-- SVG Element -->
                        <div class="hidden md:block absolute bottom-0 start-0 translate-y-10 -translate-x-32">
                        <svg class="w-40 h-auto text-cyan-500" width="347" height="188" viewBox="0 0 347 188" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
                        </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                    </div>
                </div>
                </div>
                <!-- End Hero -->


             <!-- Card Blog -->
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-5 mx-auto bg-gray-200 dark:bg-gray-800">
                  <!-- Title -->
                   
                  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                      <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Category: {{$category->name  }}</h2>
                      <p class="mt-1 text-gray-600 dark:text-neutral-400"> {{ $category->description }}</p>
                  </div>
                  <!-- End Title -->

                  <!-- Grid -->
                  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                      @foreach ($recipes as $recipe)
                          <!-- Card -->
                          <div class="group flex flex-col h-full bg-gray-100 border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40" href="#">
                              <div class="aspect-w-16 aspect-h-11">
                                  <img class="w-full h-52 object-cover rounded-xl" src="{{ asset('storage/' . $recipe->image) }}" alt="Recipe Image">
                              </div>
                              <div class="my-4">
                                  <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                      {{ $recipe->title }}
                                  </h3>
                                  <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                      {{ str($recipe->description)->words(10) }}
                                      
                                  </p>
                                                    <!-- Read more -->
                                    <div class="mt-5 text-center">
                                        <a class="py-3 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-full border border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-blue-500 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="/recipe/card/{{ $recipe->id }}">
                                            Read more
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                        </a>
                                    </div>
                              </div>
                            
                              
                          </div>
                          <!-- End Card -->
                      @endforeach
                  </div>
                  <!-- End Grid -->

                  <!-- End Card -->
              </div>
              <!-- End Card Blog -->


              <!-- ========== FOOTER ========== -->
                <footer class="bg-green-200 mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
                  <!-- Grid -->
                  <div class="text-center">
                  <div>
                    <a class="flex-none text-xl font-semibold text-black dark:text-white" href="#" aria-label="Brand">TastyBites</a>
                  </div>
                  <!-- End Col -->

                  <div class="mt-3">
                    <p class="text-gray-500 dark:text-neutral-500">Discover, Cook, and Share with <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500" href="#">TastyBites</a> – your home for delicious inspiration.</p>
                    <p class="text-gray-500 dark:text-neutral-500">
                    © 2025 TastyBites. Crafted with passion for food lovers.
                    </p>
                  </div>

                  <!-- Social Brands -->
                  <div class="mt-3 space-x-2">
                    <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg>
                    </a>
                    <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    </a>
                    <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                    </a>
                    <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                    </svg>
                    </a>
                  </div>
                  <!-- End Social Brands -->
                  </div>
                  <!-- End Grid -->
                </footer>
                <!-- ========== END FOOTER ========== -->

    </body>
</html>
