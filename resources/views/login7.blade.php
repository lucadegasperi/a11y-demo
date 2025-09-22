<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XPUG Trento Merch Store - Login</title>
    @vite('resources/css/app.css')
</head>
<body>
<a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:bg-red-500 text-white focus:p-4">Vai al contenuto</a>
<header class="bg-green-200 p-4 relative">
    <nav aria-labelledby="primary-navigation">
        <span class="sr-only" id="primary-navigation">Navigazione Principale</span>
        <ul class="flex items-center gap-8 text-xl text-green-950 font-semibold">
            <li class="w-20">
                <a href="/">
                    <img src="/storage/logo.png" alt="Logo XPUG">
                    <span class="sr-only">HomePage</span>
                </a>
            </li>

            <li>
                <button class="hover:underline" popovertarget="subnav">Prodotti</button>
                <div id="subnav" popover class="absolute top-28 left-0 w-full bg-cyan-200 text-cyan-900">
                    <ul class="flex gap-8 p-4">
                        <li><a href="/prodotti/magliette" class="hover:underline">Magliette</a></li>
                        <li><a href="/prodotti/tazze" class="hover:underline">Tazze</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="/login" class="hover:underline" aria-current="page">Accesso</a></li>
        </ul>
    </nav>
</header>

<main id="main">

    <h1 class="text-4xl font-semibold text-center p-4 text-gray-600">Accesso</h1>

    <form method="POST" action="/login" class="p-4 pb-10  flex flex-col gap-8 mx-auto max-w-xl">

        @csrf
        <div class="flex flex-col gap-2">
            <label for="username">Username</label>
            <input
                type="text"
                name="username"
                id="username"
                class="border border-gray-200 p-2"
                value="{{ old('username') }}"
            >
            @error('username')
                <span id="username-error" class="text-red-500">{{ $message }}</span>
            @enderror

        </div>

        <div class="flex flex-col gap-2">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                class="border border-gray-200 p-2"
            >
            @error('password')
            <span id="password-error" class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-green-200 text-green-950 p-2 hover:bg-green-300 cursor-pointer">Accedi</button>
    </form>


</main>

<footer class="p-4">
    &copy; 2025 - XPUG Trento
</footer>

@vite('resources/js/app.js')
</body>
</html>
