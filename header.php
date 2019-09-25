<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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
    <div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a href="index.php" class="pure-menu-heading">STILLFRAG STORE</a>
            <ul class="pure-menu-list">
                <?php
                if(isset($_SESSION['userId']))
                {
                    echo '<li class="pure-menu-item">Bem-Vindo '.$_SESSION['userUid'].'!</li>
                    <li class="pure-menu-item pure-menu-selected">
                    <form action="includes/logout_inc.php" method="post">
                        <button type="submit" name="logout-submit" class="pure-button" style="background-color: #050505;">DESLOGAR</button>
                    </form>
                </li>';
                }
                else
                {
                    echo '<li class="pure-menu-item pure-menu-selected">
                    <form action="includes/login_inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Nome de usuario/E-mail...">
                        <input type="password" name="pwd" placeholder="Senha">
                        <button type="submit" name="login-submit" class="pure-button" style="background-color: #050505;">LOGAR</button>
                        <a href="signup.php" class="pure-button" style="background-color: #050505;">REGISTRAR</a>
                    </form>
                </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>