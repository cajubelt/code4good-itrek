<link rel="stylesheet" href="php-login-script/css/style.css">
<div align="middle">
<div style="background:#e6e6e6;padding:3em;width:35em;text-align:center" >
<h3 align="top">Thank you for submitting a post to i-Trek's timeline. </h3><br>
<p>Click <a href="2015.php"> here </a> to return to the site. <br> <br>
(Please do not hit the refresh button). </p>
</div>
</div>

<?php

//change this to location of timeline page
//note that this will only work on remotely hosted site OR locally hosted, not both at once. 
//$timeline_address = 'http://cajubelt.scripts.mit.edu/code4good-itrek/';

if(isset($_POST['submit-title']))
{ //this retrieves info submitted by user and puts it into the database
	
//get info sent from login page
$title = $_POST['submit-title'];
$content = $_POST['submit-content'];
$date = $_POST['date'];
$category = $_POST['category'];
$video_link = $_POST['video'];
$imdata = base64_encode(file_get_contents($_FILES['files']['tmp_name']));
$approved = False;

//send info to database using javascript
echo '
	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
	<script>
	var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");';

echo 'var base64image = ' . json_encode($imdata) . ';';	
	
echo 'myFirebaseRef.push({';
	
echo 'title : ' . json_encode($title) . ',';
echo 'content : ' . json_encode($content) . ',';
echo 'base64image : ' . json_encode($imdata) . ',';
echo 'category : ' . json_encode($category) . ',';
echo 'date : ' . json_encode($date) . ',';
echo 'videolink : ' . json_encode($video_link) . ',';
echo 'approved : ' . json_encode($approved) . ',';



echo '});
	</script>';
}

$admin_email = "fierro.samantha@gmail.com";
$email = 'i-Trek';
$subject = 'New i-Trek timeline submission pending approval.';
$comment = 'Please log on to firebase account to approve the new post.';

//send email
mail($admin_email, "$subject", $comment, "From:" . $email);

?>