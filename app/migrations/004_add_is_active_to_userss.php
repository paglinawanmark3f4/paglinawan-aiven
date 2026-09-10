<?php

class Add_is_active_to_userss
{
    private $_lava;

    public function __construct()
    {
        $this->_lava = lava_instance();
        $this->_lava->call->dbforge();
    }

    public function up()
    {
        if (!$this->_lava->dbforge->table_exists('userss')) {
            return;
        }

        if (!$this->_lava->dbforge->column_exists('userss', 'is_active')) {
            $this->_lava->dbforge->add_column('userss', [
                'is_active' => [
                    'type'    => 'TINYINT',
                    'constraint' => 1,
                    'unsigned' => TRUE,
                    'null'    => FALSE,
                    'default' => 1,
                    'after'   => 'password',
                ],
            ]);
        }
    }

    public function down()
    {
        if ($this->_lava->dbforge->table_exists('userss') && $this->_lava->dbforge->column_exists('userss', 'is_active')) {
            $this->_lava->dbforge->drop_column('userss', 'is_active');
        }
    }
}