<?php

class Migration_Create_menu extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE,
              'auto_increment' => TRUE
            ),
            'site_id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE,
            ),
            'name' => array(
              'type' => 'VARCHAR',
              'constraint' => '32'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('menu_categories');

        $this->dbforge->add_field(array(
            'id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE,
              'auto_increment' => TRUE
            ),
            'category_id' => array(
              'type' => 'INT',
              'constraint' => '10',
              'unsigned' => TRUE,
            ),
            'name' => array(
              'type' => 'VARCHAR',
              'constraint' => '32'
            ),
            'price' => array(
              'type' => 'VARCHAR',
              'constraint' => '32'
            )
            
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('menu_items');

    }

    public function down(){
        $this->dbforge->drop_table('menu_categories');
        $this->dbforge->drop_table('menu_items');
    }
}
