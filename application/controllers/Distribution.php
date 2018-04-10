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
        $this->load->helper('MY_HelP');

        $nbPlayer = count($player);
        $player[$nbPlayer] = 'center';
        $player[$nbPlayer + 1] = 'out';

        for ($i = 0; $i <= $nbPlayer + 1; $i++)
            $hand[$i] = '0000000000000';

        for ($i = 0; $i < 52; $i++)
            $sort[$i] = $i;

        $card = array_rand($sort);

        $color = $card % 4;
        $rank = ($card - $color) / 4;

        $newColor = dechex(hexdec($hand[$nbPlayer + 1][$rank]) + pow(2, $color));
        $hand[$nbPlayer + 1][$rank] = $newColor;

        unset($sort[$card]);

        for ($i = 0; 0 < count($sort); $i++) {
            $card = array_rand($sort);

            $color = $card % 4;
            $rank = ($card - $color) / 4;

            $newColor = dechex(hexdec($hand[$i % $nbPlayer][$rank]) + pow(2, $color));
            $hand[$i % $nbPlayer][$rank] = $newColor;

            unset($sort[$card]);
        }

//        transfert ($hand, 0, $nbPlayer, $color, $nb);

        affAllCards ($hand, $player);
    }
}