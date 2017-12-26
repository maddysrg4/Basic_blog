<?php

class m171222_095947_Comment_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('Comment_Create',array(
            'id'=>'pk',
            'Author_Name'=>'string NOT NULL',
            'Comment'=>'string NOT NULL',
            'post_id'=>'integer',
            'created_at'=>'DATE',
			'updated_at'=>'DATE',
        ));
	}

	public function down()
	{
		echo "m171222_095947_Comment_table does not support migration down.\n";
		return false;
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