<?php session_start();?>
<!--start session here so that we can access user data  -->
<!DOCTYPE HTML>
	<html>		
		<head>
			<title>Idea's</title>
			<meta charset = UTF-8>
			<link href="Style/mainCSS.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="Scripts/jquery-1.11.1.min.js"></script>			
			<script type="text/javascript" src="Scripts/jquery.innerfade.js"></script>
			<script type="text/javascript" src="Scripts/JScript1.js"></script>
			<script type="text/javascript" src="Scripts/insertComment.js"></script>
			<script type="text/javascript" src="Scripts/insertPost.js"></script>
			<script>
			//collect user data through session
				var loggedID = '<?php echo $_SESSION["userID"]; ?>';
				var loggedName = '<?php echo $_SESSION["loggedUser"]; ?>';
				var loggedUserType = '<?php echo $_SESSION["userType"]; ?>';
			</script>
		</head>		
<body>
<aside>		
		<!--main menu -->	
		<a href="log.php"> 
			<div class="sideMenu" id="logout" ><h4>LOG OUT </h4> </div>
		</a>
		<a href="#"> 
			<div class="sideMenu"><P>About </P></div>
		</a>
		<!--new post will toggle a form visibility using JavaScript -->
		<a href="#" onclick="hide_newPost('insertNewPost');"> 
			<div class="sideMenu"><P>New Post </P></div>
		</a>
		<a href="index.php" > 
			<div class="sideMenu"> <P>Timeline </P> </div>
		</a>
		<a href="userManual.php"> 
			<div class="sideMenu"> <P>User Manual </P></div>
		</a>
		<a href="finalReport.php"> 
			<div class="sideMenu"> <P>Final Report </P></div>
		</a>
		<a href="#">
		<div id="Search"></div>
		</a>		<!--search bar will search using google, we have not yet implemented search facility for our website -->
					<form action="http://www.google.com/search">
						<input type="search" name="q" placeholder="Search" >
					</form>
</aside>
<header>
	<a href="log.php" title="Log Out"><div class="seeMyWork"><h4>LOG OUT </h4></div></a>
	<a href="#" title="Contact"><div class="seeMyWork"><h4>CONTACT</h4></div></a>

	<h1>Ideas</h1>
	<div id="loggedinName"> 
	<h1>
	<!--get user name from php session and display it on the home page -->
	<?php
		if (isset($_SESSION['loggedUser'])){
		echo "Hey" . " " . $_SESSION['loggedUser'];
		}else{
		echo "Hey there!";
		}
	?>
	</h1>
	</div>
</header>
<section>
   <div id="report">
	final report
	</div>
	<a href="FinalReport.docx" target='_blank' title="Download the report"><div class="seeMyWork"><h4>Download Report </h4></div></a>

 </section>
<footer>
	<div id="footerWrapper">
		<div class="footerLinks">
			<ul>
				<li><a href="#"  >Complaints </a></li>
				
			</ul>
		</div>
		<div class="footerLinks">
			<ul>
				<li><a href="#"  >Sitemap</a></li>
			</ul> 
		</div>
	
		<div class="footerLinks">
			<ul>
				<li><a href="#"  >What others say </a></li>
			</ul>
		</div>
	
	</div>

	<div id="copyright">
		<p>Copyright &#169; 2016.</p>
	</div>
</footer>				
<a href="#" class="scrollToTop"></a>
</body>
</html>