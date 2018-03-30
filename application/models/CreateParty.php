<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 18/03/2018
 * Time: 13:44
 */

class CreateParty extends CI_Model {

    public function __construct ($party = 'test'){
        if (empty(get_instance()->db)) {
            get_instance()->db = $this->load->database('db', true);
        }

        $this->db->set('Player', 'J2')
            ->set('Hand', 'ffffffffff')
            ->insert($party);

        $tab = $this->db->select('*')
            ->from($party)
            ->get()
            ->result();

        echo '<pre>';
        print_r($tab);

    }
}