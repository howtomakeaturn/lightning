<?php

class Migration_Create_file extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE,
              'auto_increment' => TRUE
            ),
            'file_name' => array(
              'type' => 'VARCHAR',
              'constraint' => '64',
            ),
            'file_type' => array(
              'type' => 'VARCHAR',
              'constraint' => '16',
            ),
            'file_path' => array(
              'type' => 'VARCHAR',
              'constraint' => '64',
            ),
            'raw_name' => array(
              'type' => 'VARCHAR',
              'constraint' => '64',
            ),
            'orig_name' => array(
              'type' => 'VARCHAR',
              'constraint' => '64',
            ),
            'file_ext' => array(
              'type' => 'VARCHAR',
              'constraint' => '8',
            ),
            'file_size' => array(
              'type' => 'VARCHAR',
              'constraint' => '16',
            ),
            'is_image' => array(
              'type' => 'BOOLEAN'
            ),
            'image_width' => array(
              'type' => 'INT',
              'constraint' => '8',
              'unsigned' => TRUE,
            ),
            'image_height' => array(
              'type' => 'INT',
              'constraint' => '8',
              'unsigned' => TRUE,
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('files');
    }

    public function down(){
        $this->dbforge->drop_table('files');
    }
}
