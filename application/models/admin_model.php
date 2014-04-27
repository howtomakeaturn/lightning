<?php
    /*
     * @author howtomakeaturn
     */
class Admin_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_site_by_user_id($user_id){
        $row = $this->db->from('users_sites')->where('user_id', $user_id)->get()->row_array();
        $row = $this->db->from('sites')->where('id', $row['site_id'])->get()->row_array();
        return $row;
    }
    public function create_article($data){
        $data = array(
            'title' => $data['title'],
            'content' => $data['content'],
            'created_at' => date('c'),
            'modified_at' => date('c'),
            'site_id'           => $this->session->userdata('site_id')
        );
        $this->load->model('Article_model');
        $id = $this->Article_model->insert($data);
        return $id;
    }


}
