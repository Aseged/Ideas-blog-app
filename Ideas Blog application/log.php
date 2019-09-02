<!--create a log in form -->
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
	<h2>Log In</h2><a href="register.php" title="Contact"><div class="seeMyWork"><h4>REGISTER</h4></div></a>
	<div id="logDiv">
	<!--pass login data to php  -->
	
	<form action="phpScript/login.php" method="POST" id="loginForm" onsubmit="return varifyLogInfo();">
    <input type="text" name="name" id="name" placeholder="User Name" maxlength="30"> <br /><br />
    <input type="password" id="pass" name="pass" placeholder="Password" maxlength="30"> <br /> 
	<span  id= "errorLog" class="validate"></span><br />
<button id="submitLog" >Log In</button>
	</form>
    </div>
</section>
</body>
</html>