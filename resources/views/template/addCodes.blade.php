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
            <button type="button" class="h-7 w-7 hover:bg-slate-900 text-slate-300 hover:text-white flex-shrink-0 items-center justify-center rounded waves-effect"><i class="nil #plus"></i></button>
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


{{-- <script src="{{ mix('js/utils.js') }}"></script> --}}