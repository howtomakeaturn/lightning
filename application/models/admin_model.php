<?php
    /*
     * This is a service level model.
     * It allows session usage.

     * Still inject the dependency if possible.
     * 
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
    
    public function create_banner(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload()){
          $error = array('error' => $this->upload->display_errors());
          show_error($error['error']);
        }
        
        $upload_data = $this->upload->data();
        $file_data = array(
            'file_name' => $upload_data['file_name'],
            'file_type' => $upload_data['file_type'],
            'file_path' => $upload_data['file_path'],
            'raw_name' => $upload_data['raw_name'],
            'orig_name' => $upload_data['orig_name'],
            'file_ext' => $upload_data['file_ext'],
            'file_size' => $upload_data['file_size'],
            'is_image' => $upload_data['is_image'],
            'image_width' => $upload_data['image_width'],
            'image_height' => $upload_data['image_height'],
        );

        $this->db->insert('files', $file_data);
        
        $file_id = $this->db->insert_id();
        
        $banner_data = array(
            'site_id' => $this->session->userdata('site_id'),
            'file_id'  => $file_id
        );
        $this->db->insert('banners', $banner_data);
        
        return TRUE;        
    }
    function get_site_banners($site_id){
        $query = $this->db->select('f.file_name')
                                            ->from('banners b')
                                            ->join('files f', 'f.id = b.file_id')
                                            ->where('b.site_id', $site_id)
                                            ->get();
        
        return $query->result_array();
    }
    public function create_menu_category($data){
        $data = array(
            'name' => $data['name'],
            'site_id'           => $this->session->userdata('site_id')
        );
        
        $this->db->insert('menu_categories', $data);
        $id = $this->db->insert_id();
        return $id;
    }
    function get_site_menu_categories($site_id){
        $query = $this->db->from('menu_categories')
                                            ->where('site_id', $site_id)
                                            ->get();
        $categories = $query->result_array();
        
        foreach($categories as &$category){
            $category['items'] = 
                $this->db->from('menu_items')
                                  ->where('category_id', $category['id'])
                                  ->get()->result_array();
        }
        
        return $categories;
    }
    public function create_menu_item(){
        $data = array(
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'category_id' => $this->input->post('category_id')
        );
        
        $this->db->insert('menu_items', $data);
        $id = $this->db->insert_id();
        return $id;
    }
}
