<?php

class m171221_094300_table1 extends CDbMigration
{
	public function safeup()
    {
        $this->createTable('Post_list', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
            'created_at'=>'DATE',
            'updated_at'=>'DATE',
        ));

    }
 
    public function safedown()
    {
        $this->dropTable('Post_list');
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