<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 17/03/2018
 * Time: 18:52
 */

class Distribution extends CI_Controller {

    public function index($player = array('pierre', 'paul', 'jaques'))
    {
        $nbPlayer = count($player);

        for ($i = 0; $i <= $nbPlayer; $i++)
            $hand[$i] = '0000000000000';

        for ($i = 0; $i < 52; $i++)
            $sort[$i] = $i;

        for ($i = 0; $i < 52; $i++) {
            $card = array_rand($sort);

            $color = $card % 4;
            $rank = ($card - $color) / 4;

            $newColor = dechex(hexdec($hand[$i % $nbPlayer][$rank]) + pow(2, $color));
            $hand[$i % $nbPlayer][$rank] = $newColor;

            unset($sort[$card]);
        }
        print_r($hand);
    }





//    for ($j = 0; $j < $nbPlayer; $j++) {
//
//        echo '<br>'.$player[$j];
//
//        for ($i = 0; isset($hand[$j][$i]); $i++) {
//
//            $bin = hexdec($hand[$j][$i]);
//            if (1 <= $bin % 2)
//                echo('<br>' . $i . ' ' . 'pique');
//            if (2 <= $bin % 4)
//                echo('<br>' . $i . ' ' . 'trefle');
//            if (4 <= $bin % 8)
//                echo('<br>' . $i . ' ' . 'carreau');
//            if (8 <= $bin % 16)
//                echo('<br>' . $i . ' ' . 'coeur');
//        }
    //echo '<br>';

}