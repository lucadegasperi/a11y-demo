<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XPUG Trento Merch Store</title>
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
            <li><a href="/login" class="hover:underline">Accesso</a></li>
        </ul>
    </nav>
</header>

<main id="main">

    <h1 class="text-4xl font-semibold text-center p-4 text-gray-600">XPUG Trento Merch Store</h1>

    <div class="p-4 pb-10  flex flex-col gap-8">
        <h2 class="text-lg font-semibold">Prodotti</h2>

        <ul class="grid lg:grid-cols-4 gap-8">
            <li class="flex flex-col gap-2">
                <img src="/storage/man-tshirt.png" alt="Uomo che veste una maglietta bianca con il logo XPUG"
                     class="aspect-square object-cover">
                <h3 class="text-2xl font-semibold">Maglietta Uomo</h3>
            </li>

            <li class="flex flex-col gap-2">
                <img src="/storage/woman-tshirt.png" alt="Donna che veste una maglietta bianca con il logo XPUG"
                     class="aspect-square object-cover">
                <h3 class="text-2xl font-semibold">Maglietta Donna</h3>
            </li>

            <li class="flex flex-col gap-2">
                <img src="/storage/mug.png" alt="Tazza Bianca con il logo XPUG" class="aspect-square object-cover">
                <h3 class="text-2xl font-semibold">Tazza con Logo</h3>
            </li>
        </ul>
    </div>


    <div class="bg-gray-100 p-4 flex flex-col gap-4">
        <h2 class="text-lg font-semibold">Ultimi Eventi</h2>

        <ul>
            <li><h3><a href="#" class="hover:underline text-2xl font-semibold">Quanto è semplice il "Simple Design"?</a></h3></li>
            <li><h3><a href="#" class="hover:underline text-2xl font-semibold">Javascript: in the loop</a></h3></li>
            <li><h3><a href="#" class="hover:underline text-2xl font-semibold">XPUG Trento - Coding Dojo</a></h3></li>
        </ul>
    </div>


</main>

<footer class="p-4">
    &copy; 2025 - XPUG Trento
</footer>

@vite('resources/js/app.js')
</body>
</html>
