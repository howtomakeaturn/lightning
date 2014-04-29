<?php
class Common extends Public_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    
    function index(){
        $this->load->model('Admin_model');
        $this->data['banners'] = $this->Admin_model->get_site_banners($this->data['site']->id);

        $this->load->library('typography');
        $intro = $this->typography->auto_typography($this->data['site']->intro);
        $this->data['site_intro'] = $intro;

        $this->load->helper('text');
        $this->load->model('Article_model');
        $this->data['articles'] = $this->Article_model->as_array()->get_many_by('site_id', $this->data['site']->id);
      
        $this->template->build('index', $this->data);
    }
    function about(){
        $this->load->library('typography');
        $intro = $this->typography->auto_typography($this->data['site']->intro);
        $this->data['site_intro'] = $intro;
        $this->template->build('about', $this->data);
    }
    function blog($article_id=null){
        if (empty($article_id)){
            $this->load->helper('text');
            $this->load->model('Article_model');
            $articles = $this->Article_model->as_array()->get_many_by('site_id', $this->data['site']->id);
            $this->data['articles'] = $articles;
            $this->template->build('blog', $this->data);
        }
        else{
            $this->load->library('typography');
            $this->load->model('Article_model');
            $article = $this->Article_model->as_array()->get($article_id);
            $article['content'] = $this->typography->auto_typography($article['content']);
            $this->data['article'] = $article;
            $this->template->build('blog_view', $this->data);
        }
    }
    function contact(){
        $this->template->build('contact', $this->data);
    }
    function menu(){
        $this->load->model('Admin_model');
        $cates = $this->Admin_model->get_site_menu_categories($this->data['site']->id);
        $this->data['cates'] = $cates;
        $this->template->build('menu', $this->data);      
    }
}
