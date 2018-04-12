<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: t3i
 * Date: 17/03/2018
 * Time: 18:52
 */

class Distribution extends CI_Controller {

    public function index($players = array('P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7'))
    {
        $this->load->library('Distribution_lib');
        $rep = $this->distribution_lib->index($players);
        affPlayer ($rep->hand, $rep->players, 0);
    }
}