<?php
class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        // Whatever
#        $this->data['stuff'] = $whatever;
    }
    
    function index(){
        $this->template->build('admin/index');
    }
}
