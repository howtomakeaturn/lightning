<?php
class Common extends Public_Controller
{
    function __construct()
    {
        parent::__construct();

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
        $this->template->build('contact', $this->data);
    }
    function menu(){
        $this->template->build('menu');      
    }
}
