<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Portfolio</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-slate-900 text-white text-gray-200">
        <?php include('./components/header.php')?>

        <main class="mx-auto max-w-screen-xl min-h-20 px-3 py-6">
            <!-- Hero -->
            <?php include('./components/hero.php')?>

            <!-- Projetos -->
            <section id="projetos" class="space-y-3 py-6">
                <h2 class="text-2xl font-bold">Meus Projetos</h2>
                <?php include('./components/projetos.php')?>
            </section>
        </main>

        <!-- Rodapé -->
        <footer class="mx-auto max-w-screen-xl min-h-20">
          <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
            <p class="text-center py-3">© Copyright <?=date('Y')?>. Feito com ❤️ por Thai</p>
          </div>
        </footer>
    </body>
</html>