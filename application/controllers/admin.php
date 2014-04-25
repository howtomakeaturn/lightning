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
                
        if( (!$this->session->userdata('logged_in'))&&($this->router->fetch_method()!='login')
              &&($this->router->fetch_method()!='verify'))
        {
            $this->load->helper('url');
            redirect('/admin/login');
        }
    }
    function login(){
        if ( $this->session->userdata('logged_in') ){
            $this->load->helper('url');
            redirect('/admin');          
        }
        
        $data = array('message'=>$this->session->flashdata('message'));
      
        $this->load->view('admin/login', $data);
    }
    
    function verify(){
        $this->load->database();
        $this->load->library('SimpleLoginSecure');
        $this->load->helper('url');
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        if ($this->simpleloginsecure->login($email, $password)){
            redirect('admin/index');
        }
        else{
            $this->session->set_flashdata('message',  '尚未註冊或密碼錯誤。' . date(c));
            redirect('admin/login');
        }        
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
    function logout(){
        $this->load->library('SimpleLoginSecure');
        $this->load->helper('url');
        
        $this->simpleloginsecure->logout();
        redirect('admin/index');
    }
}
