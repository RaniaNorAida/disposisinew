<?php
defined('BASEPATH') or exit('No direct script allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $data = array(
            'content' => 'admin/dashboard/index.php'
        );
        $this->load->view('admin/template/main', $data);
    }
}
