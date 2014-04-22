<?php
class Intro extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->template->set_layout('intro');
    }
    function index(){
        $this->template->build('intro/index');
    }
    function signup(){
        $this->template->build('intro/signup');
    }
}
