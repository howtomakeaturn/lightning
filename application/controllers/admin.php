<?php
class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        // Whatever
#        $this->data['stuff'] = $whatever;
        $this->template->set_layout('admin');
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
}
