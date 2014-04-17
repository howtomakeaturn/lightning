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
        $this->template->build('themes/casual/index');
    }
    function about(){
        $this->template->build('themes/casual/about');
    }
    function blog(){
        $this->template->build('themes/casual/blog');
    }
    function contact(){
        $this->template->build('themes/casual/contact');
    }
}
