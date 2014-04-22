<?php

class Migration_Create_layout extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'site_id' => array(
              'type' => 'MEDIUMINT',
              'constraint' => '8',
              'unsigned' => TRUE,
            ),
            'theme_id' => array(
              'type' => 'MEDIUMINT',
              'constraint' => '8',
              'unsigned' => TRUE,
            ),
            'background_id' => array(
              'type' => 'MEDIUMINT',
              'constraint' => '8',
              'unsigned' => TRUE,
            ),
            'created_at' => array(
              'type' => 'DATETIME'
            ),
            'modified_at' => array(
              'type' => 'DATETIME'
            )          
        ));
        $this->dbforge->create_table('layouts');
    }

    public function down(){
        $this->dbforge->drop_table('layouts');
    }
}
