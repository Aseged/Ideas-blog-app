//onclick validate form from client side
 function varifyLogInfo() {
	var username = document.getElementById("name").value;
	var userpass = document.getElementById("pass").value;	
	if (username == "" || userpass == ""){
			getSpanName("Please enter username and password", "errorLog", "red");		
			return false;
	} else {
		$("#errorLog").html("<img src='Images/processing.gif' alt='loading...' />");
		setTimeout(function() {
			$.post ($("#loginForm").attr("action")),			
			function (data) {
				document.getElementById("errorLog").html(data);
			}
		}, 1000);
	}
}
		 function getSpanName (message3, errorLocation3, color3) {		 
		 document.getElementById(errorLocation3).innerHTML = message3;
		 document.getElementById(errorLocation3).style.color = color3;
		}
// form checking
	//check if name already exists in the database and give message accordingly	 
	function nameValidation() {
		//get the name value and span id
		var Name = document.getElementById("name").value;
		var postData = "checknames="+Name;
		var nameValue = new RegExp("[a-zA-Z]");
		//if the name entered match the regular expression above
		if (Name.match(nameValue)) {
			//show progress bar while checkingthe db
			$("#errorName").html("<img src='Images/processing.gif' alt='loading...' />");
			setTimeout(function() {
						//using XML request, send the data to checkName.php
						var xmlCheck = new XMLHttpRequest();
						xmlCheck.open("POST", "phpScript/checkName.php", true);
						xmlCheck.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xmlCheck.onreadystatechange = function(){
							//if no problem and the data comeback OK..
							if (xmlCheck.readyState == 4 && xmlCheck.status == 200){
								//display the message recieved using the spad
								document.getElementById("errorName").innerHTML = xmlCheck.responseText;
							}							
						}
						xmlCheck.send(postData);
			     }, 1000);
		}
		else {
			
			getSpanName("Please enter a valid name", "errorName", "black");
			document.getElementById("name").style.backgroundColor = "pink";
			return false;
		}
	}
	 
	 function getSpanName (message, errorLocation, color) {
		 
		 document.getElementById(errorLocation).innerHTML = message;
		 document.getElementById(errorLocation).style.color = color;
	 }
	 	 
	//validating email box
	function emailValidation () {
		var Email = document.getElementById("email").value;
		var emailValue = new RegExp("^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$");
		
		if (Email.match(emailValue)) {
			getSpanEmail("OK", "errorEmail", "green");
			document.getElementById("email").style.backgroundColor = "white";
			return true;
		}
	}
	 
	function getSpanEmail (message1, errorLocation1, color1) {
		 
		 document.getElementById(errorLocation1).innerHTML = message1;
		 document.getElementById(errorLocation1).style.color = color1;
	 }
	 
	 //validating password  	 
	 function passValidation () {
		//get the password
		var pass = document.getElementById("pass").value;
		//make sure the password does not contain any character using regular expression
		var passValue = new RegExp("[a-zA-Z0-9]");
		//if the password is ok, tell the user
		if (pass.match(passValue)) {
			getSpanPass("OK", "errorPass", "green");
			document.getElementById("pass").style.backgroundColor = "white";
			return true;
		}
		else {
			//if not, tell the user
			getSpanPass("Passsword is not valid", "errorPass", "black");
			document.getElementById("pass").style.backgroundColor = "pink";
			return false;
		}
	}
	 
	 function getSpanPass (message2, errorLocation2, color2) {
		 
		 document.getElementById(errorLocation2).innerHTML = message2;
		 document.getElementById(errorLocation2).style.color = color2;
	 }
		
