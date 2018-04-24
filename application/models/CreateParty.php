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

//        print_r($this->db);die;

        $this->db->set('name_game', 'first game')
            ->set('nbPlayer', 6)
            ->set('pass_party', 'test')
            ->set('deroulement', 'fff')
            ->insert('game');

        $tab = $this->db->from('game')
            ->select('*')
            ->get()->result();

        echo '<pre>';
        print_r($tab);
    }
}