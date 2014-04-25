<?php
class Intro extends MY_Controller{
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
    function why(){
        $this->template->build('intro/why');
    }
    function register(){
        if ( !$this->is_post() ){
            $this->load->helper('url');
            redirect('/');
        }
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $site_name = $this->input->post('site_name');
        
        $data = array('email'=>$email, 'password'=>$password);

        // fuck, this need to improve
        
        #$this->load->model('Register_model');
        #$this->Register_model->create($data);        
        $this->load->library('SimpleLoginSecure');
        
        // when the fuck do we need to load this shit?
        $this->load->database();
        
        $this->simpleloginsecure->create($data['email'], $data['password'], false);        
        
        echo 'OK!';
    }
    function support(){
        $this->template->build('intro/support');
    }
    
}
