<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stillfrag Store Debug</title>
</head>
<body>
    <form action="includes/loadgame_inc.php" method="post" class="is-center">
        <input type="text" name="namegame" placeholder="Nome do Jogo"><br>
        <input type="text" name="descgame" placeholder="Descrição do Jogo"><br>
        <input type="number" name="cat" placeholder="Categoria do Jogo"><br>
        <input type="text" name="dev" placeholder="Devenvolvedora do Jogo"><br>
        <input type="text" name="pub" placeholder="Publisher do Jogo"><br>
        <input type="date" name="launcherGame" placeholder="Dia de Lançamento"><br>
        <input type="number" name="pricegame" placeholder="Preço do Jogo"><br>
        <input type="file" name="smallcovimg" placeholder="Pequeno cover do jogo ">Pequeno Cover do Jogo<br>
        <input type="file" name="covimg" placeholder="Cover do jogo ">Cover do Jogo<br>
        <input type="file" name="iconimg" placeholder="Icone do jogo ">Icone do Jogo<br>
        <button type="submit" name="signup-submit" class="pure-button" style="background-color: #ffffff; color: black;">Carregar</button>
    </form>
</body>
</html>