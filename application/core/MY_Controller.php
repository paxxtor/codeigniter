<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "Hola desde core";
    }

    public function getname()
    {
        echo "Miguel Paxtor";
    }
}