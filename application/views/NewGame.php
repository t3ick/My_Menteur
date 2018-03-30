<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>My_Menteur</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style type="text/css">
    </style>
</head>
<body>
    <a href="/My_Menteur/">Main<a>
    <br>
                Game name<br>
                <input type="text" name="ID_Game" value="" size="50" ><br>

            <select name="NbPlayer" id="select1">
                <optgroup label="nb" id="NbPlayer">
                    <? for ($i = 1; $i <= 7; $i++) : ?>
                    <option value=<? echo $i.'>'.$i ?></option>
                        <? endfor; ?>
                </optgroup>
            </select><br>

            <div id="players">
                player 1<br>
                <input type="text" value="" size="50" id="playerName"><br>
                <input type="submit" value="New Game" >
            <div/>
</body>

<script type="text/javascript">
        $('select#select1').change(function() {
            var nb = $(':selected', this)[0].attributes.value
            $('input').remove(playerName);.value;

                for (var i=1; i <= nb; i++) {
                $('#players').append('player ' + i +
                '<br><input type="text" value="" size="50" id="playerName"><br>'
                )}
            $('#players').append('<input type="submit" value="New Game">');
        })
</script>
</html>