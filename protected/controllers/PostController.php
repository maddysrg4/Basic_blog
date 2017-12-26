<?php

class PostController extends Controller
{
	public function actionPostcreate()
	{
		$retstatus = array();
		$post = PostList::create(array(
			"id" => $_GET['id'],
			"title" => $_GET['title'],
			"content" => $_GET['content'],
			
		));
		echo json_encode($retstatus);
	}
	public function actionCommentcreate()
	{
		$post=CommentCreate::create(array(
						
								"Author_Name"=>$_GET['Author_Name'],
								"Comment"=>$_GET['comment'],
								"post_id"=>$_GET['post_id'],
								));
	}
	public function actionView($id)
	{
		$var= PostList::model()->findByPk($id);
		$data=array();
		$data['comments']=array();
		foreach ($var->comments as $k) {
			$ar=array('id'=> $k->id,
					  'Author_Name'=> $k->Author_Name,
					  'Comment'=> $k->Comment,
					  );
			array_push($data['comments'],$ar);
		}
		echo json_encode($data);
		
	}
	
}