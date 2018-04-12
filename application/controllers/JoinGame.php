<?php
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 06/03/2018
 * Time: 23:26
 */
class JoinGame extends CI_Controller {

    public function Player()
    {
        $this->load->library('session');
        if (isset($this->session->userdata['username'])) {
            $this->load->view('JoinParty');
        }
        else {
            echo 'notlog';
        }
    }

    public function LogIn() {
        $this->load->library('session');
        $log = array('username'  => 'tri3');
        $this->session->set_userdata($log);
    }

    public function LogOut() {
        $this->load->library('session');
        $this->session->sess_destroy();
    }
}