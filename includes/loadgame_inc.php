<?php
if(isset($_POST['signup-submit']))
{
    require 'dbh_inc1.php';

    $name = $_POST['namegame'];
    $desc    = $_POST['descgame'];
    $category = $_POST['cat'];
    $devolver = $_POST['dev'];
    $publisher = $_POST['pub'];
    $launchDay = $_POST['launcherGame'];
    $price = $_POST['pricegame'];
    $smallCoverImage = $_POST['smallcovimg'];
    $coverImage = $_POST['covimg'];
    $iconImage = $_POST['iconimg'];

    $sql = "SELECT nameGames FROM game WHERE nameGames=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../debug.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0)
        {
            header("Location: ../signup.php?error=gametaked");
            exit();
        }
        else
        {
            $sql = "INSERT INTO game (nameGames, descGames, catGames,  devolverGames, publisherGames, launcherGames, priceGames, smallCoverGames,  coverGame,    iconGame) 
                              values ($name,   $desc,    $category, $devolver,   $publisher,    $launchDay,   $price,    $smallCoverImage, $coverImage, $iconImage)";
            
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_execute($stmt);
            header("Location: ../debug.php?signup=success");
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    header("Location: ../debug.php");
    exit();
}