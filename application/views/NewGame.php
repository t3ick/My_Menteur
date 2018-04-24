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
    <style type="text/css">
        body {margin : 2em;}
    </style>
</head>
<body>
    <a href="/My_Menteur/">Main<a><br>
    Game name<br>
        <input type="text" name="ID_Game" value="" size="50" ><br>
            <select name="NbPlayer" id="select1">
                <optgroup label="nb">
                    <? for ($i = 2; $i <= 7; $i++) : ?>
                        <option value=<? echo $i ?> > <? echo $i ?></option>
                    <? endfor; ?>
                </optgroup>
            </select>

            <div id="players">
                player 1 <input type="text" value="P1" size="50" id="playerName1"><br>
                player 2 <input type="text" value="P2" size="50" id="playerName2"><br>
            </div>
            <input type="submit" value="Create New Game" id="createGame">
</body>

<script type="text/javascript">
    $('select#select1').change(function() {
        var nb = $(':selected')[0].attributes.value.value;
        $('#players').empty();

        for (var i = 1; i <= nb; i++) {
            $('#players').append('player ' + i + ' <input type="text" value="P' + i + '" size="50" id="playerName' + i + '"><br>');
        }

        })
    $('#createGame').click(function() {
        var nb = $(':selected')[0].attributes.value.value;
        for (var i = 1; i <= nb; i++) {
            var player = new Array();
            player[i] = $('#playerName' + i)[0].value;
            console.log(player[i]);
        }
    })
</script>
</html>