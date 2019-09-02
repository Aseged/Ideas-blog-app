<?php
session_start();
include_once 'dbconnect.php';

try {

		$userID = $_SESSION['userID'];
		$title = $_POST['titlePrompt'];
		$topic = $_POST['topicPrompt'];
		$body = $_POST['postBody'];
		
		   if (empty($userID) || empty($title) || empty($topic) || empty($body)){
			echo "Please fill out the form";
			exit();
		} else {
		$sql = "INSERT INTO tblPosts (userID, postTitle, postTopic, postBody)
		VALUES ('$userID', '$title', '$topic', '$body')";
		$insert = mysql_query($sql, $con);
			if (!$sql){
			echo ("Unable to register");

		   } else{
			header("Location: ../index.php");
			die();
		   }
		}
	}
catch(Exception $e)
    {
    echo "<br>" . $e->getMessage();
    }

mysql_close($con);
?>