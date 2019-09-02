//here, we will handle the comments users insert
 function insertComment (){
		//get the comment body
		var commentText = document.getElementById('commentBodyInput').value;
		//if the length is more than 0, the set the border color back to grey and continue
		if (commentText.length > 0) {
			$('#commentBodyInput').css('border', '1px solid grey');
			//pass the following value to php
			$.post("../phpScript/getComments.php", {insert: "commentInsert", idUser : loggedID, comment : commentText},
				function(data){
				//using the commentNew function, insert the comment on the client side				
				commentNew(jQuery.parseJSON(data));
				console.log(data);
			});
			//empty the form for next use
			$('#commentBodyInput').val("");
			
		}else {
			//if the form is empty, set the border of the for to red
			$('#commentBodyInput').css('border', '1px solid red');
		}
		//build the data into html and insert it into getComments.php
		function commentNew(data){
				var insertCommentAjax = '';
				insertCommentAjax += '<div class="comment">';
				insertCommentAjax += loggedName;
                insertCommentAjax += '<div class="commentBody"><p>'+data.comment+'</p></div>';
                insertCommentAjax += '<div class="commentTime">Posted on 12/11/2012</div>';
                insertCommentAjax +=  '<div class="commentControlPanel">';
                insertCommentAjax +=  '<a href="#">Delete</a>';
				insertCommentAjax +=  ' ';
				insertCommentAjax += '<a href="#">Like</a>';
                insertCommentAjax += '</div>';
				insertCommentAjax += '</div>';
				
				$('#postWrapper').prepend(insertCommentAjax);
		}
 }
 
 
