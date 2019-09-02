<?php
//check if name is provided
try{
if(isset($_POST["checknames"]) && $_POST["checknames"] != ""){
	include_once 'dbconnect.php';
	$name = preg_replace('#[^a-z0-9]#i', '', $_POST["checknames"]);
	//select name from the database
	$sql_check = mysqli_query($con, "SELECT userID FROM tblUser WHERE userName='$name' LIMIT 1");
	$checkedName = mysqli_num_rows($sql_check);
	//if there is no result, the username doesn't exists, make it avaiable
		if ($checkedName < 1){
			echo '<strong> The Name' . ' ' . $name . ' ' . '</strong> is avaiable';
			exit();
		}else {
		//if there is, the user exists
			echo '<strong>' . ' ' . $name . ' ' . '</strong> is NOT AVAIABLE';
			exit();
		}
	}else {
		echo "Unable to process your name";
	}
	}
catch(Exception $e)
    {
    echo "<br>" . $e->getMessage();
    }

?>