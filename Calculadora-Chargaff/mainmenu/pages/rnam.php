<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RNA mensageiro</title>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--Importação de css personalizado-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Importação bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <style>
        .corpo{
            margin-left: -8vh;
        }
        
        #prote{
            position:absolute;
            z-index: 1;
            height: 26vh;
        }
        @media (max-width:1100px){
            
        .corpo{
            margin-left: 0vh;
        }
        }
    </style>
    <?php

//recebe os cookies pára o usuário acessar esta página do site
//o if ja verifica se os dois campos possuem valores
if(isset($_COOKIE['idusuario']) && isset($_COOKIE['loginusuario'])){
    
$id = filter_input(INPUT_COOKIE, 'idusuario', FILTER_SANITIZE_NUMBER_INT); //sanitizando cookie idusuario
$login = filter_input(INPUT_COOKIE, 'loginusuario', FILTER_SANITIZE_SPECIAL_CHARS); //sanitizando cookie loginusuario
//esses cookies estao sendo criados na "calculadora.php", pois é lá que estarao esses dois dados

// Agora você pode usar $id e $login conforme necessário
} else {
header('Location: redireciona.php'); //joga para um redireciona que está na pasta "pages" esse redireciona joga o usuário para a página de login novamente
}


?>
</head>
<body>
    <header id="cabecalho">
        <a class="menuicon botao-menu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <img class="imgmenu" src="../assets/menu.png" alt="">
        </a><!--Icone menu-->
        <div class="divtitulo">
            <h1 id="titulo" class="principal">
                    RNA mensageiro

            </h1>
        </div><!--Div titulo-->
    </header><!--cabecalho-->
      <!--Offcanva-->
      <div class="offcanvas offcanvas-start" style="background-color: #262626; width: 175px;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">  
        <div class="offcanvas-header">
              <button type="button" class="offcanvasclose" data-bs-dismiss="offcanvas" aria-label="Close"><img src="../assets/close.png" alt=""></button>
            </div><!--OFFCANVAS HEADER-->
            <div class="offcanvas-body" style="color: white;">
            <div id="lista-menu">
                <div class="menu-btn"><a class="menu-buttons" href="../calculadora.php">Home</a></div>
                <div class="menu-btn border-top"> <!-- div btn sequencias -->
                    <?php  //botao que direciona para lista das sequencias
                    try{

                    //tratamento de erro para checar se $id foi enviada com valor
                    if(isset($id)){

                        //anchor mandando para a pagina do lista sequencia com base no ID do usuário logado (neste caso, ele pega o ID obtido pelo cookie)
                        echo "<a class='menu-buttons'href='../listasequencia.php?codigo=" . htmlspecialchars($id) . "'>Sequencias</a>";
                    }else{
                        throw new Exception("Ocorreu um erro inesperado. Contate o ADM!");
                        }
                    }catch(Exception $e){
                        echo $msg = $e->getMessage();
                    }
                ?>
                </div>
                <div class="menu-btn border-top "><a class="menu-buttons" href="redireciona.php">Sair</a></div>
            </div><!--LISTA MENU-->
        </div><!--OFFCANVAS BODY-->
        
    </div><!--OFFCANVAS-->

        <div class="corpo" style="margin-top: 10vh;">
            <div class="corpomobile">
                
                <div class="espaco1">
                    <div class="fotochargaff">
                        <div class="bola-chargaff">  <img src="../assets/faixa-de-dna (1).png" alt="Erwin chargaff" id="prote">
                        
                    </div>
                    </div><!--FOTO CHARGAFF-->
                </div><!--ESPAÇO 1-->
                <div class="chargaff biografiacgf">
                    <div class="quadrado">
                    </div>
                    <div class="titleerwin" style="font-size: 5.5vh;">
                      <h3>O que é o RNA mensageiro?</h3>  
                    </div><!--Title Erwin-->
                    <div class="textcima" >
                        <p>&emsp;&emsp;&emsp;RNA Mensageiro
                            Responsável por levar a informação do DNA até o citoplasma, é uma molécula essencial no processo genético. Vem da sigla “ribonucleic acid” do inglês, significando ácido ribonucleico.
                               </p>
                        </div><!--TEXTO CIMA-->
                        <div class="br"></div>
                        <div class="textbaixo">
                            
                        <div class="br"></div>
                            <p class="my-2">&emsp;&emsp;&emsp;Ele é composto a partir do DNA durante o processo de transcrição e é formado por bases nitrogenadas chamadas adenina, guanina, citosina e uracila.  Diferente do DNA, o RNA apenas consiste de uma fita nitrogenada e contém uracila ao invés da timina e é uma cópia fiel de uma as fitas de DNA que levará a informação para determinar os aminoácidos necessários para formação de uma proteína.</p>
                            <p class="my-2">&emsp;&emsp;&emsp;O RNA mensageiro, ou RNAm, é um tipo de "mensageiro" que leva as informações do DNA para fazer proteínas na célula. Pense nele como um trabalhador que recebe ordens do escritório (DNA) e as leva para a fábrica (ribossomos no citoplasma) para produzir algo importante, que são as proteínas.</p>
                            <p class="my-2">&emsp;&emsp;&emsp;Quando a célula precisa fazer uma proteína específica, o RNAm é feito junto com um trecho específico do DNA. Isso é chamado de transcrição, como se estivéssemos copiando instruções de um livro. Depois, o RNAm é enviado para o citoplasma.</p>
                            <p class="my-2">&emsp;&emsp;&emsp;Lá, os ribossomos, que são como as máquinas na fábrica, "leem" o código do RNAm com a ajuda de moléculas chamadas RNA transportador. Esses ribossomos usam essas instruções para construir uma sequência de aminoácidos, que se unem para formar as proteínas.</p>
                            <div class="fotos">
                                <img src="../assets/ribossomo.png" alt="Imagem DNA hupla hélice">   
                               </div>
                               <div class="descricao-img">
                                <p>Ribossomo realizando a transcrição do RNA mensageiro</p>
                                </div>
                            <p class="my-2">&emsp;&emsp;&emsp;O RNAm é composto por Adenina e Guanina (as bases púricas) e Citosina e Uracila (as bases pirimídicas). É um pouco diferente do DNA, pois não tem Timina, substituída pela Uracila durante a transcrição. Então, o RNAm desempenha um papel fundamental na fabricação das proteínas essenciais para o funcionamento das células.</p>
                           
                        <div class="br"></div>
                </div><!--CHARGAFF-->
            </div><!--CORPO MOBILE-->
        </div><!--CORPO-->
        
</body>
</html>