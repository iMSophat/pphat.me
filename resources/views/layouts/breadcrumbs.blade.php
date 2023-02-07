<ol role="list" class="flex items-center">
    <li class="mr-3">
        <div>
            <a href="{{ url('/home') }}" class="text-secondary-400 hover:text-[color:rgba(var(--ni-primary-500))] group dark:border-gray-300">
                <i class="nil #home-lg-alt font-18px group-hover:sr-only"></i>
                <i class="nis #home-lg-alt font-18px sr-only group-hover:not-sr-only"></i>
                <span class="sr-only font-xs mr-1">Home</span>
            </a>
        </div>
    </li>

    @if($menu != '')
    <li>
        <div class="flex items-center">
            <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="dark:stroke-gray-200" d="M6 1L1 12" stroke="#292D32" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="/{{ str_replace(' ','',$menu) }}" class="truncate capitalize mx-2 text-sm text-secondary-500 hover:text-[color:rgba(var(--ni-primary-500)]  dark:text-gray-300"> {{ $menu }} </a>
        </div>
    </li>
    @endif

    @if($firstMenu != '')
    <li>
        <div class="flex items-center">
            <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="dark:stroke-gray-200" d="M6 1L1 12" stroke="#292D32" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="/{{ str_replace(' ','',$menu) }}/{{ str_replace(' ','',$firstMenu) }}" class="truncate capitalize mx-2 text-sm text-secondary-500 hover:text-[color:rgba(var(--ni-primary-500)]  dark:text-gray-300" aria-current="page"> {{ $firstMenu }} </a>
        </div>
    </li>
    @endif

    @if($secondMenu != '')
    <li>
        <div class="flex items-center">
            <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="dark:stroke-gray-200" d="M6 1L1 12" stroke="#292D32" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="/{{ str_replace(' ','',$menu) }}/{{ str_replace(' ','',$firstMenu) }}/{{ str_replace(' ','',ucwords($secondMenu)) }}" class="truncate capitalize mx-2 text-sm text-secondary-500 hover:text-[color:rgba(var(--ni-primary-500)]  dark:text-gray-300" aria-current="page"> {{ $secondMenu }} </a>
        </div>
    </li>
    @endif

    @if($thirdMenu != '')
    <li>
        <div class="flex items-center">
            <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="dark:stroke-gray-200" d="M6 1L1 12" stroke="#292D32" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="/{{ str_replace(' ','',$menu) }}/{{ str_replace(' ','',$firstMenu) }}/{{ str_replace('F','f',ucwords($secondMenu)) }}/{{ str_replace(' ','',ucwords($thirdMenu)) }}" class="truncate capitalize mx-2 text-sm text-secondary-500 hover:text-[color:rgba(var(--ni-primary-500)]  dark:text-gray-300" aria-current="page"> {{ $thirdMenu }} </a>
        </div>
    </li>
    @endif
    
    @if($title != '')
    <li>
        <div class="flex items-center">
            <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="dark:stroke-gray-200" d="M6 1L1 12" stroke="#292D32" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="truncate capitalize mx-2 text-sm text-secondary-500  dark:text-gray-300" aria-current="page"> {{ $title }} </p>
        </div>
    </li>
    @endif
</ol>
