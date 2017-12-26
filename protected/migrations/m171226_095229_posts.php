<?php

class m171226_095229_posts extends CDbMigration
{
	public function safeup() {
		$this->createTable('Post', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
            'created_at'=>'integer',
            'updated_at'=>'integer',
        ));

	}

	public function safedown() {
		$this->dropTable('Post');
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