<?php
class Common extends Public_Controller
{
    function __construct()
    {
        parent::__construct();

        $url_host = $_SERVER['HTTP_HOST'];
        $url_segments = explode('.', $url_host);
        $subdomain = $url_segments[0];
        $this->load->database();
        
        // I think the codes can be further improved by JOIN statements
        $site = $this->db->from('sites')->where('subdomain', $subdomain)->get()->row();
        $layout = $this->db->from('layouts')->where('site_id', $site->id)->get()->row();
        $theme = $this->db->from('themes')->where('id', $layout->theme_id)->get()->row();
        
        $this->template->set_theme($theme->name);
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
        $this->template->build('contact');
    }
    function menu(){
        $this->template->build('menu');      
    }
}
