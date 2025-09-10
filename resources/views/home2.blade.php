<!doctype html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XPUG Trento Merch Store</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="bg-green-200 flex items-center gap-8 text-xl text-green-950 font-semibold p-4">
            <a href="/" class="w-20">
                <img src="/storage/logo.png">
            </a>

            <a href="/prodotti" class="hover:underline">Prodotti</a>
            <a href="/login" class="hover:underline">Accesso</a>
        </div>

        <div>

            <h1 class="text-4xl font-semibold text-center p-4 text-gray-400">XPUG Trento Merch Store</h1>

            <div class="p-4 pb-10  flex flex-col gap-8">
                <p class="text-lg font-semibold">Prodotti</p>

                <div class="grid lg:grid-cols-4 gap-8">
                    <div class="flex flex-col gap-2">
                        <img src="/storage/man-tshirt.png" class="aspect-square object-cover">
                        <h2 class="text-2xl font-semibold">Maglietta Uomo</h2>
                    </div>

                    <div class="flex flex-col gap-2">
                        <img src="/storage/woman-tshirt.png" class="aspect-square object-cover">
                        <h2 class="text-2xl font-semibold">Maglietta Donna</h2>
                    </div>

                    <div class="flex flex-col gap-2">
                        <img src="/storage/mug.png" class="aspect-square object-cover">
                        <h2 class="text-2xl font-semibold">Tazza con Logo</h2>
                    </div>
                </div>
            </div>


            <div class="bg-gray-100 p-4 flex flex-col gap-4">
                <p class="text-lg font-semibold">Ultimi Eventi</p>

                <h2><a href="#" class="hover:underline text-2xl font-semibold">Quanto è semplice il "Simple Design"?</a></h2>
                </h2><a href="#" class="hover:underline text-2xl font-semibold">Javascript: in the loop</a></h2>
                </h2><a href="#" class="hover:underline text-2xl font-semibold">XPUG Trento - Coding Dojo</a></h2>
            </div>


        </div>

        <div class="p-4">
            &copy; 2025 - XPUG Trento
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
