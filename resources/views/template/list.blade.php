
<div id="list">
    <ul class="py-5 flex flex-col gap-2 px-3">
        @for ($i = 0; $i < 2; $i++)
        <pphat-compact-video-renderer class="relative group cursor-pointer">
            <a class="flex gap-3" href="/watch/oceans.mp4" aria-label="ឆ្លងភពរជ្ជកាល" title="ឆ្លងភពរជ្ជកាល" rel="nofollow">
                <pphat-supported-option class="absolute hidden transition-all group-hover:block rounded-md p-1 top-0 right-0">
                    <button>
                        <svg class="flex w-4 h-4 items-center justify-center" viewBox="0 0 24 24" fill="none">
                            <path d="M11.75 2.5C10.5114 2.5 9.5 3.51136 9.5 4.75C9.5 5.98864 10.5114 7 11.75 7C12.9886 7 14 5.98864 14 4.75C14 3.51136 12.9886 2.5 11.75 2.5Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
                            <path d="M11.75 10C10.5114 10 9.5 11.0114 9.5 12.25C9.5 13.4886 10.5114 14.5 11.75 14.5C12.9886 14.5 14 13.4886 14 12.25C14 11.0114 12.9886 10 11.75 10Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
                            <path d="M11.75 17.5C10.5114 17.5 9.5 18.5114 9.5 19.75C9.5 20.9886 10.5114 22 11.75 22C12.9886 22 14 20.9886 14 19.75C14 18.5114 12.9886 17.5 11.75 17.5Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </pphat-supported-option>
                
                <yt-image class="border flex-shrink-0 overflow-hidden rounded-lg h-24">
                    <img class="w-40 h-24 object-cover" src="https://www.nintenderos.com/wp-content/uploads/2022/07/animes.jpg.webp" alt="">
                </yt-image>

                <div>
                    <h1 class="text-sm font-medium w-[92%]">Whereas recognition of the inherent dignity</h1>
                    <div class="flex items-center gap-2 mt-2">
                        <p class="text-sm text-slate-600">Fantasy / Adventure</p>
                        <svg class="w-4 h-4" viewBox="0 0 15 16" fill="none">
                            <path d="M7.5 14.25C10.9375 14.25 13.75 11.4375 13.75 8C13.75 4.5625 10.9375 1.75 7.5 1.75C4.0625 1.75 1.25 4.5625 1.25 8C1.25 11.4375 4.0625 14.25 7.5 14.25Z" fill="#525252" stroke="#525252" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.84375 7.99998L6.6125 9.76873L10.1562 6.23123" stroke="white" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex items-center gap-2 mt-2">
                        <p class="text-xs text-slate-600 font-light">100k views</p>
                        <p class="text-xs text-slate-600 font-light"> 16 hours ago</p>
                    </div>
                </div>
            </a>
        </pphat-compact-video-renderer>
        @endfor
    </ul>
</div>