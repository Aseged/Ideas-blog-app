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
   <div id="report">
	<h2> Project Management Report</h2> <br />
	
	<p>In the last technical report, we have discussed that the steep learning curve will somewhat impair our progress. In fact, that has turned out to have more of an impact on our project that first anticipated. The technical report indicated that we were making good progress as most communication between the server side and client side was achieved. At the start of March, we made some more progress and made the like and unlike buttons functional. However, most of these functionalities were made possible with a simple form posting to .php file with the plan to add Ajax, JSON or API. However, it is near the end of the project that we have found out that this is completely the wrong approach.  </p> <br />
	
	<p> This inevitably put unnecessary pressure near the end of the project and takes up valuable time earlier in the project lifecycle. Our nebulous project plan has played part in leading us through a mediocre progress and finally ending up with very little to show.</p> <br />
		
	<p> Having said that, to draw up meticulous project plan would’ve meant to have the technical knowhow that enables us to make reasonable judgement about what comes first, and how long it should take before the next stage of the lifecycle. </p> <br />
			
	<p> Hold-ups were small in numbers and far in between. That is until a couple of weeks before the end of the project, where we have encountered a major setback. As stated above, although a detailed project plan would have prevented this, it is more to do with the technical knowledge we had at the time of planning the project that inevitably lead to this. As a result, although we have achieved almost all functionalities we set out to create, the method used did not allow us to add the technologies we are expected to use. </p> <br />
		<img src="Images/ProjectPlan.png" alt="Gantt Chart" />		
	<p> The lesson here is that planning is everything. However, in order to have detailed plan that is less prone to failure, some technical knowledge of the task to be completed is imperative.  </p> <br />
	
	</div>
	<a href="ProjectManagementReport.docx" target='_blank' title="Download the report"><div class="seeMyWork"><h4>Download Report </h4></div></a>

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