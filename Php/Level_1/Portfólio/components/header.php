<?php
    $itens = [
        ['href' => '#projetos', 'texto' => 'Projetos'],
        ['href' => 'https://github.com/thainapires', 'texto' => 'Github'],
        ['href' => 'https://linkedin.com/in/thainapires', 'texto' => 'Linkedin'],
    ];
?>
<header class="mx-auto max-w-screen-xl px-3 py-6 flex items-center justify-between">
    <!-- Logo -->
    <div class="font-bold text-xl text-cyan-600">🌱 Meu Portfólio</div>
    <!-- Links -->
    <div class="">
        <ul class="flex gap-x-3 font-medium">
            <?php foreach($itens as $item):?>
                <li>
                    <a href="<?=$item['href']?>" class="hover:underline">
                        <?=$item['texto']?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>