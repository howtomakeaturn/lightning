<?php

class Migration_Modify_article_for_site_id extends CI_Migration {
    public function up(){
        $fields = array(
            'site_id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE
            )
        );
        $this->dbforge->add_column('articles', $fields);
    }
 
    public function down(){
        $this->dbforge->drop_column('articles', 'site_id');
    }
}
