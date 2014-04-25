<?php
class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        // Whatever
#        $this->data['stuff'] = $whatever;
        $this->template->set_layout('admin');
        $this->load->library('session');

$this->router->fetch_class();
;
                
        if( (!$this->session->userdata('logged_in'))&&($this->router->fetch_method()!='login') ) {
            $this->load->helper('url');
            redirect('/admin/login');
        }
    }
    function login(){
        $this->load->view('admin/login');
    }
    
    function index(){
        $this->template->build('admin/index');
    }
    function layout(){
        $this->template->build('admin/layout');
    }
    function support(){
        $this->template->build('admin/support');
    }
    function page(){
        $this->template->build('admin/page');
    }
    function product(){
        $this->template->build('admin/product');
    }
    function sort(){
        $this->template->build('admin/sort');
    }
    function news(){
        $this->template->build('admin/news');
    }
}
