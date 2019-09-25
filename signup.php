<?php
require "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registrar Stillfrag Store</title>
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
<body>
    <div class="content">
        <div class="content">
            <br><br><br><br><br><br>
            <h2 class="content-head is-center">FAÇA SEU REGISTRO</h2>
            <?php
                if(isset($_GET['error']))
                {
                    if($_GET['error'] == "emptyfields")
                    {
                        echo '<p class="is-center" style="color:red;">Nem todos os campos estão completos</p>';   
                    }
                    else
                    {
                        echo '<p class="is-center" style="color:red;">Algum erro ocorreu!</p>';
                    }
                }
                else if($_GET['signup'] == "success")
                {
                    echo '<p class="is-center" style="color:green;">Você registrou essa conta!</p>';
                }
            ?>
            <form action="includes/signup_inc.php" method="post" class="is-center">
                <input type="text" name="uid" placeholder="Nome de usuario"><br>
                <input type="text" name="mail" placeholder="E-mail"><br>
                <input type="password" name="pwd" placeholder="Senha"><br>
                <input type="password" name="pwd-repeat" placeholder="Repita a senha"><br>
                <button type="submit" name="signup-submit" class="pure-button" style="background-color: #ffffff; color: black;">REGISTRAR</button>
            </form>
        </div>
    </div>
</body>
</html>