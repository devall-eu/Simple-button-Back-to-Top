<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Backtotop extends MY_Controller
{
    public function index()
    {
        $data = $this->layout->module(strtolower(get_class()));
        $this->load->view('backtotop', $data);
    }
}