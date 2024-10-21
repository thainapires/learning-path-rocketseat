<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu portfólio</title>
    </head>
    <body>
        <?php
            //Algumas informações pro portfolio
            $nome = "Thai";
            $saudacao = "Hello World!";
            $titulo = $saudacao . " - Portfólio da " . $nome;
            $subtitulo = "Seja bem vindo ao meu portfólio!";
            $ano = 2024;

            //Array de projetos e suas informações
            $projetos = [
                [
                    "titulo" => "Meu portfólio",
                    "finalizado" => false,
                    "ano" => 2024,
                    "descricao" => "Meu primeiro portfolio, escrito em PHP e HTML.",
                    "stack" => ["PHP", 'HTML', "CSS", "JS"]
                ],
                [
                    "titulo" => "Lista de Tarefas",
                    "finalizado" => true,
                    "ano" => 2024,
                    "descricao" => "Lista de tarefas, escrita em PHP e HTML."
                ],
                [
                    "titulo" => "Controle de Leitura de Livros",
                    "finalizado" => true,
                    "ano" => 2024,
                    "descricao" => "Controle de Leitura de Livros, escrito em PHP e HTML."
                ],
                [
                    "titulo" => "Mais um projeto",
                    "finalizado" => false,
                    "ano" => 2025,
                    "descricao" => "Mais um projeto escrito em PHP e HTML."
                ],
            ];

            //Função para verificar se um projeto está finalizado e retornar visual correspondente
            function verificarSeEstaFinalizado($finalizado){
                if($finalizado){
                    return '<span style=color:green;">✅ finalizado</span>';
                } 
                return '<span style=color:red;">⛔ não finalizado</span>';  
            }

            //Função onde filtro é realizado manualmente e especificamente para status do projeto
            function filtrarProjetos($listaDeProjetos, $finalizado = null){

                if(is_null($finalizado)){
                    return $listaDeProjetos;
                }

                $filtrados = [];
                foreach($listaDeProjetos as $projeto){
                    if($projeto['finalizado'] === $finalizado){
                        $filtrados[] = $projeto;
                    }
                }

                return $filtrados;
            };

            //Função onde filtro é realizado manualmente, porém generalizado para qualquer filtro
            function filtro($itens, $funcao){

                $filtrados = [];
                foreach($itens as $item){
                    if($funcao($item)){
                        $filtrados[] = $item;
                    }
                }

                return $filtrados;
            };

            //Filtrando utilizando o array filter, que faz exatamente o que foi desenvolvido na função filtro desenvolvida manualmente
            $projetosFiltrados = array_filter($projetos, function($projeto){
                return $projeto['ano'] === 2024;
            });

        ?>

        <!-- Mostrando infos básicas no início -->
        <h1><?=$titulo?></h1>
        <p><?=$subtitulo?></p>
        <p><?=$ano?></p>

        <hr/>

        <!-- Lista de projetos e suas informações -->
        <ul>
            <?php foreach($projetosFiltrados as $projeto): ?>
                <div <?php if(!((2024 - $ano) > 2)): ?>
                        style="background-color: burlywood;"
                    <?php endif; ?> 
                >
                    <h2><?=$projeto['titulo']?></h2>
                    <p><?=$projeto['descricao']?></p>
                    <div>
                        <div><?=$projeto['ano']?></div>
                        <div> Projeto: 
                            <?=verificarSeEstaFinalizado($projeto['finalizado']);?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </ul>


    </body>
</html>