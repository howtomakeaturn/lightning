<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Migrate extends CI_Controller
{
  
    function __construct(){
        parent::__construct();
        /*
        $whitelist = array('127.0.0.1');

        if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
            exit('not allowed');
        }
        */
    }  
  

    public function index(){
        $this->config->set_item('language', 'english');
        $this->load->library('migration');
        $this->migration->current();
        $this->load->config('migration');
        echo 'Migrate to version: ' . $this->config->item('migration_version');
    }
}

/* End of file migrate.php */
/* Location: ./application/controllers/migrate.php */
