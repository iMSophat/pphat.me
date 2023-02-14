<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class=" bg-slate-100">
    <header class="w-full bg-white drop-shadow">
        <nav class="max-w-[90rem] mx-auto flex justify-between w-full p-3">
            <div class="w-40 flex items-center justify-center flex-shrink-0">
                <button type="button">
                    <svg class="flex w-7 h-7" viewBox="0 0 24 24">
                        <path d="M3 7H21" stroke="#292D32" stroke-width="2" stroke-linecap="round"/>
                        <path d="M3 13H15" stroke="#292D32" stroke-width="2" stroke-linecap="round"/>
                        <path d="M3 19H10" stroke="#292D32" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                <div>
                    <img src="{{ asset('assets/images/PPHAT.ME.svg') }}" alt="">
                </div>
            </div>
            <div class="w-full flex items-center justify-center">
                <div class="max-w-xl w-full mx-auto relative">
                    <button type="submit" class="absolute right-0 top-0 flex items-center justify-center rounded-full bg-slate-100 h-9 w-9">
                        <svg class="flex w-5 h-5 items-center justify-center"  fill="none" viewBox="0 0 24 24">
                            <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 22L20 20" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <input type="search" placeholder="Search..." class="focus:outline-none text-sm focus:ring-0 h-9 border border-slate-100 px-3 rounded-full py-1 w-full">
                </div>
            </div>
            <div class="w-40 flex items-center justify-center flex-shrink-0">
                <button>
                    <svg class="flex w-6 h-6 items-center justify-center" viewBox="0 0 24 24" fill="none">
                        <path d="M11.75 2.5C10.5114 2.5 9.5 3.51136 9.5 4.75C9.5 5.98864 10.5114 7 11.75 7C12.9886 7 14 5.98864 14 4.75C14 3.51136 12.9886 2.5 11.75 2.5Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
                        <path d="M11.75 10C10.5114 10 9.5 11.0114 9.5 12.25C9.5 13.4886 10.5114 14.5 11.75 14.5C12.9886 14.5 14 13.4886 14 12.25C14 11.0114 12.9886 10 11.75 10Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
                        <path d="M11.75 17.5C10.5114 17.5 9.5 18.5114 9.5 19.75C9.5 20.9886 10.5114 22 11.75 22C12.9886 22 14 20.9886 14 19.75C14 18.5114 12.9886 17.5 11.75 17.5Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button type="button" class="bg-[#0F346B] px-4 py-1.5 rounded-full text-white text-sm">Log In</button>
            </div>
        </nav>
    </header>

    <main class="max-w-[90rem] mx-auto w-full flex gap-2">
        <div class="flex h-[calc(100vh_-_5.3rem)] overflow-y-auto w-80 flex-shrink-0 py-5 bg-white">
            <ul class="w-full px-4">
                <li class="flex items-center gap-5 bg-slate-200 rounded-lg py-1.5 px-3">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                        <path d="M9.02 2.84L3.63 7.04C2.73 7.74 2 9.23 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29 21.19 7.74 20.2 7.05L14.02 2.72C12.62 1.74 10.37 1.79 9.02 2.84Z" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17.99V14.99" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="javascript:void(0)" class="w-full text-base font-medium">Home</a>
                </li>
                <li class="flex items-center gap-5 hover:bg-slate-200 rounded-lg py-1.5 px-3">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                        <path d="M9.02 2.84L3.63 7.04C2.73 7.74 2 9.23 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29 21.19 7.74 20.2 7.05L14.02 2.72C12.62 1.74 10.37 1.79 9.02 2.84Z" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17.99V14.99" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="javascript:void(0)" class="w-full text-base">Trending</a>
                </li>
                <li class="flex items-center gap-5 hover:bg-slate-200 rounded-lg py-1.5 px-3">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                        <path d="M9.02 2.84L3.63 7.04C2.73 7.74 2 9.23 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29 21.19 7.74 20.2 7.05L14.02 2.72C12.62 1.74 10.37 1.79 9.02 2.84Z" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17.99V14.99" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="javascript:void(0)" class="w-full text-base">Category</a>
                </li>
                <li class="flex items-center gap-5 hover:bg-slate-200 rounded-lg py-1.5 px-3">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                        <path d="M9.02 2.84L3.63 7.04C2.73 7.74 2 9.23 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29 21.19 7.74 20.2 7.05L14.02 2.72C12.62 1.74 10.37 1.79 9.02 2.84Z" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17.99V14.99" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="javascript:void(0)" class="w-full text-base">Anime</a>
                </li>
                <li class="flex items-center gap-5 hover:bg-slate-200 rounded-lg py-1.5 px-3">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                        <path d="M9.02 2.84L3.63 7.04C2.73 7.74 2 9.23 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29 21.19 7.74 20.2 7.05L14.02 2.72C12.62 1.74 10.37 1.79 9.02 2.84Z" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17.99V14.99" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="javascript:void(0)" class="w-full text-base">Wallpaper</a>
                </li>
                <li class="flex items-center gap-5 hover:bg-slate-200 rounded-lg py-1.5 px-3">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                        <path d="M9.02 2.84L3.63 7.04C2.73 7.74 2 9.23 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29 21.19 7.74 20.2 7.05L14.02 2.72C12.62 1.74 10.37 1.79 9.02 2.84Z" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17.99V14.99" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="javascript:void(0)" class="w-full text-base">Following</a>
                </li>

            </ul>
        </div>
        <div class="w-full p-5">

        </div>
    </main>

</body>
</html>