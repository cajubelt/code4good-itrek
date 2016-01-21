<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}

?>

<!doctype html>
<html>
<head>
	<link href="./css/style.css" rel="stylesheet">
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

<script>
	var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
	myFirebaseRef.orderByChild("title").on("child_added", function(snapshot, prevChildKey) {
			var newPost = snapshot.val();
			if (!newPost.approved){ //TODO: add condition to check date!
				var newPostObject = new post(newPost.title, newPost.content, newPost.date, newPost.category, newPost.base64image, newPost.videolink, newPost.approved);
				newPostObject.toHTML();
			}
		}, function (errorObject) { //in case database read fails
	  		alert("The read failed: " + errorObject.code);
		});
</script>

</section>
<br>
<a href="logout.php">Click here</a> to Logout.
</FORM>
</html>



