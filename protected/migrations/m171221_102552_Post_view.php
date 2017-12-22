<?php

class m171221_102552_Post_view extends CDbMigration
{
	public function up()
	{
		$this->createTable('Comment',array(
			'Authors name' => 'string NOT NULL',
			'Title' => 'string NOT NULL',
			'Comment' => 'string NOT NULL',
		));
	}

	public function down()
	{
		$this->dropTable('Comment');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}