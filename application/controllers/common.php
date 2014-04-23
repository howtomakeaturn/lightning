<?php
class Common extends Public_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    
    function index(){
        $this->template->build('index', $this->data);
    }
    function about(){
        $this->template->build('about', $this->data);
    }
    function blog(){
        $this->template->build('blog', $this->data);
    }
    function contact(){
        $this->template->build('contact', $this->data);
    }
    function menu(){
        $this->template->build('menu', $this->data);      
    }
}
