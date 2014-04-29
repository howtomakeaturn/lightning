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
        
        // this service model provides most of the functionality
        $this->load->model('Admin_model');        
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
        $site_id = $this->session->userdata('site_id');
        $banners = $this->Admin_model->get_site_banners($site_id);
        $this->template->build('admin/layout', array('banners' => $banners));
    }
    function support(){
        $this->template->build('admin/support');
    }
    function page(){
        $this->template->build('admin/page');
    }
    function product(){
        $site_id = $this->session->userdata('site_id');
        $categories = $this->Admin_model->get_site_menu_categories($site_id);
        $this->template->build('admin/product', array( 'categories' => $categories ));
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
    function delete_news($id){
        $this->load->model('Article_model');
        $article = $this->Article_model->delete($id);
        $this->load->helper('url');
        redirect('/admin/news');
    }
    function upload_banner(){
        $this->load->model('Admin_model');
        $this->Admin_model->create_banner();
        $this->load->helper('url');
        redirect('/admin/layout');        
    }
    function add_category(){
        $this->template->build('admin/add_category');
    }
    function post_category(){
        $this->load->helper('url');
        if (!$this->is_post()){
            redirect('/admin/product');
        }
        $name = $this->input->post('name');
        $this->Admin_model->create_menu_category(array('name'=>$name));
        redirect('/admin/product');
    }

    function add_item($id){
        $this->template->build('admin/add_item', array('category_id'=>$id));
    }
    function post_item(){
        $this->load->helper('url');
        if (!$this->is_post()){
            redirect('/admin/product');
        }
        $this->Admin_model->create_menu_item();
        redirect('/admin/product');
    }
    function edit_item($id){
        $this->load->model('Menu_item_model');
        $item = $this->Menu_item_model->get($id);
        $this->template->build('admin/edit_item', array('item'=>$item));
    }
    function update_item(){
        $this->load->helper('url');
        if (!$this->is_post()){
            redirect('/admin/product');
        }
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $this->load->model('Menu_item_model');        
        $this->Menu_item_model->update($id, array('name'=>$name, 'price'=>$price));
        redirect('/admin/product');
    }    
    function delete_item($id){
        $this->Admin_model->delete_menu_item($id);
        $this->load->helper('url');
        redirect('/admin/product');
    }
    
    function logout(){
        $this->load->library('SimpleLoginSecure');
        $this->load->helper('url');
        
        $this->simpleloginsecure->logout();
        redirect('admin/index');
    }
}
