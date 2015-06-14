<?php

namespace Fuel\Migrations;

class Create_businessforms
{

    public function up()
    {
        \DBUtil::create_table('businessforms', array(
            'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
            'name' => array('constraint' => 10, 'type' => 'varchar'),
            'kbn' => array('constraint' => 2, 'type' => 'varchar')
                ), array('id'), false, 'InnoDB', 'utf8_general_ci');
    }

    public function down()
    {
        \DBUtil::drop_table('businessforms');
    }

}
