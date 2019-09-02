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
		<a href="projectReport.php"> 
			<div class="sideMenu"> <P>Project Report </P></div>
		</a>
		<a href="technicalReport.php"> 
			<div class="sideMenu"> <P>Technical Report </P></div>
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
<div id="insertNewPost">
	<!--create  a form for new posts-->
   <div id="commentPrompt">New Post</div>
			<div id="commentForm">
				<input type="text" id="titlePrompt" name="name" /> Title (Required) <br /><br />
				<input type="text" id="topicPrompt" name="name" /> Topic (Required) <br /><br />
				<textarea id="postBody" name="postBody" rows="10" cols="60"></textarea><br /> <br />
				<input type="submit" onclick="insertPost();" id="postButton" name="submit" value="Post" />			
			</div>	  
   </div>
	<!--require all post from php -->
    <?php $post = array("a"); ?>
	<?php require_once 'phpScript/getPosts.php'; ?>	
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