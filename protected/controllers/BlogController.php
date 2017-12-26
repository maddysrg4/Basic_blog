<?php

class BlogController extends Controller
{
	public function actionCreatepost(){
		$status;
		$post=Post::create(array(
			//	"id" => $_POST['id'],
				"title" => $_POST['title'],
				"content" => $_POST['content'],
		));
		if($post->hasErrors(NULL))
		{
			$status="Not inserted";
		}
		else
		{
			$status="Data Inserted";
		}
		echo json_encode($status);
	}

	public function actionCreatecomment(){
		$status;
		$post=Comment::create(array(
			//	"id" => $_POST['id'],
				"post_id" => $_POST['post_id'],
				"author_name" => $_POST['author_name'],
				"content" => $_POST['content'],
		));
		if($post->hasErrors(NULL))
		{
			$status="Not inserted";
		}
		else
		{
			$status="Data Inserted";
		}
		echo json_encode($status);
	}
	public function actionIndex(){
		$posts=Post::model()->findAll();
		echo CJSON::encode($posts);
	}
	public function actionView(){
		$var= Post::model()->findByPk($_POST['id']);
		$data=array();
		$data['comments']=array();
		foreach ($var->comments as $k) {
			$ar=array('id'=> $k->id,
					  'author_name'=> $k->author_name,
					  'content'=> $k->content,
					  );
			array_push($data['comments'],$ar);
		}
		echo json_encode($data);
	}
}