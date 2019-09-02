<!--create a registration form  -->
<!DOCTYPE HTML>
	<html>		
		<head>
			<title>Idea's</title>
			<meta charset = UTF-8>
			<link href="Style/mainCSS.css" rel="stylesheet" type="text/css" />
			<link href="Style/form.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="Scripts/jquery-1.11.1.min.js"></script>	
			<script type="text/javascript" src="Scripts/jquery.innerfade.js"></script>
			<script type="text/javascript" src="Scripts/JScript1.js"></script>
			<script type="text/javascript" src="Scripts/JSRegisterLog.js"></script>
		</head>
<body>
<header>
	<h1>Ideas</h1>	
</header>
<section>
	<h2>Register</h2><a href="log.php" title="Contact"><div class="seeMyWork"><h4>LOG IN</h4></div></a>	
	<div id="regDiv">
	<!-- the form below is validated in real time. once the user choose user name, it will be checked agains the 
			database-->
		<form action="phpScript/insertNewUser.php" method="POST">
				<input id="name" name="name" placeholder="User Name" onblur="nameValidation();" maxlength="30" ><br />
					<span  id= "errorName" class="validate"></span><br />
				<input id="pass" name="pass" placeholder="Password" onkeyup="passValidation();" maxlength="30"><br />
					<span  id= "errorPass" class="validate"></span>	<br />									
				<input id="email" name="email" placeholder="E-mail" onkeyup="emailValidation();" type="email" maxlength="30"><br /> 
					<span  id= "errorEmail" class="validate"></span><br />
			<button id="submit" name="submit" type="submit" onclick="phpScript/insertNewUser.php" value="Submit">Register</button>
		</form>	
    </div>
</section>
</body>
</html>