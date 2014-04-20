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
        $this->template->build('index');
    }
    function about(){
        $this->template->build('about');
    }
    function blog(){
        $this->template->build('blog');
    }
    function contact(){
        $this->template->build('contact');
    }
}
