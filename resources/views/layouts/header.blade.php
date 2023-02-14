<header class="w-full px-2 sm:px-5 sticky top-0 z-50 drop-shadow-sm bg-white/80 backdrop-blur-sm">
    <nav class="max-w-[90rem] mx-auto flex">
        <button type="button" class="w-20 sm:w-32 py-2 md:w-80 flex-shrink-0">
            <img class="max-h-14 object-cover" src="{{ mix('assets/images/PPHAT.ME.svg') }}" alt="{{ __('layout.naviation.menu.name') }}">
        </button>

        <div class="w-full flex gap-1 sm:gap-4 items-center justify-end">
            <span class="flex items-center justify-center border-l-2 h-6"></span>
            <div class="flex">
                <button class="flex items-center justify-center" title="{{ __('layout.naviation.menu.search') }}">
                    <svg class="w-9 h-9 p-2 transition-all rounded-lg hover:bg-orange-200" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.32338 12.2C9.35481 12.2 11.8123 9.74255 11.8123 6.71112C11.8123 3.67969 9.35481 1.22223 6.32338 1.22223C3.29195 1.22223 0.834488 3.67969 0.834488 6.71112C0.834488 9.74255 3.29195 12.2 6.32338 12.2Z" stroke="#292D32" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.3901 12.7778L11.2345 11.6222" stroke="#292D32" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <button class="flex items-center justify-center">
                <img class="w-7 h-7 p-1 ring-2 ring-transparent hover:ring-orange-500 rounded-full object-cover" src="{{ mix('assets/images/placeholder.svg') }}" alt="{{ __('layout.naviation.menu.avatar') }}">
            </button>
        </div>

    </nav>
</header>