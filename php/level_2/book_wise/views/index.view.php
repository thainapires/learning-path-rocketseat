<h1 class="mt-6 font-bold text-lg">Explorar</h1>

<!--Card do livro -->
<form class="flex space-x-2 w-full mt-6">
    <input
        type="text"
        class="text-sm border-stone-800 border-2 rounded-md bg-stone-900 focus:outline-none px-2 py-1"
        placeholder="Pesquisar"
        name="pesquisar" />
    <button type="submit">🔎</button>
</form>
<!-- Lista de livros -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    <?php foreach ($livros as $livro): ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">Imagem</div>
                <div class="space-y-1">
                    <a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                    <div class="text-xs italic"><?= $livro['autor'] ?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐ (3 Avaliações)</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?= $livro['descricao'] ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>