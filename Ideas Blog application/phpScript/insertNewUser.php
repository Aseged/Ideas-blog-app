<?php
//to insert new users, connect to db..
include_once 'dbconnect.php';
try {
    //collect the data the user insert in the form
    $Name = $_POST['name'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
		//if any of the the data is not missing.. 
    	if (empty($Name) || empty($password) || empty($email)){
		echo "Please fill out the form";
		exit();
	} else { //insert new user into the database
    $sql = "INSERT INTO tblUser (userName, userPass, userEmail)
    VALUES ('$Name', '$password', '$email')";
	$insert = mysqli_query($con, $sql);
		if (!$sql){
		echo ("Unable to register");

	   } else{
		//if successfully inserted, redirect to login page
		header("Location: ../log.php");
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

