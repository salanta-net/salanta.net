<div>
    @if(!empty($snippet))
        <article>
            <div>
                <div>
                    <img class="h-24 w-full object-cover" src="{{asset('images/snippet_banner.png')}}" alt="">
                </div>
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="-mt-16 sm:-mt-24 sm:flex sm:items-end sm:space-x-5">
                        <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                            <div class="mt-6 min-w-0 flex-1">
                                <h1 class="truncate text-2xl font-bold text-gray-900">{{$snippet->title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 px-4 pb-12 sm:px-6 lg:px-8 space-y-2 flex flex-row justify-between">
                    <div>
                        <h2 class="text-sm font-medium text-gray-500">Tags</h2>
                        @if(is_array(json_decode($snippet->tags,true)))
                        <ul role="list" class="mt-2 leading-8">
                            @foreach(json_decode($snippet->tags,true) as $key => $tag)
                                <li class="inline">
                                    <div class="relative inline-flex items-center rounded-full px-2.5 py-1 ring-1 ring-inset ring-gray-300">
                                        <div class="text-xs font-semibold text-gray-900">{{$tag}}</div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        @else
                            <div class="mt-2 leading-8 text-xs text-gray-500">No Tags</div>
                        @endif
                    </div>
                <div>
                    <button wire:click="editSnippet({{$snippet->id}})" class="text-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </button>

                </div>
            </div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="border-solid border-2 border-gray-100 p-4">
                    {!! $snippet->content !!}
                </div>

            </div>
        </article>
    @endif
</div>
