<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>My_Menteur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <style type="text/css">
        body {margin : 2em;}
    </style>
</head>
<body>
    <a href="/My_Menteur/">Main</a>

    <br>
    <form method="post" action="/My_Menteur/index.php/JoinGame/Player">
    <input type="text" name="ID_Game" value="Game Id"><br>
    <input type="text" name="player" value="Password"><br>
    <input type="submit" value="Join Party" >
    </form>

            <?php
               // echo $_POST['player'].' '.$_POST['ID_Game'];
            ?>

</body>
</html>