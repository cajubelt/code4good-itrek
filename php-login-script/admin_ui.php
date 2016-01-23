<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}

?>

<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="http://www.i-trek.org/wp-content/themes/magma/theme-images/favicon.ico" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->
	<script src="../js/modernizr.js"></script> <!-- Modernizr -->
  	<script src="../js/post_adt.js"></script> <!-- Post ADT -->
	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	
</head>
<button style="float: right;margin:1em" onClick="window.location.href='change_password.php';">Change Trekker Password</button>
<button style="float: right;margin:1em" onClick="window.location.href='change_admin_email.php';">Change Admin Email</button>
<!-- put link to what page it goes to after submit pressed here (action=...)--> 
<!-- <FORM action= "http://cajubelt.scripts.mit.edu/code4good-itrek/redirecting.php" -->
<!--USE THIS TO HOST LOCALLY -->
<FORM action="http://localhost:8888/redirecting.php" 
       enctype="multipart/form-data"
       method="post" style="margin:1em">
<P>
<br>
<h2>Timeline Submissions</h2>
<br>


<form id="filters" align="left" style="padding:2em;text-size:200%">
	<div class="filterheading">
		<h1>Show posts which are:</h1>
	</div> <br>
	<div class="filterchoices"> 
		Approved: <input type="checkbox" name="checkboxApproved" id="checkboxApproved" onclick="toggleVisibility('approved')" checked>
	</div> 
	<div class="filterchoices"> 
		Unapproved: <input type="checkbox" name="checkboxUnapproved" id="checkboxUnapproved" onclick="toggleVisibility('unapproved')" checked>
	</div>

</form>


<section id="cd-timeline" class="cd-container">
	
<script>
	function toggleVisibility(approval) {
		var cssClass = ".".concat(approval);
		var disp = $(cssClass).css("display");
		if (disp == "none") {
			$(cssClass).attr("style","display:block")
		} else {
			$(cssClass).attr("style","display:none")
		}
	}
</script>

<!-- do not remove. dummy timeline post needed for toHTML to place new posts onto timeline properly. -->
<div class="cd-timeline-block" style="display:none">
	<div class="fundraising">
		<div class="cd-timeline-content" style="display:none">
			<span class="cd-date" style="display:none">January 1, 0000</span>
		</div> <!-- cd-timeline-content -->
	</div> <!--fundraising -->
</div> <!-- cd-timeline-block -->


</section>

<script>
	var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
	//var unapprovedPostIDs = [];

	
	myFirebaseRef.orderByChild("date").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		var ID = snapshot.key();
		console.log(ID);
		var timelinePostRef = myFirebaseRef.child(ID);
		console.log(newPost.approved);
		
		var newPostObject = new post(ID, newPost.title, newPost.content, newPost.date, newPost.category, newPost.base64image, newPost.videolink, newPost.approved);
		newPostObject.toHTML(true);		
		
		//TODO: add "no new unapproved posts" message
		
		}, function (errorObject) { //in case database read fails
	  		alert("The read failed: " + errorObject.code);
		});

</script>

<br>
<a href="logout.php">Click here</a> to Logout.
</FORM>
</html>



