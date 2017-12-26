<?php

class m171226_100329_comment extends CDbMigration
{
	public function safeup() {
		$this->createTable('Comment', array(
            'id' => 'pk',
            'post_id' => 'integer',
            'author_name' => 'string NOT NULL',
            'content' => 'text',
            'created_at'=>'integer',
            'updated_at'=>'integer',
        ));

	}

	public function safedown() {
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