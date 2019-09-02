<?php
class postComments {
	public static function getComment ()
	{
		//get comment from db
	}
	
		public static function insertComment ($postID , $userId , $comment)
	{
			//insert comments into db
			
			$std = new stdClass();
			$std->postId = $postId;
			$std->userId = $userId;
			$std->commentBody = $comment;
			
			return $std;
	}
	
		public static function updateComment ()
	{
		//update comments into db
	}
	
		public static function deleteComment ()
	{
		//delet comments from db
	}
	
}
class postPosts {
	public static function getPost ()
	{
		//get posts from db
	}
	
		public static function insertPost ($userId , $postTitle , $postTopic, $post)
	{
					
		//insert comments into db
		//if values are not empty ..	
		if (empty($userId) || empty($postTitle) || empty($postTopic) || empty($post)){
			echo "Please fill out the form";
			
		} else {
		//then connect to db and insert the values into the post table	
		include_once 'dbconnect.php';
		$sql = "INSERT INTO tblPosts (userID, postTitle, postTopic, postBody)
		VALUES ('$userId', '$postTitle', '$postTopic', '$post')";
		$insert = mysqli_query($con, $sql);
		}	//if the return value is not empty, 
			if (!$insert){
			echo "empty";

		   } else{
				$std = new stdClass();
				$std->userId = $userId;
				$std->postTitle = $postTitle;
				$std->postTopic = $postTopic;
				$std->postBody = $post;
				
				return $std;
			
		   }
					
							
	}
	
		public static function updatePost ()
	{
		//update post
	}
	
		public static function deletePost ()
	{
		//delet posts
	}
	
}
?>


