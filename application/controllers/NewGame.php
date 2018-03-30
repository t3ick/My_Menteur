<?php
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 06/03/2018
 * Time: 21:43
 */
class NewGame extends CI_Controller {

    public function NbPlayer()
    {
        $this->load->view('NewGame');
    }

    public function NewParty() {
        $this->load->model('CreateParty');
    }
}