<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>My_Menteur</title>

    <style type="text/css">
    </style>
</head>
<body>
    <a href="/My_Menteur/">Main</a>
    <br>
    <form method="post" action="/My_Menteur/index.php/JoinGame/Player">
    <input type="text" name="ID_Game" value="log" size="50" ><br>
    <input type="text" name="player" value="pass" size="50" ><br>
    <input type="submit" value="Join Party" >
    </form>

            <form method="post" action="/My_Menteur/index.php/JoinGame/Player"></br>
                Titre
                <input name='title' type="text"></br>
                decription</br>
                <textarea name='description' rows="4" cols="50"></textarea></br>
                article</br>
                <textarea name='article' rows="20" cols="90"></textarea> </br>
                <input type="submit" value="valider">
            </form>

            <?php
               // echo $_POST['player'].' '.$_POST['ID_Game'];
            ?>

</body>
</html>