<?php
class Admin extends MY_Controller
{
    protected $data = array();
  
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->template->set_layout('admin');
        $this->load->library('session');
        $this->load->helper('url');

        $this->router->fetch_class();
                
        if( (!$this->session->userdata('logged_in'))&&($this->router->fetch_method()!='login')
              &&($this->router->fetch_method()!='verify'))
        {
            redirect('/admin/login');
        }
        else{        
            if ($this->router->fetch_method()=='login'){
                return;
            }
          
            // this service model provides most of the functionality
            $this->load->model('Admin_model');        
            $user_id = $this->session->userdata('user_id');
            $this->load->model('Admin_model');
            $site = $this->Admin_model->get_site_by_user_id($user_id);
            $this->data['site'] = $site;
            
            // insert the message if it's in the flash session data
            $this->data['message'] = $this->session->flashdata('message');
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
        $this->load->helper('url');
        $subdomain = $this->session->userdata('site_subdomain');
        $this->template->build('admin/index', $this->data);
#        $this->template->build('admin/index', array('subdomain'=>$subdomain));
    }
    function update_information(){
        $this->Admin_model->update_information();
        $this->session->set_flashdata('message', '成功更新資料。');
        redirect('/admin/index');
    }
    
    function layout(){
        $site_id = $this->session->userdata('site_id');
        $this->data['banners'] = $this->Admin_model->get_site_banners($site_id);
        $this->template->build('admin/layout', $this->data);
    }
    function support(){
        $this->template->build('admin/support');
    }
    function page(){
        $this->template->build('admin/page');
    }
    function product(){
        $site_id = $this->session->userdata('site_id');
        $this->data['categories'] = $this->Admin_model->get_site_menu_categories($site_id);
        $this->template->build('admin/product', $this->data);
    }
    function sort(){
        $this->template->build('admin/sort');
    }
    function news(){
        $site_id = $this->session->userdata('site_id');
        $this->load->database();
        $this->load->model('Article_model');
        $this->data['articles'] = $this->Article_model->as_array()->get_many_by('site_id', $site_id);
        $this->data['subdomain']= $this->session->userdata('site_subdomain');
        $this->load->helper('url');
        $this->template->build('admin/news', $this->data);
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
        $this->session->set_flashdata('message', '發布了一篇新聞。');
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
        $this->session->set_flashdata('message', '更新了一篇新聞。');
        redirect('/admin/news');
    }
    function delete_news($id){
        $this->load->model('Article_model');
        $article = $this->Article_model->delete($id);
        $this->load->helper('url');
        $this->session->set_flashdata('message', '刪除了一篇新聞。');
        redirect('/admin/news');
    }
    function upload_banner(){
        $this->load->model('Admin_model');
        $this->Admin_model->create_banner();
        $this->load->helper('url');
        $this->session->set_flashdata('message', '上傳了一張照片。');
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
        $this->session->set_flashdata('message', '增加了一種產品類別。');
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
        $this->session->set_flashdata('message', '新增了一筆產品資料。');
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
        $this->session->set_flashdata('message', '更新了一筆產品資料。');
        redirect('/admin/product');
    }    
    function delete_item($id){
        $this->Admin_model->delete_menu_item($id);
        $this->load->helper('url');
        $this->session->set_flashdata('message', '刪除了一筆產品資料。');
        redirect('/admin/product');
    }
    function edit_category($id){
        $this->load->model('Menu_category_model');
        $category = $this->Menu_category_model->get($id);
        $this->template->build('admin/edit_category', array('category'=>$category));
    }
    function update_category(){
        $this->load->helper('url');
        if (!$this->is_post()){
            redirect('/admin/product');
        }
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->load->model('Menu_category_model');        
        $this->Menu_category_model->update($id, array('name'=>$name));
        $this->session->set_flashdata('message', '更新了一筆產品類別資料。');
        redirect('/admin/product');
    }    
    function delete_category($id){
        $this->Admin_model->delete_menu($id);
        $this->load->helper('url');
        $this->session->set_flashdata('message', '刪除了一個產品類別。');
        redirect('/admin/product');
    }

    
    function logout(){
        $this->load->library('SimpleLoginSecure');
        $this->load->helper('url');
        
        $this->simpleloginsecure->logout();
        redirect('admin/index');
    }
}
