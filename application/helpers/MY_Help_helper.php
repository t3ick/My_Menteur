<?php
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 18/03/2018
 * Time: 13:59
 */
function MY_Help_helper(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
// Create connection
    $conn = mysqli_connect($servername, $username, $password);
// Check connection
    if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
}

function affCards ($hand, $players, $j) {
    echo '<br>' . $players[$j];
    for ($i = 0; isset($hand[$j][$i]); $i++) {
        $bin = hexdec($hand[$j][$i]);
        if (1 <= $bin % 2)
            echo('<br>' . ($i + 1) . ' ' . 'pique');
        if (2 <= $bin % 4)
            echo('<br>' . ($i + 1) . ' ' . 'trefle');
        if (4 <= $bin % 8)
            echo('<br>' . ($i + 1) . ' ' . 'carreaux');
        if (8 <= $bin % 16)
            echo('<br>' . ($i + 1) . ' ' . 'coeur');
    }
    echo '<br>';
}

function affAllCards ($hand, $players) {
    for ($j = 0; isset($hand[$j]); $j++) {
        affCards ($hand, $players, $j);
    }
}

function transfert ($hand, $send, $receive, $color, $nb) {
    $hand[$send][$nb] = dechex(hexdec($hand[$send][$nb]) - $color);
    $hand[$receive][$nb] = dechex(hexdec($hand[$receive][$nb])  + $color);
    return $hand;
}

function countCard ($hand, $player) {
    $nb = 0;
    for ($i = 0; isset($hand[$player][$i]); $i++) {
        $card = hexdec($hand[$player][$i]);
        for ($j = 8; 0 < $j; $j = ($j / 2)) {
            if ($j <= $card) {
                $card = $card - $j;
                $nb++;
            }
        }
    }
    return $nb;
}

function affPlayer ($hand, $players, $player_id) {
    echo '<br>Vous avez '.countCard($hand, $player_id).' cartes<br>';
    affCards ($hand, $players, $player_id);
    echo '<br>';
    for ($i = 0; isset($players[$i]) ;$i++)  {
        if ($i != $player_id) {
            echo $players[$i] . ' ';
            echo countCard($hand, $i).'<br>';
        }
    }
}

function out($hand, $nb) {
    if ($hand[$nb] == 'f') {
        $hand[$nb] = '0';
        $hand[count($hand) - 1] = 'f';
        return true;
    }
}