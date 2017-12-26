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
	public function actionViewpost()
	{
		$criteria=new CDbCriteria;
		$criteria->select=array('id','title','content');
		$posts=PostList::model()->findAll($criteria);
		$data=array();
		foreach($posts as $p)
		{
			$ar=array('id'=>$p->id,
					  'title'=>$p->title,
					  'content'=>$p->content,
					 );
			array_push($data,$ar);
		}
		echo json_encode($data);
	}
	
}