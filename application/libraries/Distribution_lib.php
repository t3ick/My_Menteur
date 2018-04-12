<?php
/**
 * Created by PhpStorm.
 * User: TriNgo
 * Date: 12/04/2018
 * Time: 12:53
 */

class Distribution_lib {

    public function index($players) {

        if (!isset($CI)) {
            $CI =& get_instance();
        }

        $CI->load->helper('MY_HelP');

        $nbPlayer = count($players);
        $players[$nbPlayer] = 'center';
        $players[$nbPlayer + 1] = 'out';

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

        $return = (object)array();
        $return->hand = $hand;
        $return->players = $players;

        return $return;
    }
}