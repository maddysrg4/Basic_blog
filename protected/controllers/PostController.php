<?php

class PostController extends Controller
{
	public function actionInsert($title = "1st Post",$content = "Testing")
	{
		$contact = new PostList();
		$contact->title=$title;
		$contact->content=$content;
		$contact->save();
		echo CJSON::encode(array('status'=>'SUCCESS'));
	}

	public function actionView($id)
	{
		$var= PostList::model()->findByPk($id);
		echo CJSON::encode($var);
	}
}