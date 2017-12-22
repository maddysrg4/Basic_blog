<?php

class PostController extends Controller
{
	public function actionInsert($id,$title,$content)
	{
		echo "inserted";
		
		$contact = new PostList();
		$contact->id=$id;
		$contact->title=$title;
		$contact->content=$content;
		$contact->save();


	}
	public function actionView($id)
	{
		$var= PostList::model()->findByPk($id);
		echo CJSON::encode($var);
	}
}