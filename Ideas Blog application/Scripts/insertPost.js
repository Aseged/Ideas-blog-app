//accept user post and display it right away 
 function insertPost (){
		//collect the post as well as user data
		var postTitle = document.getElementById('titlePrompt').value;
		var postTopic = document.getElementById('topicPrompt').value;
		var postText = document.getElementById('postBody').value;
		//if the form is filled, accept
		if (postTitle.length > 0 && postTopic.length > 0 && postText.length > 0) {
			$('#postBody').css('border', '1px solid grey');
			$('#topicPrompt').css('border', '1px solid grey');
			$('#titlePrompt').css('border', '1px solid grey');
			//using post, send the data to getPosts.php for process 
			$.post("../phpScript/getPosts.php", {insertP: "postInsert", 
													title: postTitle,
													topic : postTopic,
													post : postText},
				//at the same time, using the postNew function, insert it into the client side
				function(data){
				postNew(jQuery.parseJSON(data));
				console.log(data);
			});
			//empty form values
			$('#postBody').val("");
			$('#topicPrompt').val("");
			$('#titlePrompt').val("");
			
		}else {
			//if form is empty, set the borders to red
			$('#postBody').css('border', '1px solid red');
			$('#topicPrompt').css('border', '1px solid red');
			$('#titlePrompt').css('border', '1px solid red');
		}
		function postNew(data){
				//collect data and build the html	  
				var insertPostAjax = '';
				var passOnclick = 'onclick="hide_comment();"';
				insertPostAjax += '<div class="postTitle">'+data.postTitle+'</div>';
				insertPostAjax += '<div class="postContainer">';
				insertPostAjax += '<div class="postTabs">';
				insertPostAjax += '<div class="dateTab">';
				insertPostAjax += '<a href="#"><img src="Images/avatar.png" alt="Comments"/></a>';
				insertPostAjax += '</div>';
				insertPostAjax += '<div class="commentsTab">';
				insertPostAjax += '<a href="#"><img src="Images/speechBubble.png" alt="Comments" onclick="hide_comment();" />4</a>';
				insertPostAjax += '</div>';
				insertPostAjax += '</div>';
				insertPostAjax += '<div class="postContent">';
				insertPostAjax += '<div id="userName">'+loggedName+'</div> <br />';
                insertPostAjax += '<div class="postBody"><p>'+data.post+'</p></div>';
                insertPostAjax += '<div class="commentTime">Poatsed just now</div><br />';
                insertPostAjax +=  '<div class="tagList"></div>';
                insertPostAjax +=  '<div class="linkList">';
				insertPostAjax +=  '<div id="likes"></div> ';
				insertPostAjax +=  '<a href="#">Endorse</a> ';
				insertPostAjax += '<a href="#"><img alt="Like This Post" src="Images/like.png" /></a>';
				insertPostAjax += '<a href="http://twitter.com/login"><img alt="Twitter" src="Images/twitter.png" /></a>';
				insertPostAjax += '<a href="http://www.facebook.com"><img alt="Facebook" src="Images/facebook.png" /></a>';
                insertPostAjax += '</div>';
				insertPostAjax += '</div>';
				insertPostAjax += '</div>';
				insertPostAjax += '<div id="commentContainer">';
				insertPostAjax += '<div id="commentPrompt">Leave a comment</div>';
				insertPostAjax += '<div id="commentForm">';
				insertPostAjax += '<textarea id="commentBodyInput" name="body" rows="10" cols="60"></textarea><br /> <br />';
				insertPostAjax += '<input type="submit" id="commentSubmitInput" onclick="insertComment();" name="submit" value="Submit!" />';
				insertPostAjax += '</div>';
				insertPostAjax += '<div id="newComment">';
				insertPostAjax += '<?php $comment = array("a" , "b" , "c" , "d"); ?>';
				insertPostAjax += '<?php require_once '+'phpScript/getComments.php'+'; ?>';
				insertPostAjax += '</div>';
				insertPostAjax += '</div>';
		   
				$('.postWrapper').prepend(insertPostAjax);
		}
 }
