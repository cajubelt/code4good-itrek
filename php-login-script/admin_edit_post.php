<?php

echo '<script src="submission_page_errors.js"></script>';

if(isset($_POST['edit-post']))
{
	//code does get here	
	$postid = $_POST['hid']; //TODO: this is undefined, coming from post_adt
}

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<link rel="shortcut icon" href="http://www.i-trek.org/wp-content/themes/magma/theme-images/favicon.ico" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
</head>
<FORM action="http://localhost:8888/redirecting_admin.php" 
       enctype="multipart/form-data"
       method="post" style="padding-left:36%">
<P>
<br>
<h2>Edit Timeline Post</h2>

<br>
<label for="submit-title">Title</label><br>
<textarea id="submit-title" name="submit-title" cols="40" rows="1"></textarea>
<span id="title-error" style="color:red">*</span>
<br><br>
<label for="category">Category</label>
<select id="category" name="category">
  <option value="fundraising">Fundraising</option>
  <option value="planning">Trek Planning</option>
  <option value="actions">Trekker Actions</option>
</select>
<span id="category-error" style="color:red">*</span>
<br> <br>
<label for="date">Date</label>
<input id="date" type="date" name="date">
<span id="date-error" style="color:red">*</span>
<br> <br>
<label for="submit-content">Content </label><br>
<textarea id="submit-content" name="submit-content" cols="40" rows="5"></textarea>
<span id="content-error" style="color:red">*</span>
<br>
<br>
<input id="video" name="video" type="hidden"> <br> <br>
 <input type="hidden" name="64code" id="64code">
 <input type="hidden" name="id" id="id">
  <input type="hidden" name="app" id="app">
<div style="display: inline-block">      
<input id="submit-button" type="submit" name="submit-button" value="Approve and Submit">
</div>
<div style="display: inline-block; padding-left:8em">
<!-- <input type="submit" name="preview-button" id="preview-button" value="Preview"> -->
</div>

<br>

<br>
<a href="logout.php">Click here</a> to Logout. <br>
	<br> <br> <p>(Please do not hit the refresh button)</p>
</FORM>

</html>

<script> //this puts posts from the database onto the timeline

	var postid = '<?php echo $postid ?>';
	var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
	document.getElementById('id').value = postid;
	myFirebaseRef.orderByChild("date").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		if (snapshot.key() == postid){ //TODO: add condition to check date!
			document.getElementById('app').value = newPost.approved;
			document.getElementById('submit-content').value = newPost.content;
			document.getElementById('submit-title').value = newPost.title;
			if(newPost.category == 'fundraising') {
				document.getElementById('category').selectedIndex = 0;
			} else if (newPost.category == 'planning') {
				document.getElementById('category').selectedIndex = 1;
			} else {
				document.getElementById('category').selectedIndex = 2;
			}
			document.getElementById('date').value = newPost.date;
			//var video = document.getElementById('64code').value;
			//if (video != null){
				//newPost.base64image = video;
			//}
			document.getElementById('64code').value = newPost.base64image;
			document.getElementById('video').value = newPost.videolink;
		}
	}, function (errorObject) { //in case database read fails
  		alert("The read failed: " + errorObject.code);
	});

</script>