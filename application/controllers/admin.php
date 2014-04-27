<?php
class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->template->set_layout('admin');
        $this->load->library('session');

        $this->router->fetch_class();
                
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
            $user_id = $this->session->userdata('user_id');
            $this->load->model('Admin_model');
            $site = $this->Admin_model->get_site_by_user_id($user_id);
            $this->session->set_userdata('site_id', $site['id']);
            $this->session->set_userdata('site_subdomain', $site['subdomain']);
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
        $site_id = $this->session->userdata('site_id');
        $this->load->database();
        $this->load->model('Article_model');
        $articles = $this->Article_model->as_array()->get_many_by('site_id', $site_id);
        $subdomain= $this->session->userdata('site_subdomain');
        $this->load->helper('url');
        $this->template->build('admin/news', array( 'articles' => $articles, 'subdomain' => $subdomain));
    }
    function add_news(){
        $this->template->build('admin/add_news');
    }
    function post_news(){
        $this->load->helper('url');
        if (!$this->is_post()){
            redirect('/admin/news');
        }
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $this->load->model('Admin_model');        
        $this->Admin_model->create_article(array('title'=>$title, 'content'=>$content));
        redirect('/admin/news');
    }
    function edit_news($id){
        $this->load->model('Article_model');
        $article = $this->Article_model->get($id);
        $this->template->build('admin/edit_news', array('article'=>$article));
    }
    function update_news(){
        $this->load->helper('url');
        if (!$this->is_post()){
            redirect('/admin/news');
        }
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $this->load->model('Article_model');        
        $this->Article_model->update($id, array('title'=>$title, 'content'=>$content, 'modified_at'=>date('c')));
        redirect('/admin/news');
    }
    
    
    function logout(){
        $this->load->library('SimpleLoginSecure');
        $this->load->helper('url');
        
        $this->simpleloginsecure->logout();
        redirect('admin/index');
    }
}
