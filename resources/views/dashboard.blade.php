@extends('layouts.layout')

@section('content')

<div class="flex">

    <div class="w-2/5 text-white h-12 pl-32 py-4 h-auto relative">

        <nav class="mt-5 px-2">
            <a href="#" class="group flex items-center px-2 py-2 text-base leading-6 font-semibold rounded-full bg-gray-800 text-gray-300">
            <svg class="mr-4 h-6 w-6 " stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"/>
            </svg>
                Home
            </a>
            <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-semibold rounded-full hover:bg-gray-800 hover:text-gray-300">
            <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg>

                Explore
            </a>
            <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
            <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                Notifications
            </a>
            <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
            <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Messages
            </a>
            <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
            <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                Bookmarks
            </a>
            <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
            <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                Lists
            </a>
                <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
            <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                Profile
            </a>
                <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
            <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            More
            </a>

            <button class="bg-gray-400 w-48 mt-5 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full">
                Tweet
            </button>
        </nav>

        @include('shared.success-message')
        @include('shared.error-message')

        {{-- @include('shared.error-message') --}}

        <div class="flex-shrink-0 flex hover:bg-gray-00 rounded-full p-4 mt-16 mr-2">
            <a href="#" class="flex-shrink-0 group block">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                    </div>
                    <div class="ml-3">
                        <p class="text-base leading-6 font-medium text-white">
                        Sonali Hirave
                        </p>
                        <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                        @ShonaDesign
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>

    {{-- single post start --}}
    <div class="w-3/5 border border-gray-600 h-auto  border-t-0">

        <!--middle wall-->
        {{-- <hr class="border-gray-600"> --}}

        <!--middle creat tweet-->
        @include('shared.submit-fizzy')

        @foreach ($fizzies as $fizzy)
            <div>

                <div class="flex flex-shrink-0 p-4 pb-0">
                    <a href="#" class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <div>
                        <img class="inline-block h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                        </div>
                        <div class="ml-3">
                        <p class="text-base leading-6 font-medium text-white">
                            Sonali Hirave
                            <span class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                @ShonaDesign . {{ $fizzy->created_at->diffForHumans() }}
                            </span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="pl-16 pr-6">
                    <p class="text-base width-auto font-medium text-white flex-shrink">

                        {{ $fizzy->content }}

                    </p>

                    <div class="flex">
                        <div class="w-full">

                            <div class="flex items-center">

                                <div class="flex-1 text-center">
                                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
                                        <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
                                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path></svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
                                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>{{ $fizzy->likes }}
                                    </a>
                                </div>


                                <div class="flex-1 text-center py-2 m-2">
                                    <a href="{{ route('fizzies.show', $fizzy->id) }}" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a href="{{ route('fizzies.edit', $fizzy->id) }}" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>

                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <form action="{{ route('fizzies.destroy', $fizzy->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-gray-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

                <hr class="border-gray-600">

            </div>
        @endforeach

        {{-- <div class="flex justify-center my-5 mx-5 px-5 py-5">
            {{ $fizzies->links() }}
        </div> --}}

    </div>
    {{-- single post end --}}


    <div class="w-2/5 h-12">
            <!--right menu-->

        <div class="relative text-gray-300 w-80 p-5 pb-0 mr-16">
            <button type="submit" class="absolute ml-4 mt-3 mr-4">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                </svg>
            </button>

            <input type="search" name="search" placeholder="Search Twitter" class="bg-gray-800 h-10 px-10 pr-5 w-full rounded-full text-sm focus:outline-none bg-purple-white shadow rounded border-0">

        </div>

                <!--second-trending tweet section-->
        <div class="max-w-sm rounded-lg bg-gray-800 overflow-hidden shadow-lg m-4 mr-20">
            <div class="flex">
                <div class="flex-1 m-2">
                    <h2 class="px-4 py-2 text-xl w-48 font-semibold text-white">Germany trends</h2>
                </div>
                <div class="flex-1 px-4 py-2 m-2">
                    <a href="" class=" text-2xl rounded-full text-white hover:bg-gray-800 hover:text-gray-300 float-right">
                        <svg class="m-2 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </a>
                </div>
            </div>


            <hr class="border-gray-600">

                <!--first trending tweet-->
            <div class="flex">
                <div class="flex-1">
                    <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">1 . Trending</p>
                    <h2 class="px-4 ml-2 w-48 font-bold text-white">#Microsoft363</h2>
                    <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,466 Tweets</p>

                </div>
                <div class="flex-1 px-4 py-2 m-2">
                    <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-gray-300 float-right">
                        <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                </div>
            </div>
            <hr class="border-gray-600">

            <!--second trending tweet-->

            <div class="flex">
                <div class="flex-1">
                    <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">2 .  Politics . Trending</p>
                    <h2 class="px-4 ml-2 w-48 font-bold text-white">#HI-Fashion</h2>
                    <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">8,464 Tweets</p>

                </div>
                <div class="flex-1 px-4 py-2 m-2">
                    <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-gray-300 float-right">
                        <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                </div>
            </div>
            <hr class="border-gray-600">

            <!--third trending tweet-->

            <div class="flex">
                <div class="flex-1">
                    <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">3 .  Rock . Trending</p>
                    <h2 class="px-4 ml-2 w-48 font-bold text-white">#Ferrari</h2>
                    <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,586 Tweets</p>

                </div>
                <div class="flex-1 px-4 py-2 m-2">
                    <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-gray-300 float-right">
                        <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                </div>
            </div>
            <hr class="border-gray-600">

            <!--forth trending tweet-->

            <div class="flex">
                <div class="flex-1">
                    <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">4 . Auto Racing . Trending</p>
                    <h2 class="px-4 ml-2 w-48 font-bold text-white">#vettel</h2>
                    <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">9,416 Tweets</p>

                </div>
                <div class="flex-1 px-4 py-2 m-2">
                    <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-gray-300 float-right">
                        <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                </div>
            </div>
            <hr class="border-gray-600">

            <!--show more-->

            <div class="flex">
                <div class="flex-1 p-4">
                    <h2 class="px-4 ml-2 w-48 font-bold text-gray-400">Show more</h2>
                </div>
            </div>

        </div>


            <!--third-people suggetion to follow section-->

        <div class="max-w-sm rounded-lg bg-gray-800 overflow-hidden shadow-lg m-4 mr-20">
            <div class="flex">
                <div class="flex-1 m-2">
                    <h2 class="px-4 py-2 text-xl w-48 font-semibold text-white">Who to follow</h2>
                </div>
            </div>


            <hr class="border-gray-600">

                <!--first person who to follow-->

            <div class="flex flex-shrink-0">
                <div class="flex-1 ">
                    <div class="flex items-center w-48">
                        <div>
                        <img class="inline-block h-10 w-auto rounded-full ml-4 mt-2" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                        </div>
                        <div class="ml-3 mt-3">
                        <p class="text-base leading-6 font-medium text-white">
                            Sonali Hirave
                        </p>
                        <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                            @ShonaDesign
                        </p>
                        </div>
                    </div>

                </div>
                <div class="flex-1 px-4 py-2 m-2">
                    <a href="" class=" float-right">
                        <button class="bg-transparent hover:bg-gray-500 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded-full">
                            Follow
                        </button>
                    </a>

                </div>
            </div>
            <hr class="border-gray-600">

            <!--second person who to follow-->

            <div class="flex flex-shrink-0">
                <div class="flex-1 ">
                    <div class="flex items-center w-48">
                        <div>
                        <img class="inline-block h-10 w-auto rounded-full ml-4 mt-2" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                        </div>
                        <div class="ml-3 mt-3">
                        <p class="text-base leading-6 font-medium text-white">
                            Sonali Hirave
                        </p>
                        <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                            @ShonaDesign
                        </p>
                        </div>
                    </div>

                </div>
                <div class="flex-1 px-4 py-2 m-2">
                    <a href="" class=" float-right">
                        <button class="bg-transparent hover:bg-gray-500 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded-full">
                            Follow
                        </button>
                    </a>

                </div>
            </div>

            <hr class="border-gray-600">



            <!--show more-->

            <div class="flex">
                <div class="flex-1 p-4">
                    <h2 class="px-4 ml-2 w-48 font-bold text-gray-400">Show more</h2>
                </div>
            </div>

        </div>

        <div class="flow-root m-6 inline">
            <div class="flex-1">
                <a href="#">
                <p class="text-sm leading-6 font-medium text-gray-500">Terms Privacy Policy Cookies Imprint Ads info</p>
                </a>
                </div>
            <div class="flex-2">
                <p class="text-sm leading-6 font-medium text-gray-600"> © 2020 Twitter, Inc.</p>
            </div>
        </div>

    </div>

</div>

@endsection

