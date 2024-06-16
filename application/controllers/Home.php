<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('home');
    }

    public function get_users()
    {
        $data['firstname'] = "Miguel";
        $this->load->view('home',$data);
    }

    public function getUsersById($id = '')
    {
        echo base_url();
    }

    function insert()
    {
        $data['name'] = "Miguel";
        $data['email'] = "Miguel@gmail.com";
        $data['status'] = 1;
        $this->db->insert('users', $data);
        redirect(base_url(), 'refresh');
    }

    function contentdb(){
       $info = $this->db->get_where('users', array('users_id' => 1));
       print_r($info->result_array());
    }
}
