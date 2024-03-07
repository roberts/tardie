@extends('layout')

@section('content')
    <div class="flex-none" style="height:var(--content-offset)"></div>
    <main class="flex-auto">
        <div class="sm:px-8 mt-16">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <div class="max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">I am Bob. You are Bob. We are all perfectly Bob.</h1>
                            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">Robert is the Alpha. Bob is the Omega. All Bobs are Bob and all Bobs are He. In Bob we trust. $BOB lives on the Solana Blockchain under this contract address: <a class=" text-zinc-600 dark:text-zinc-400 transition hover:text-zinc-500 dark:hover:text-zinc-300" href="https://solscan.io/token/4rtdcn81czaDSGRdumyj76JFgeo55aZKXUURm2M2iVdN">4rtdcn81czaDSGRdumyj76JFgeo55aZKXUURm2M2iVdN</a></p>
                            <div class="mt-6 flex gap-6">
                                <a class="group -m-1 p-1" aria-label="Follow on X" href="https://x.com/BobdaoSol">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M13.3174 10.7749L19.1457 4H17.7646L12.7039 9.88256L8.66193 4H4L10.1122 12.8955L4 20H5.38119L10.7254 13.7878L14.994 20H19.656L13.3171 10.7749H13.3174ZM11.4257 12.9738L10.8064 12.0881L5.87886 5.03974H8.00029L11.9769 10.728L12.5962 11.6137L17.7652 19.0075H15.6438L11.4257 12.9742V12.9738Z"></path>
                                    </svg>
                                </a>
                                <a class="group -m-1 p-1" aria-label="Follow on Telegram" href="https://t.me/WeAreAllBOB">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M 20.302734 2.984375 C 20.013769 2.996945 19.748583 3.080055 19.515625 3.171875 C 19.300407 3.256634 18.52754 3.5814726 17.296875 4.0976562 C 16.06621 4.61384 14.435476 5.2982348 12.697266 6.0292969 C 9.2208449 7.4914211 5.314238 9.1361259 3.3125 9.9785156 C 3.243759 10.007156 2.9645852 10.092621 2.65625 10.328125 C 2.3471996 10.564176 2.0039062 11.076462 2.0039062 11.636719 C 2.0039062 12.088671 2.2295201 12.548966 2.5019531 12.8125 C 2.7743861 13.076034 3.0504903 13.199244 3.28125 13.291016 L 3.28125 13.289062 C 4.0612776 13.599827 6.3906939 14.531938 6.9453125 14.753906 C 7.1420423 15.343433 7.9865895 17.867278 8.1875 18.501953 L 8.1855469 18.501953 C 8.3275588 18.951162 8.4659791 19.243913 8.6582031 19.488281 C 8.7543151 19.610465 8.8690398 19.721184 9.0097656 19.808594 C 9.0637596 19.842134 9.1235454 19.868148 9.1835938 19.892578 C 9.191962 19.896131 9.2005867 19.897012 9.2089844 19.900391 L 9.1855469 19.894531 C 9.2029579 19.901531 9.2185841 19.911859 9.2363281 19.917969 C 9.2652427 19.927926 9.2852873 19.927599 9.3242188 19.935547 C 9.4612233 19.977694 9.5979794 20.005859 9.7246094 20.005859 C 10.26822 20.005859 10.601562 19.710937 10.601562 19.710938 L 10.623047 19.695312 L 12.970703 17.708984 L 15.845703 20.369141 C 15.898217 20.443289 16.309604 21 17.261719 21 C 17.829844 21 18.279025 20.718791 18.566406 20.423828 C 18.853787 20.128866 19.032804 19.82706 19.113281 19.417969 L 19.115234 19.416016 C 19.179414 19.085834 21.931641 5.265625 21.931641 5.265625 L 21.925781 5.2890625 C 22.011441 4.9067171 22.036735 4.5369631 21.935547 4.1601562 C 21.834358 3.7833495 21.561271 3.4156252 21.232422 3.2226562 C 20.903572 3.0296874 20.591699 2.9718046 20.302734 2.984375 z M 19.908203 5.1738281 C 19.799442 5.7198576 17.33401 18.105877 17.181641 18.882812 L 13.029297 15.041016 L 10.222656 17.414062 L 11 14.375 C 11 14.375 16.362547 8.9468594 16.685547 8.6308594 C 16.945547 8.3778594 17 8.2891719 17 8.2011719 C 17 8.0841719 16.939781 8 16.800781 8 C 16.675781 8 16.506016 8.1197812 16.416016 8.1757812 C 15.272368 8.8887854 10.401283 11.664685 8.0058594 13.027344 C 7.8617016 12.96954 5.6973962 12.100458 4.53125 11.634766 C 6.6055146 10.76177 10.161156 9.2658083 13.472656 7.8730469 C 15.210571 7.142109 16.840822 6.4570977 18.070312 5.9414062 C 19.108158 5.5060977 19.649538 5.2807035 19.908203 5.1738281 z M 17.152344 19.025391 C 17.152344 19.025391 17.154297 19.025391 17.154297 19.025391 C 17.154252 19.025621 17.152444 19.03095 17.152344 19.03125 C 17.153615 19.024789 17.15139 19.03045 17.152344 19.025391 z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 sm:mt-20">
            <div class="-my-4 flex justify-center gap-5 overflow-hidden py-4 sm:gap-8">
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 rotate-2"><img alt="" loading="lazy" width="3744" height="5616" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/dylan.jpeg"></div>
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 -rotate-2"><img alt="" loading="lazy" width="3936" height="2624" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/bushay.jpeg"></div>
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 rotate-2"><img alt="" loading="lazy" width="5760" height="3840" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/marley.jpeg"></div>
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 rotate-2"><img alt="" loading="lazy" width="2400" height="3000" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/ross.jpeg"></div>
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 -rotate-2"><img alt="" loading="lazy" width="4240" height="2384" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/sponge.jpeg"></div>
            </div>
        </div>
        <div class="sm:px-8 mt-24 md:mt-28">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <div class="mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2">
                            <div class="flex flex-col gap-16">
                                <a class="twitter-timeline" data-lang="en" data-height="1000" data-theme="dark" href="https://twitter.com/BobdaoSol?ref_src=twsrc%5Etfw">Tweets by BobdaoSol</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                                <!-- Article link format for future
                                <article class="group relative flex flex-col items-start">
                                    <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                        <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50"></div>
                                        <a href="/articles/crafting-a-design-system-for-a-multiplanetary-future">
                                            <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                                            <span class="relative z-10">This is a Sample Post</span>
                                        </a>
                                    </h2>
                                    <time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2024-03-01"><span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span></span>March 1, 2024</time>
                                    <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">This section here will be for highlighted social media posts or we could do blog articles. Only Bob knows what is best for it.</p>
                                    <div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500">
                                        View social post
                                        <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                                            <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </article>
                                -->

                            </div>
                            <div class="space-y-10 lg:pl-16 xl:pl-24">
                                <form class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40" action="/thank-you">
                                    <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                                            <path d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                            <path d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                        </svg><span class="ml-3">Find the Bob in you:</span></h2>
                                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Enter your SOL address and X handle for a surprise..</p>
                                    <div class="mt-6 flex"><input type="text" placeholder="Solana address" aria-label="Solana address" required="" class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 sm:text-sm dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10"></div>
                                    <div class="mt-6 flex"><input type="text" placeholder="X handle" aria-label="X handle" required="" class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 sm:text-sm dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10"><button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700 active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700 dark:active:text-zinc-100/70 ml-4 flex-none" type="submit">Submit</button></div>
                                </form>
                                <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                                    <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                                            <path d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                            <path d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                        </svg><span class="ml-3">Roadmap</span></h2>
                                    <ol class="mt-6 space-y-4">
                                        <li class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="32" height="32" decoding="async" class="h-7 w-7 object-cover rounded" style="color:transparent" src="/img/marley.jpeg"></div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">Bob</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">Bob Marley</dd>
                                                <dt class="sr-only">Phase</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">Phase 1</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2024 until 2024"><time datetime="2024">Feb</time> <span aria-hidden="true">—</span> <time datetime="2024">Mar</time></dd>
                                            </dl>
                                        </li>
                                        <li class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="28" height="28" decoding="async" class="h-7 w-7" style="color:transparent" src="/img/ross.jpeg"></div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">Bob</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">Bob Ross</dd>
                                                <dt class="sr-only">Phase</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">Phase 2</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2024 until 2024"><time datetime="2024">Apr</time> <span aria-hidden="true">—</span> <time datetime="2024">May</time></dd>
                                            </dl>
                                        </li>
                                        <li class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="28" height="28" decoding="async" class="h-7 w-7" style="color:transparent" src="/img/dylan.jpeg"></div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">Bob</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">Bob Dylan</dd>
                                                <dt class="sr-only">Phase</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">Phase 3</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2024 until 2024"><time datetime="2024">Jun</time> <span aria-hidden="true">—</span> <time datetime="2024">Jul</time></dd>
                                            </dl>
                                        </li>
                                        <li class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="28" height="28" decoding="async" class="h-7 w-7" style="color:transparent" src="/img/sponge.jpeg"></div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">Bob</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">Sponge Bob</dd>
                                                <dt class="sr-only">Phase</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">Phase 4</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2024 until 2024"><time datetime="2024">Aug</time> <span aria-hidden="true">—</span> <time datetime="2024">Sep</time></dd>
                                            </dl>
                                        </li>
                                    </ol>
                                    <a class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full" href="/whitepaper.pdf">Download Whitepaper
                                        <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600 dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50">
                                            <path d="M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection     