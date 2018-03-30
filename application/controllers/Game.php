<?php
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 07/03/2018
 * Time: 00:00
 */
class Game extends CI_Controller {

    public function play()
    {
        $ID = $_POST['ID_Game'];
        $player = $_POST['player'];
        if ($ID == 'ok' && $player == 'ok')
            $this->load->view('Game');
        else
            $this->load->view('JoinParty');
    }
}