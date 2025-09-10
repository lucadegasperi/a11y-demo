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

        @if ($errors->any())
            <div
                class="mb-4 p-4 border border-red-500 bg-red-100 text-red-700"
                role="alert"
                aria-live="assertive"
                id="error-summary"
                tabindex="-1"
            >
                <h2 class="font-bold">Ci sono alcuni errori con quanto inserito:</h2>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <script>
                document.getElementById('error-summary')?.focus();
            </script>
        @endif

        @csrf
        <div class="flex flex-col gap-2">
            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                class="border border-gray-200 p-2"
                value="{{ old('username') }}"
                @error('username') aria-invalid="true" aria-describedby="username-error" @enderror
            >
            @error('username')
                <span id="username-error">{{ $message }}</span>
            @enderror

        </div>

        <div class="flex flex-col gap-2">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                class="border border-gray-200 p-2"
                @error('password') aria-invalid="true" aria-describedby="password-error" @enderror
            >
            @error('password')
            <span id="password-error">{{ $message }}</span>
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
