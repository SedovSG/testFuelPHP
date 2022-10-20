<?php

namespace Fuel\Migrations;

class Create_admin_news
{
	public function up()
	{
		\DBUtil::create_table('admin_news', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'title' => array('constraint' => 255, 'null' => false, 'type' => 'varchar'),
			'content' => array('null' => false, 'type' => 'text'),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int', 'unsigned' => true),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('admin_news');
	}
}