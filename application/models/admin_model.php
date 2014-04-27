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
        return $row;      
    }


}
