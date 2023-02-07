<ul class="py-5 px-3">
    {{-- This Use By Dynamic Module --}}
    @if(isset($_SESSION['modules']) && count($_SESSION['modules']))
        @foreach($_SESSION['modules'] as $k1 => $parent1)
            @php
                $link1  = $parent1->parent->link == '' ? '' : "directTo('".$parent2->parent->link."')";
                $active =   str_replace(' ','',strtolower($menu ?? null)) == str_replace(' ','',strtolower($parent1->parent->name)) || 
                            str_replace(' ','',strtolower($menu ?? null)) == null && 
                            str_replace(' ','',strtolower($title)) == str_replace(' ','',strtolower($parent1->parent->name)) 
                            ? '[&>ni-icon]:bg-gradient-to-br [&>ni-icon]:from-[#EB5757] [&>ni-icon]:to-red-500 [&>ni-icon]:text-white' : null;
            @endphp
            @if( is_numeric($k1) )

                <li class="{{ $active }} [&>ni-icon]:hover:bg-gradient-to-br [&>ni-icon]:hover:text-white [&>ni-icon]:hover:from-[#EB5757] [&>ni-icon]:hover:to-red-500 [&>ni-icon]:hover:backdrop-blur-sm [&>ni-icon>button]:w-full [&>*>button]:text-left [&>ni-icon]:hover:[&>ni-icon>*]:bg-red-200">
                    <ni-icon class="flex gap-2 w-full items-center rounded-md px-1.5 p-1">
                        <i class="w-6 h-6 rounded flex items-center justify-center flex-shrink-0 {{ $parent1->parent->icon ?? null }}"></i>
                        <button type="button" onclick="{{ $link1 }}" class="{{ $active }}">
                            {{ $parent1->parent->name ?? null }}
                        </button>
                    </ni-icon>

                    @if ( count((array)$parent1) > 1 ) 
                        <div class="border-l border-red-500 ml-4 [&>ul>li>button]:pl-5 [&>ul>li>button]:text-left hover:[&>ul>li>button]:text-white hover:[&>ul>li>button]:bg-gradient-to-br hover:[&>ul>li>button]:from-[#EB5757] hover:[&>ul>li>button]:to-[#F2994A]">
                            <ul class="[&>*>*]:rounded-r-md [&>*>*]:w-full [&>*>*]:py-1">
                                
                                @foreach ((array)$parent1 as $k2=>$parent2)
                                    @if(is_numeric($k2))
                                        @php
                                            $link2 = $parent2->parent->link == null ? '': "directTo('".$parent2->parent->link."')"
                                        @endphp
                                        <li> 
                                            <button type="button" class="mt-1 {{ 
                                                    str_replace(' ','',strtolower($secondMenu ?? null)) == str_replace(' ','',strtolower($parent2->parent->name)) || 
                                                    str_replace(' ','',strtolower($secondMenu ?? null)) == null &&  
                                                    str_replace(' ','',strtolower($title)) == str_replace(' ','',strtolower($parent2->parent->name)) ? 'bg-gradient-to-br from-[#ef4444] to-[#EB5757] text-white' : null
                                                }}" onclick="{{ $link2 }}">
                                                {{ $parent2->parent->name ?? null }}
                                            </button> 
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>


                {{-- <li class="menu-item {{ $class1 }} {{
                        str_replace(' ','',strtolower($firstMenu ?? null)) == str_replace(' ','',strtolower($parent1->parent->name)) ? 'open' : null
                    }}">
                    <a href="{{ $link1 }}" class="group waves-effect {{
                            str_replace(' ','',strtolower($firstMenu ?? null)) == str_replace(' ','',strtolower($parent1->parent->name)) ||
                            str_replace(' ','',strtolower($firstMenu ?? null)) == null &&
                            str_replace(' ','',strtolower($title)) == str_replace(' ','',strtolower($parent1->parent->name))
                            ? 'active' : null
                        }}">
                        <span class="menu-icon">
                            <i class="group-hover:text-white {{ $parent1->parent->icon ?? null }}"> </i>
                        </span>
                        <span class="menu-title"> {{ $parent1->parent->name ?? null }} </span>
                    </a>

                    @if (count((array)$parent1)>1)
                        <div class="sub-menu-list">
                            <ul>
                                @foreach ((array)$parent1 as $k2=>$parent2)
                                    @if(is_numeric($k2))
                                        @php
                                            $link2 = $parent2->parent->link == null ? 'javascript:void(0);': url($parent2->parent->link);
                                            if(count((array)$parent2)>1) {
                                                $class2 = "sub-menu";
                                            } else {
                                                $class2 = null;
                                            }
                                        @endphp

                                        <li class="menu-item {{ $class2 }} {{
                                            str_replace(' ','',strtolower($secondMenu ?? null)) == str_replace(' ','',strtolower($parent2->parent->name))
                                            ? 'open' : null
                                        }}">
                                            <a href="{{ $link2 }}" class="waves-effect {{
                                                str_replace(' ','',strtolower($secondMenu ?? null)) == str_replace(' ','',strtolower($parent2->parent->name)) ||
                                                str_replace(' ','',strtolower($secondMenu ?? null)) == null &&
                                                str_replace(' ','',strtolower($title)) == str_replace(' ','',strtolower($parent2->parent->name))
                                                ? 'active' : null
                                            }}" >
                                                <span class="menu-title !pl-[2.7rem]"> {{ $parent2->parent->name ?? null }} </span>
                                            </a>
                                            @if (count((array)$parent2)>1)
                                                <div class="sub-menu-list">
                                                    <ul>
                                                        @foreach ((array)$parent2 as $k3=>$parent3)
                                                            @if(is_numeric($k3))
                                                                @php
                                                                    $link3 = $parent3->parent->link == null ? 'javascript:void(0);': url($parent3->parent->link);
                                                                    if(count((array)$parent3)>1) {
                                                                        $classMenu = "sub-menu";
                                                                    } else{
                                                                        $classMenu = null;
                                                                    }
                                                                @endphp

                                                                <li class="menu-item {{ $classMenu }} {{
                                                                    str_replace(' ','',strtolower($thirdMenu ?? null)) == str_replace(' ','',strtolower($parent3->parent->name)) ||
                                                                    str_replace(' ','',strtolower($thirdMenu ?? null)) == null &&
                                                                    str_replace(' ','',strtolower($title)) == str_replace(' ','',strtolower($parent3->parent->name))
                                                                    ? 'open' : null
                                                                }}">

                                                                    <a href="{{$link3}}" class="waves-effect {{
                                                                        str_replace(' ','',strtolower($thirdMenu ?? null)) == str_replace(' ','',strtolower($parent3->parent->name)) ||
                                                                        str_replace(' ','',strtolower($thirdMenu ?? null)) == null &&
                                                                        str_replace(' ','',strtolower($title)) == str_replace(' ','',strtolower($parent3->parent->name))
                                                                        ? 'active' : null
                                                                    }}">
                                                                        <span class="menu-title pl-[3.5rem] !text-[14px]"> {{ $parent3->parent->name ?? null }} </span>
                                                                    </a>


                                                                    @if (count((array)$parent3)>1)
                                                                        <div class="sub-menu-list">
                                                                            <ul>
                                                                                @foreach ((array)$parent3 as $k4=>$parent4)
                                                                                    @if(is_numeric($k4))
                                                                                        @php
                                                                                            $link4 = $parent4->parent->link == null ? 'javascript:void(0);': url($parent4->parent->link);
                                                                                        @endphp

                                                                                        <li class="menu-item waves-effect">
                                                                                            <a href="{{ $link4 }}" class=" {{
                                                                                                str_replace(' ','',strtolower($lastMenu ?? null)) == str_replace(' ','',strtolower($parent4->parent->name)) ||
                                                                                                str_replace(' ','',strtolower($lastMenu ?? null)) == null &&
                                                                                                str_replace(' ','',strtolower($title)) == str_replace(' ','',strtolower($parent4->parent->name))
                                                                                                ? 'active' : null
                                                                                            }}">
                                                                                                <span class="menu-title pl-[4.2rem] !text-[14px]"> {{ $parent4->parent->name ?? null }} </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li> --}}
            @endif
        @endforeach
    @endif
</ul>