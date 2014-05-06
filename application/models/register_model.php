<?php
    /*
     * @author howtomakeaturn
     */
class Register_model extends CI_Model {
    public function __construct(){
        $this->load->database();
        parent::__construct();
    }

    /*
     * @params Array [$email, $pw, $site_name]
     */
    
    function create($data){        
        $user_data = array('email'=>$data['email'], 'password'=>$data['password']);
        $site_data =array(
            'subdomain' => $data['subdomain'],
            'name' => $data['name'],
            'intro' => $data['intro'],
            'contact_phone' => $data['contact_phone'],
            'contact_email' => $data['contact_email'],
            'contact_address' => $data['contact_address'],
        );
        
        $this->load->library('SimpleLoginSecure');
        
        $this->db->trans_start();

        $user_id = $this->simpleloginsecure->create($user_data['email'], $user_data['password'], false);
        $user_id = $this->db->select('user_id')->from('users')->where('user_email', $user_data['email'])->get()->row_array()['user_id'];
        
        $this->db->insert('sites', $site_data);
        $site_id = $this->db->insert_id();
        $this->db->insert('users_sites', 
            array('user_id'=>$user_id, 'site_id'=>$site_id, 'created_at'=>date('c'))
        );
        
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            throw new Exception('errors happened in transaction.');
        }
        
        return $site_id;
    }
}
