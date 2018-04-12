<?php
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 06/03/2018
 * Time: 23:26
 */
class JoinGame extends CI_Controller {

    public function __construct() {
        $this->load->library('session');
    }

    public function Player()
    {
        if (!isset($this->session->userdata['username'])) {
            $this->load->view('JoinParty');
        }
        else {
            echo 'urIn';
        }
    }

    public function LogIn() {
        $log = array('username'  => 'tri3');
        $this->session->set_userdata($log);
    }

    public function LogOut() {
        $this->session->sess_destroy();
    }
}