<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-950 text-stone-300">
    <header class="bg-stone-900">
        <nav class="flex justify-between py-4 mx-auto max-w-screen-lg ">
            <div class="font-bold text-xl tracking-wide"><a href="/">Book Wise</a></div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-purple-600">Explorar</a></li>
                <li><a href="/meus-livros" class="hover:underline">Meus livros</a></li>
            </ul>
            <ul>
                <li><a href="/login" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg space-y-6">

        <?php require "views/{$view}.view.php";?>
        
    </main>
</body>

</html>