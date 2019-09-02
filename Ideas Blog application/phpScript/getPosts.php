<?php 
//start session and connect to db
session_start();
include_once 'dbconnect.php';
//check if there is a value and collect the data
if(isset($_POST['insertP']) && $_POST['insertP'] == 'postInsert'){
	$userId = $_SESSION["userID"];
	$postTitle = $_POST['title'];
	$postTopic = $_POST['topic'];
	$post = str_replace("\n" , "<br />" , $_POST['post']);
	//require the insert post class 
	require_once 'classPostComment.php';
	if (class_exists('postPosts')){
		//if exists, pass the post values to it to be inserted into the database
		$returnPost = postPosts::insertPost($userId , $postTitle , $postTopic, $post);
		if ($returnPost == null){
			//check the return value, we will comeback here...
		}	//append the data to a standard calss object
			$std = new stdClass();
			$std->userId = $userId;
			$std->postTitle = $postTitle;
			$std->postTopic = $postTopic;
			$std->post = $post;
			echo json_encode($std);
	}
}
?>
<?php foreach ($post as $getPost => $posts): ?>
<!--for each post inserted here by ajax, iterate and display -->
<div class="postWrapper">
	<!--initial hard coded post -->
    <div class="postTitle">Post One </div>
    <div class="postContainer">
            <div class="postTabs">
                <div class="dateTab">
                    <a href="#"><img src="Images/avatar.png" alt="Comments"/></a>
                </div>
                <div class="commentsTab">
                    <a href="#"><img src="Images/speechBubble.png" alt="Comments" onclick="hide_comment('commentContainer');"/>4</a>
                </div>
            </div>
            <div class="postContent">
				<div id="userName"> <?php echo $_SESSION['loggedUser']; ?></div> <br />
                <div class="postBody"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
                <div class="tagList">
                </div>
                <div class="linkList">
					<div id="likes"></div>
					<a href="#">Endorse</a>
                     <a href="#"><img alt="Like This Post" src="Images/like.png" /></a>
                      <a href="http://twitter.com/login"><img alt="Twitter" src="Images/twitter.png" /></a>
                      <a href="http://www.facebook.com"><img alt="Facebook" src="Images/facebook.png" /></a>
                </div>
            </div>
			</div>

           <div id="commentContainer">
		   <div id="commentPrompt">Leave a comment</div>
					<div id="commentForm">
						<textarea id="commentBodyInput" name="body" rows="10" cols="60"></textarea><br /> <br />
						<input type="submit" id="commentSubmitInput" onclick="insertComment();" name="submit" value="Submit!" />
					
					</div>
				<div id="newComment">
					<!--require all comments for this post from the getComment.php -->
					<?php $comment = array("a"); ?>
					<?php require_once 'phpScript/getComments.php'; ?>	
				</div>
		   </div>		   
			<!--only if it is admin --> 			
			<!--
                <div class="postControlPanel">
                    <a href="#">Delete</a>
                    <a href="#">Edit</a>
                </div> -->		
</div>

<?php
endforeach;
?>    
