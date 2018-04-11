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

function affCards ($hand, $player, $j) {
    echo '<br>' . $player[$j];
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

function affAllCards ($hand, $player) {
    for ($j = 0; isset($hand[$j]); $j++) {
        affCards ($hand, $player, $j);
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
}