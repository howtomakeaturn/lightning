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
        $this->load->helper('text');
        $this->load->model('Article_model');
        $articles = $this->Article_model->as_array()->get_many_by('site_id', $this->data['site']->id);
        $this->data['articles'] = $articles;
        $this->template->build('blog', $this->data);
    }
    function contact(){
        $this->template->build('contact', $this->data);
    }
    function menu(){
        $this->template->build('menu', $this->data);      
    }
}
