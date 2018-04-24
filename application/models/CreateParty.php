<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 18/03/2018
 * Time: 13:44
 */

class CreateParty extends CI_Model {

    public function __construct ($party = 'test')
    {
        if (empty(get_instance()->db)) {
            get_instance()->db = $this->load->database('db', true);
        }

        $oGame = (object) array();

        $oGame->name_game = 'third';
        $oGame->nbPlayer = 6;
        $oGame->pass_party = 'test';
        $oGame->deroulement = 'fff';

        $this->db->set('name_game', $oGame->name_game)
            ->set('nbPlayer', $oGame->nbPlayer)
            ->set('pass_party', $oGame->pass_party)
            ->set('deroulement', $oGame->deroulement)
            ->insert('game');

        $tab = $this->db->from('game')
            ->select('*')
            ->get()->result();

        echo '<pre>';
        print_r($tab);
    }
}