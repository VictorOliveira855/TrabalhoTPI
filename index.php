<?php
include_once './conection.php';
require "header.php";

// Random background on splash-container
$bg = array("images/Panel0.png","images/Panel1.png","images/Panel2.png","images/Panel3.png","images/Panel4.png","images/Panel5.png","images/Panel6.png","images/Panel7.png","images/Panel8.png","images/Panel10.png","images/Panel11.png","images/Panel12.png","images/Panel13.png","images/Panel14.png");
$i = rand(0, count($bg)-1);
$selectedBg = "$bg[$i]";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Stillfrag Store</title>
    <link rel="shortcut icon" href="images/icon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/layouts/marketing.css">
    <style>
        .home-menu
        {
            background-color: black;
        }

        .splash-container
        {
            background-image: url(<?php echo $selectedBg; ?>); 
        }

        .content-subhead
        {   
            color: black;
        }
    </style>
</head>
<body onload="containerColor()">

    <div class="splash-container" id="container">
        <div class="splash">
            <img class="pure-img-central" src="images/Icon_Trans.png" width="320" height="320"/>
            <h1 class="splash-head">STILLFRAG STORE</h1>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="content">
            <?php
                if(isset($_SESSION['userId']))
                {
                    echo '<p class=" is-center"><font size="3">Você está logado senhor(a) '.$_SESSION['userUid'].'!</font></p>';
                }
                else
                {
                    echo '<p class=" is-center"><font size="3">Você está deslogado!</font></p>';
                }
            ?>
            <h2 class="content-head is-center">O que somos?</h2>

            <p class=" is-center"><font size="4">Stillfrag Store é uma loja virtual de jogos sempre buscando jogos com o preço mais barato possivel, criado pela equipe Stillfrag Team Grim.</font></p>

            <div class="pure-g is-center">
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                    <h3 class="content-subhead">
                        <i class="fa fa-rocket"></i>
                        Simulação
                    </h3>
                    <p>
                    Alguns jogos do gênero têm como objetivo simular o mundo real; outros possuem o objetivo de simular um mundo fictício.
                    </p>
                    <a class="pure-menu-link" href="simulation.php">MAIS JOGOS</a>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-th-large"></i>
                        RPG
                    </h3>
                    <p>
                    Um RPG eletrônico é um gêneros de jogo em que o jogador controla as ações de um personagem imerso num mundo definido.
                    </p>
                    <a class="pure-menu-link" href="rpg.php">MAIS JOGOS</a>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-check-square-o"></i>
                        Ação
                    </h3>
                    <p>
                    Um jogo eletrônico de ação é um tipo de jogos eletrônicos que desafia a velocidade, reflexo e raciocinio.
                    </p>    <br>
                    <a class="pure-menu-link" href="action.php">MAIS JOGOS</a>
                </div><div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        Outros
                    </h3>
                    <p>
                        Novos jogos surgirão em breve...
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>