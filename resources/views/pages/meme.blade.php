@extends('layout')

@section('content')
    <main class="flex-auto">
        <div class="sm:px-8 mt-16 sm:mt-32">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <header class="max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">{{ $title }}</h1>
                            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">{{ $description }}</p>
                        </header>

                        <div class="lg:pl-20">
                            <div class="max-w-xs px-2.5 lg:max-w-none">
                                <img alt="" loading="lazy" width="3000" height="3000" decoding="async" class="aspect-square bg-zinc-100 object-cover dark:bg-zinc-800" style="color:transparent" sizes="(min-width: 1024px) 32rem, 20rem" src="{{ $image }}">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection       