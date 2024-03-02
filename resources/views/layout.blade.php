<!doctype html>
<html lang="en" class="h-full antialiased dark" style="color-scheme: dark; --header-position: sticky; --content-offset: 0px; --header-height: 64px; --header-mb: 0px; --header-top: 0px; --avatar-top: 0px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>About $BOB on Solana</title>
    <meta name="description" content="I am Bob. You are Bob. We are all perfectly Bob. We exist on the Solana Blockchain. Ticker is $BOB.">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16">
</head>

<body class="flex h-full bg-zinc-50 dark:bg-black" data-new-gr-c-s-check-loaded="14.1157.0" data-gr-ext-installed="">
    <script>
        ! function() {
            try {
                var d = document.documentElement,
                    c = d.classList;
                c.remove('light', 'dark');
                var e = localStorage.getItem('theme');
                if ('system' === e || (!e && true)) {
                    var t = '(prefers-color-scheme: dark)',
                        m = window.matchMedia(t);
                    if (m.media !== t || m.matches) {
                        d.style.colorScheme = 'dark';
                        c.add('dark')
                    } else {
                        d.style.colorScheme = 'light';
                        c.add('light')
                    }
                } else if (e) {
                    c.add(e || '')
                }
                if (e === 'light' || e === 'dark') d.style.colorScheme = e
            } catch (e) {}
        }()
    </script>
    <div class="flex w-full">
        <div class="fixed inset-0 flex justify-center sm:px-8">
            <div class="flex w-full max-w-7xl lg:px-8">
                <div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
            </div>
        </div>
        <div class="relative flex w-full flex-col">
            @include('partials.header')

            @yield('content')

            @include('partials.footer')
        </div>
    </div>
</body>
</html>