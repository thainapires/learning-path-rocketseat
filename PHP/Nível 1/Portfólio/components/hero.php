<?php
    $itens = [
        ['href' => 'https://github.com/thainapires', 'src' => '/img/github.png', 'alt' => 'Github logo'],
        ['href' => 'https://linkedin.com/in/thainapires', 'src' => '/img/linkedin.png', 'alt' => 'Linkedin logo'],
        ['href' => 'https://instagram.com/thainapires', 'src' => '/img/instagram.png', 'alt' => 'Instagram logo'],
    ];
?>
<section class="flex gap-x-3">
    <!-- Título e Descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Thainá.</h1>
        <p class="text-xl leading-6 mt-6">Falando um pouco sobre mim, sou uma desenvolvedora web que gosta muito de criar coisas novas e aprender novas tecnologias. Trabalhando com PHP, Laravel e React.</p>
        <p>
        <ul class="flex gap-x-3 mt-3">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?=$item['href']?>" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>" />
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
        </p>
    </div>

    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <div><img class="w-52 -mt-2 hover:animate-pulse" src="img/avatar.png" alt="Avatar da Thai"></div>
    </div>
</section>