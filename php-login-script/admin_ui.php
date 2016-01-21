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
	
</head>

<!-- put link to what page it goes to after submit pressed here (action=...)--> 
<!-- <FORM action= "http://cajubelt.scripts.mit.edu/code4good-itrek/redirecting.php" -->
<!--USE THIS TO HOST LOCALLY -->
<FORM action="http://localhost:8888/redirecting.php" 
       enctype="multipart/form-data"
       method="post" style="padding-left:36%">
<P>
<br>
<h2>Unapproved Timeline Submissions</h2>

<br>
<section id="cd-timeline" class="cd-container">

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
	var unapprovedPostIDs = [];

	myFirebaseRef.orderByChild("title").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		if (!newPost.approved){ //TODO: add condition to check date!
			console.log("found unapproved post");
			var newPostObject = new post(newPost.title, newPost.content, newPost.date, newPost.category, newPost.base64image, newPost.videolink, newPost.approved);
			console.log(newPost.title);

			newPostObject.toHTML();
			//unapprovedPostIDs.push(newPost)
		}
		
		//TODO: add "no new unapproved posts" button
		
		}, function (errorObject) { //in case database read fails
	  		alert("The read failed: " + errorObject.code);
		});




</script>

<br>
<a href="logout.php">Click here</a> to Logout.
</FORM>
</html>


