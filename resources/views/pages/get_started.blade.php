@extends('layouts.master')
@section('content')
    @if (!empty($data) && count($data))
        <div class="flex flex-col gap-5">
            <form id="postContent" class="drop-shadow-sm flex flex-col gap-3 w-full rounded-lg p-5 bg-white">
                
                <div class="flex gap-3">
                    <i class="nis text-transparent bg-clip-text rounded-md flex bg-gradient-to-r from-[#ef4444] to-[#EB5757] items-center justify-center #mug-hot text-xl flex-shrink-0"></i>
                    <input type="text" name="" id="" placeholder="Title Post" class="w-full focus:outline-none border-b border-transparent focus:border-[#ef4444] font-medium">
                </div>

                <textarea placeholder="<p>Description</p>" name="" id="" class="focus:outline-none border rounded-md p-2 focus:border-[#ef4444]"></textarea>

                <div id="code" class="hidden">
                    <div class="bg-[#2d2d2d] rounded-md overflow-hidden">
                        <div class="bg-[#363636] drop-shadow-sm relative">
                            <ul class="flex w-full flex-wrap items-center" data-tabs-toggle="#insertContent" role="tablist">
                                <li class="mr-2 group" role="presentation">
                                    <label 
                                        class="font-semibold text-sm py-3 pl-4 flex items-center rounded-t-lg border-b" 
                                        id="html-tab" 
                                        data-tabs-target="#html" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="html" 
                                        aria-selected="false"
                                    >
                                        <input type="text" value="HTML" name="" id="" class="bg-transparent focus:outline-none max-w-[3rem]">
                                        <button type="button" class="h-5 w-5 hidden group-hover:block hover:bg-slate-900 text-slate-300 hover:text-red-500 flex-shrink-0 items-center justify-center rounded waves-effect">
                                            <i class="nil #times"></i>
                                        </button>
                                    </label>
                        
                                </li>
                                <button type="button" id="addCodeField" class="h-7 w-7 hover:bg-slate-900 text-slate-300 hover:text-white flex-shrink-0 items-center justify-center rounded waves-effect"><i class="nil #plus"></i></button>
                                <button type="button" id="removeCode" class="h-7 w-7 hover:bg-slate-900 text-slate-300 hover:text-white flex-shrink-0 items-center justify-center rounded waves-effect absolute right-3 top-2"><i class="nil #times"></i></button>
                            </ul>
                        </div>
                        
                        <div id="insertContent">
                            <div class="hidden" 
                                id="html" 
                                role="tabpanel" 
                                aria-labelledby="html-tab">
                                <textarea name="" placeholder="<p>Hello World</p>" id="" class="focus:outline-none border-none rounded-md p-2 w-full bg-transparent text-white"></textarea>
                            </div>
                        
                        </div>
                    </div>
                </div>
                

                <div id="image" class="hidden flex flex-col gap-3 relative">
                    <img class="h-96 w-full object-cover rounded-md" src="https://images.unsplash.com/photo-1589640802044-1cac11427567?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="">

                    <div type="button" class="hover:bg-black/50 transition-all group absolute flex gap-2 w-full h-full rounded-md items-center justify-center">
                        <button type="button" id="removeImage" class="hover:bg-red-500 hidden group-hover:flex w-8 items-center justify-center h-8 rounded-md">
                            <i class="nil #times text-white text-xl"></i>
                        </button>
                        <button type="button" class="hover:bg-red-500 hidden group-hover:flex w-8 items-center justify-center h-8 rounded-md">
                            <i class="nir #redo text-white text-sm"></i>
                        </button>
                    </div>
                </div>

                <div class="flex gap-3 items-center">
                    <div class="w-full">
                        <button type="button" onclick="addImage()"><i class="nil text-[rgba(var(--nt-primary-500))] rounded-md text-sm flex border items-center justify-center #image w-7 h-7 flex-shrink-0"></i></button>
                        {{-- <button type="button"><i class="nil text-[rgba(var(--nt-primary-500))] rounded-md text-sm flex border items-center justify-center #film w-7 h-7 flex-shrink-0"></i></button> --}}
                        <button type="button" onclick="addCode()"><i class="nil text-[rgba(var(--nt-primary-500))] rounded-md text-sm flex border items-center justify-center #code w-7 h-7 flex-shrink-0"></i></button>
                    </div>
                    <div class="text-right flex-shrink-0">
                        <button type="button" class="bg-gradient-to-r from-[#ef4444] to-[#EB5757] px-2 py-1 rounded text-white waves-effect w-auto">Post</button>
                    </div>
                </div>

            </form>
            @foreach ($data as $item)
                <div class="drop-shadow-sm flex flex-col gap-3 w-full rounded-lg p-5 bg-white">
                    <div class="flex flex-wrap sm:flex-nowrap w-full gap-2 items-start">
                        @if (!empty($item['icon']))
                            <i class="{{ $item['icon'] }}"></i>
                        @endif
                        <h1 id="{{ str_replace(' ','-',strtolower($item['title'])).'-'.$item['id'] }}" class='w-full font-medium text-base'> {{ $item['title'] ?? '' }}</h1>
                        <date-time class="text-des rounded-md border px-2 py-1 font-medium flex gap-2 flex-shrink-0 float-right"> 
                            <post-date>10-11-2022</post-date> 
                            <post-time>10:10 PM</post-time> 
                        </date-time>
                    </div>

                    @if (!empty($item['detail']))
                        <div>{!! $item['detail'] !!}</div>
                    @endif

                    @if (!empty($item['image']))
                        <img class="h-96 w-full p-5 object-cover rounded-xl" src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                    @endif

                    @if (!empty($item['codeTitle']))
                        {!! $item['codeTitle'] !!}
                    @endif

                    @if (!empty($item['code']))
                        <div class="bg-[#2d2d2d] rounded-lg overflow-hidden">
                            <div class="bg-[#363636] drop-shadow-sm">
                                <ul class="flex flex-wrap -mb-px" id="tab-key-{{ $item['id'] }}" data-tabs-toggle="#tab-key-cotent-{{ $item['id'] }}" role="tablist">
                                    @foreach ( $item['code'] as $key => $code )
                                        <li role="presentation">
                                            <button 
                                                class="font-semibold text-sm inline-block py-3 px-4 rounded-t-lg border-b"
                                                data-tabs-target="#tab-id-{{ str_replace(' ','',strtolower($code['title'])) }}-{{ $item['id'] }}" 
                                                type="button" 
                                                role="tab" 
                                                aria-controls="tab-id-{{ str_replace(' ','',strtolower($code['title'])) }}-{{ $item['id'] }}" 
                                                aria-selected="false">{{ $code['title'] }}
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="tab-key-cotent-{{ $item['id'] }}">
                                @foreach ($item['code'] as $key => $code )
                                    <div 
                                        class="hidden" 
                                        id="tab-id-{{ str_replace(' ','',strtolower($code['title'])) }}-{{ $item['id'] }}" 
                                        role="tabpanel" 
                                    >
                                        @php
                                            $lang = "";
                                            if (str_replace(' ','',strtolower($code['title'])) == 'js') {
                                                $lang = "javascript";
                                            }
                                            if (str_replace(' ','',strtolower($code['title'])) == 'html') {
                                                $lang = "html";
                                            }
                                            if (str_replace(' ','',strtolower($code['title'])) == 'css') {
                                                $lang = "css";
                                            }
                                            if (str_replace(' ','',strtolower($code['title'])) == 'config') {
                                                $lang = "javascript";
                                            }
                                        @endphp
                                        <pre class="rounded-lg"><code class="language-{{ $lang }}">{{ $code['code'] }}</code></pre>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    
                    @if (!empty($item['react']))
                        <div class="flex pt-2">
                            <react-icon class="flex gap-2 items-center">
                                <button type="button" class="hover:text-red-500 group">
                                    <i class="nir text-lg #heart group-hover:hidden"></i>
                                    <i class="nis text-lg #heart hidden group-hover:block"></i>
                                </button>
                                <count-react>{{ $item['react'] }}</count-react>
                            </react-icon>
                        </div>
                    @endif

                </div>
            @endforeach
        </div>
    @endif
@endsection

@section('directTo')
    <div class="w-60 px-3 py-5 flex-shrink-0 right-0 top-14 h-[calc(100vh_-_3.5rem)] hidden xl:block sticky justify-end overflow-y-auto drop-shadow-sm p-5 bg-white">
        <div class="border-l border-red-500 ml-4 [&>ul>li>label]:pl-5 [&>ul>li>label]:text-left hover:[&>ul>li>label]:text-white hover:[&>ul>li>label]:bg-gradient-to-br hover:[&>ul>li>label]:from-[#EB5757] hover:[&>ul>li>label]:to-[#F2994A]">
            <ul class="[&>*>*]:rounded-r-md [&>*>*]:w-full [&>*>*]:py-1">
                @if (!empty($data) && count($data))
                    @foreach ($data as $item)
                        <li>
                            <label 
                                {{-- onclick="directTo('#{{ str_replace(' ','',strtolower($item['title'])) }}')"  --}}
                                onclick="scrollToID('{{ str_replace(' ','-',strtolower($item['title'])).'-'.$item['id'] }}')" 
                                class="leading-7 text-sm line-clamp-1 cursor-pointer"
                            >
                                {!! $item['title'] ?? '' !!}
                            </label>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection