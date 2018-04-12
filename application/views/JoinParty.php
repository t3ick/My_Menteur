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
    <input type="text" name="ID_Game" value="Game Id" size="50" ><br>
    <input type="text" name="player" value="Password" size="50" ><br>
    <input type="submit" value="Join Party" >
    </form>

            <?php
               // echo $_POST['player'].' '.$_POST['ID_Game'];
            ?>

</body>
</html>