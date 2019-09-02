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
   <div id="userManual">
	<h2>Final Technical Specification  </h2> <br />
	<p> As the project management report indicates, the technical specification at the start, or even half way into the project is not the same as the product functionality we have now. This means very limited functionality.</p> <br />
	
	<p>The original specification was to design and develop a platform that ideas, whether academic or not, can be discussed. For this to be possible, we have specified that the product should enable users to converse with each other. To make this possible, we aimed to design an application where users can make their ideas available to other by using post and comment systems. We also specified to add functionalities that come with having social networking site such as notification systems, enabling tags and like and also a system that enables users to endorse an idea.  </p> <br />
	
	<p> As our project was going well until the start of March, we also aimed to add a chat system. However, the current state of the application is far from meeting all objectives. The system enables users to register, login, make a post, and comment on a post. 
The reason for the incredibly slow progress is discussed in the Project Management report. Regardless, we aim to learn from the experience and continue progressing towards achieving all functionalities and more. After all, we do believe in the original idea and we are aiming to take this project beyond this course, making it a real life web application that we can be proud of. 
</p> <br />
	
	<p> There are some design decisions that we have made during the development stage. Some are temporary technical decisions that will change as the project progress, and some are influenced by ethical thinking. 
For the time being, we have made a decision put off making friends lists. This would mean that everyone who is registered can see everyone’s posts and comments. This is idea sharing website, therefore we did not see the point of having friend lists like the thousands of social networking sites that exists. 
</p> <br />
	
	<p>We have also decided to take the dislike button out that has been specified originally. The reason behind this decision is that we do not think users should be allowed to dislike what others genuinely though was a good idea. This would discourage users from using our social network. 
In conclusion, the final version of the specification is neither good enough for social networking, nor it is a final specification. We are fully aware that the project progress is hardly good enough, and plan to carry on learning and improving. 
 </p> <br />
	</div>
	<a href="SpecificationReport.docx" target='_blank' title="Download user manual"><div class="seeMyWork"><h4>Download User Manual </h4></div></a>

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