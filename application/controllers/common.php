<?php
class Common extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
        // Whatever
#        $this->data['stuff'] = $whatever;
    }
    
    function index(){
        $this->template->build('common/index');
    }
}
