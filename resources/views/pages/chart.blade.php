@extends('layout')

@section('content')
    <main class="flex-auto">
        <div class="sm:px-8 mt-16 sm:mt-32">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <header class="max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">Robert Chart</h1>
                            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">Here is the live $BOB chart on DexScreener:</p>
                        </header>
                        <div class="mt-6 sm:mt-6">
                            <style>#dexscreener-embed{position:relative;width:100%;padding-bottom:125%;}@media(min-width:1400px){#dexscreener-embed{padding-bottom:65%;}}#dexscreener-embed iframe{position:absolute;width:100%;height:100%;top:0;left:0;border:0;}</style>
                            <div id="dexscreener-embed">
                                <iframe src="https://dexscreener.com/solana/CjwQrhXiLV4VWTcLsauyKbHNWCgmh1y9FBLtQezqCvCu?embed=1&theme=dark"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection       