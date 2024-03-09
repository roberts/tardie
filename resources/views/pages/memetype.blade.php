@extends('layout')

@section('content')
    <main class="flex-auto">
        <div class="sm:px-8 mt-16 sm:mt-32">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <header class="max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">You can be anyBobby you wanna be</h1>
                            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">Feel free to use the best memes in the history of Bob wherever you want on the interwebs:</p>
                        </header>

                        <div class="mt-16 sm:mt-20">
                            <ul role="list" class="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-3">
                                @foreach ($memeType->memes() as $meme)
                                    <li class="group relative flex flex-col items-start">
                                        <div class="relative z-10 flex h-full w-full items-center justify-center bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="3000" height="3000" decoding="async" class="h-full w-full" src="./img/sample-meme.jpg" style="color: transparent;"></div>
                                        <h2 class="mt-6 text-base font-semibold text-zinc-800 dark:text-zinc-100 group-hover:text-teal-500">
                                            <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50"></div><a href="/memes/test"><span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                                            <span class="relative z-10">{{ $meme->title }}</span></a>
                                        </h2>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection       