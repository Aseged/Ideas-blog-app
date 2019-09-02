<?php 
//start session and connect to database
session_start();
include_once'dbconnect.php';
//if there is a value in the insert comment, continue..
if(isset($_POST['insert']) && $_POST['insert'] == 'commentInsert'){
	//give the comment a temporary ID, and collect data to be entered into the database
	$postId = 4;
	$userId = $_POST['idUser'];
	$comment = str_replace("\n" , "<br />" , $_POST['comment']);
	//create a standard class object
	$std = new stdClass();
	$std->postId = $postId;
	$std->userId = $userId;
	$std->comment = $comment;
	//require the comment class and check if the insert class exists
	require_once 'classPostComment.php';
	if (class_exists('postComments')){
		//is so, pass the parameters
		$return = postComments::insertComment($postID , $userId , $comment);
		if ($return != null){
			//depending on the return data, we will continue..
		}
	}
	echo json_encode($std);
}
 ?>
 
<?php foreach ($comment as $getComment => $comments): ?>
<!--for every comment inserted, we will iterate and display using ajax -->
    <div id="postWrapper">
    <div class="comment">
				<!--hard coded comment just for now until we get retun data from the database -->
				<?php echo $_SESSION['loggedUser']; ?>
                    <div class="commentBody"><p>andard dummy text ever since the 1500s</p></div>
                    <div class="commentTime">Posted on 12/11/2012</div>
                        <div class="commentControlPanel">
                            <a href="#">Delete</a>
							<a href="#">Like</a>
							<a href="#">Endorse</a>
                        </div>
						<!-- allow delete on all only if admin is logged in
					
                        <div class="commentControlPanel">
                            <a href="#">Delete</a>
                        </div> -->			
			</div>
		</div>				              
<?php
endforeach;
?>