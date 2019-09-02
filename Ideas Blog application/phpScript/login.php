<?php
//start session and connect to the database
session_start();
include_once'dbconnect.php';

try {
    //get the name and password for check and log in if exists
    $name = $_POST['name'];
    $pass = $_POST['pass'];
	if (empty($name) || empty($pass)){
		echo "Please enter name and password PHP";
		exit();
	} else {
		$sql = "SELECT * FROM tblUser WHERE (userName='$name' AND userPass='$pass')";		
		$exec = mysqli_query($con, $sql);
		$result = mysqli_fetch_row($exec);
			if ($result > 0){
				//if the user exists, create session and get required user data
				$_SESSION['userID'] = $result[0];
				$_SESSION['loggedUser'] = $result[1];
				$_SESSION['userEmail'] = $result[3];
				$_SESSION['userType'] = $result[5];
				$_SESSION['userImage'] = $result[6];
				//redirect to index.php
				header("Location: ../index.php");
			} else {
				// if result is empty the user doesnt exists
				echo "Unable to log you in, try again!";				
			}
		}
    }
catch(Exception $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>