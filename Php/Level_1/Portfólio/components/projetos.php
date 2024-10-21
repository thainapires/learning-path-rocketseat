<?php
    $projetos = [
        [
            "titulo" => "Meu portfólio",
            "finalizado" => false,
            "ano" => 2024,
            "descricao" => "Portfólio feito no primeiro módulo do curso de PHP da rocketseat, escrito em PHP e HTML.",
            "stack" => ["PHP", 'HTML', "Tailwind"],
            "img" => "/img/projetos/portfolio.png"
        ],
        [
            "titulo" => "Todo",
            "finalizado" => true,
            "ano" => 2023,
            "descricao" => "Todo é um app simples criado com React que permite adicionar tarefas em uma lista e marcá-las como feitas após finalizá-las.",
            "stack" => ["React", 'Typescript', "CSS"],
            "img" => "/img/projetos/todo-list.png"
        ],
        [
            "titulo" => "Super gestão",
            "finalizado" => true,
            "ano" => 2022,
            "descricao" => "Mais um projeto escrito em PHP e HTML.",
            "stack" => ["PHP", 'Laravel', "Mysql", "Vuejs"],
            "img" => "/img/projetos/super-gestao.png"
        ],
        [
            "titulo" => "Read",
            "finalizado" => true,
            "ano" => 2020,
            "descricao" => "O Read é uma aplicação desenvolvida durante o Next Level Week 3.0, no qual adaptei o projeto original para este, que conecta pessoas com bibliotecas da cidade do Rio de Janeiro.",
            "stack" => ["React", 'Typescript', "CSS"],
            "img" => "/img/projetos/read-app.png"
        ],
    ];

    function verificarSeEstaFinalizado($finalizado){
        if($finalizado){
            return '✅';
        } 
        return '⛔';  
    }
?>

<?php foreach ($projetos as $projeto): ?>
    <div class="flex items-center bg-slate-800 rounded-lg p-3 space-x-3">
        <div class="w-1/5 flex items-center justify-middle">
            <img src="<?=$projeto['img']?>" class="h-42 rounded-md shadow-lg shadow-slate-900"/>
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="font-semibold text-xl">
                    <?=verificarSeEstaFinalizado($projeto['finalizado']);?>
                    <?=$projeto['titulo']?> 
                    <?php if($projeto['finalizado']): ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?=$projeto['ano']?>)</span>
                    <?php else: ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(em desenvolvimento)</span>
                    <?php endif;?>
                </h3>
                <div class="space-x-1">
                    <?php 
                        $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
                        foreach($projeto['stack'] as $posicao => $tech): 
                    ?>
                        <span class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                            <?=$tech?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6">
                <?=$projeto['descricao']?> 
            </p>
        </div>
    </div>
<?php endforeach; ?>