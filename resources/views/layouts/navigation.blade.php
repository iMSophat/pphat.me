
{{-- Search bar  --}}
<div class="flex-1 flex justify-between lg:w-full lg:mx-auto">


    <div class="flex items-center">
        <a id="btn-collapse" href="javascript:void(0)" class="border border-secondary-300 text-secondary-700 dark:text-white py-1.5 px-5 h-[34px] rounded inline-flex items-center focus:outline-none sm:text-secondary-800 hover:bg-primary-500 hover:text-primary-50">
            <i class="nil #bars text-lg"></i>
        </a>
        <a id="btn-toggle" href="javascript:void(0)" class="sidebar-toggler break-point-lg border border-secondary-300 text-secondary-700 dark:text-white px-5 pt-0.5 h-[34px] rounded flex items-center focus:outline-none sm:text-secondary-800 hover:bg-primary-500 hover:text-primary-50">
            <i class="nil #bars text-lg"></i>
        </a>
    </div>

    <div class="flex-1 hidden sm:flex">
        <form class="w-full flex md:ml-0 sr-only" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
            <div class="relative w-full text-primary-500 text-sm focus-within:text-secondary-600">
                <input id="search-field" name="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-opacity-0 border-transparent text-secondary-900 placeholder-secondary-500 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm dark:bg-gray-800" placeholder="Search or type a command (Ctrl + G)" type="search">
            </div>
        </form>
    </div>

    {{-- Profile  --}}
    <div class="flex items-center">
        <div class="ml-1 relative">
            <div class="dropdown relative">

                <button class="rounded-lg w-10 h-10 m-0 text-xl p-1 text-primary-500 focus:border-2 focus:border-primary-200 focus:rounded-full focus:p-0.5">
                    <img class="rounded-full w-8 h-8 object-cover" src="{{ asset('images/avatar.jfif') }}" alt="Profile">
                </button>

                {{-- @guest
                    <nav class="profile right-0 bg-white invisible dark:bg-gray-800 shadow-md transition-all duration-300 z-50 rounded-md w-40 dark:border  dark:border-gray-500">
                        <ul>
                            <li class="mt-2 px-1">
                                @if (Route::has('login'))
                                    <a href="{{ route('login') }}" class="flex w-full px-5 gap-x-2 py-2 items-center group hover:text-sky-500 hover:bg-slate-200 rounded-md">
                                        <svg class="w-6 h-6 group-hover:[&>*]:stroke-sky-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.90002 7.55999C9.21002 3.95999 11.06 2.48999 15.11 2.48999H15.24C19.71 2.48999 21.5 4.27999 21.5 8.74999V15.27C21.5 19.74 19.71 21.53 15.24 21.53H15.11C11.09 21.53 9.24002 20.08 8.91002 16.54" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2 12H14.88" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.65 8.6499L16 11.9999L12.65 15.3499" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                        <span> {{ __('Login') }}</span>
                                    </a>
                                @endif
                            </li>
                            <li class="px-1">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="flex w-full px-5 gap-x-2 py-2 items-center group hover:text-sky-500 hover:bg-slate-200 rounded-md">
                                        <svg class="w-6 h-6 group-hover:[&>*]:stroke-sky-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.46 13.73C13.0119 13.73 14.27 12.4719 14.27 10.92C14.27 9.36806 13.0119 8.10999 11.46 8.10999C9.9081 8.10999 8.65002 9.36806 8.65002 10.92C8.65002 12.4719 9.9081 13.73 11.46 13.73Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.65 20.2C16.65 17.87 14.33 15.97 11.46 15.97C8.59002 15.97 6.27002 17.86 6.27002 20.2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21 12.5C21 17.75 16.75 22 11.5 22C6.25 22 2 17.75 2 12.5C2 7.25 6.25 3 11.5 3C12.81 3 14.06 3.25999 15.2 3.73999C15.07 4.13999 15 4.56 15 5C15 5.75 15.21 6.46 15.58 7.06C15.78 7.4 16.04 7.70997 16.34 7.96997C17.04 8.60997 17.97 9 19 9C19.44 9 19.86 8.92998 20.25 8.78998C20.73 9.92998 21 11.19 21 12.5Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M23 5C23 5.32 22.96 5.62999 22.88 5.92999C22.79 6.32999 22.63 6.72 22.42 7.06C21.94 7.87 21.17 8.49998 20.25 8.78998C19.86 8.92998 19.44 9 19 9C17.97 9 17.04 8.60997 16.34 7.96997C16.04 7.70997 15.78 7.4 15.58 7.06C15.21 6.46 15 5.75 15 5C15 4.56 15.07 4.13999 15.2 3.73999C15.39 3.15999 15.71 2.64002 16.13 2.21002C16.86 1.46002 17.88 1 19 1C20.18 1 21.25 1.51002 21.97 2.33002C22.61 3.04002 23 3.98 23 5Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M20.49 4.97998H17.51" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19 3.52002V6.51001" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span>{{ __('Register') }}</span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                @else
                    <nav class="profile right-0 bg-white invisible dark:bg-gray-800 shadow-md transition-all duration-300 z-50 rounded-md w-64 dark:border  dark:border-gray-500">
                        <div class="relative h-28">
                            <img src="{{ asset('/images/company_logo.png') }}" class="rounded-t-md object-cover w-full h-20">
                            <div class="absolute left-1/2 -translate-x-1/2 -translate-y-8">
                                <img src="{{ asset('images/avatar.jfif') }}" class="w-16 h-16 object-cover rounded-full border-2 shadow-xl border-white mx-auto">
                            </div>
                        </div>
        
                        <h3 class="my-3 font-medium text-gray-600 dark:text-gray-300 text-center">{{ Auth::user()->name }}</h3>
                        <hr>
                        <ul class="px-5 py-3">
                            <li>
                                <a href="{{ url('/profile') }}" class="flex gap-x-3 items-center group">
                                    <i class="nil w-5 text-primary-500 dark:text-gray-400 #user-edit text-xl"></i>
                                    <p class="text-gray-700 dark:text-gray-500 group-hover:text-sky-500">Profile</p>
                                </a>
                            </li>

                            <li class="mt-2">
                                <a href="{{ url('settings/personalization') }}" class="flex gap-x-3 items-center group">
                                    <i class="nil w-5 text-primary-500 dark:text-gray-400 #cog text-xl"></i>
                                    <p class="text-gray-700 dark:text-gray-500 group-hover:text-sky-500">Personalization</p>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex gap-x-3 items-center group">
                                    <i class="nil w-5 text-primary-500 dark:text-gray-400 #sign-out text-xl"></i>
                                    <p class="text-gray-700 dark:text-gray-500 group-hover:text-sky-500">{{ __('Logout') }}</p>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="sr-only">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                @endguest --}}
            </div>
        </div>
    </div>
    {{-- Profile  --}}

</div>