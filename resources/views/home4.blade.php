<!doctype html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XPUG Trento Merch Store</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="bg-green-200 flex items-center gap-8 text-xl text-green-950 font-semibold p-4">
            <a href="/" class="w-20">
                <img src="/storage/logo.png" alt="Logo XPUG">
                <span class="sr-only">HomePage</span>
            </a>

            <a href="/prodotti" class="hover:underline">Prodotti</a>
            <a href="/login" class="hover:underline">Accesso</a>
        </header>

        <main>

            <h1 class="text-4xl font-semibold text-center p-4 text-gray-600">XPUG Trento Merch Store</h1>

            <div class="p-4 pb-10  flex flex-col gap-8">
                <h2 class="text-lg font-semibold">Prodotti</h2>

                <div class="grid lg:grid-cols-4 gap-8">
                    <div class="flex flex-col gap-2">
                        <img src="/storage/man-tshirt.png" alt="Uomo che veste una maglietta bianca con il logo XPUG" class="aspect-square object-cover">
                        <h3 class="text-2xl font-semibold">Maglietta Uomo</h3>
                    </div>

                    <div class="flex flex-col gap-2">
                        <img src="/storage/woman-tshirt.png" alt="Donna che veste una maglietta bianca con il logo XPUG" class="aspect-square object-cover">
                        <h3 class="text-2xl font-semibold">Maglietta Donna</h3>
                    </div>

                    <div class="flex flex-col gap-2">
                        <img src="/storage/mug.png" alt="Tazza Bianca con il logo XPUG" class="aspect-square object-cover">
                        <h3 class="text-2xl font-semibold">Tazza con Logo</h3>
                    </div>
                </div>
            </div>


            <div class="bg-gray-100 p-4 flex flex-col gap-4">
                <h2 class="text-lg font-semibold">Ultimi Eventi</h2>

                <h3><a href="#" class="hover:underline text-2xl font-semibold">Quanto è semplice il "Simple Design"?</a></h3>
                <h3><a href="#" class="hover:underline text-2xl font-semibold">Javascript: in the loop</a></h3>
                <h3><a href="#" class="hover:underline text-2xl font-semibold">XPUG Trento - Coding Dojo</a></h3>
            </div>


        </main>

        <footer class="p-4">
            &copy; 2025 - XPUG Trento
        </footer>

        @vite('resources/js/app.js')
    </body>
</html>
