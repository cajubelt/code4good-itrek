Thank you for submitting a post to i-Trek's timeline. <br>
Click <a href="index.php"> here </a> to return to the site. <br>
(Please do not hit the refresh button).
<?php

//change this to location of timeline page
//note that this will only work on remotely hosted site OR locally hosted, not both at once. 
//$timeline_address = 'http://cajubelt.scripts.mit.edu/code4good-itrek/';

function nextPage() {
    header('Location: index.php');
}
if(isset($_POST['submit-title']))
{ //this retrieves info submitted by user and puts it into the database
	
//get info sent from login page
$title = $_POST['submit-title'];
$content = $_POST['submit-content'];
$date = $_POST['date'];
$category = $_POST['category'];
$video_link = $_POST['video'];
$imdata = base64_encode(file_get_contents($_FILES['files']['tmp_name']));

//send info to database using javascript
echo '
	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
	<script>
	var myFirebaseRef = new Firebase("https://torrid-torch-4218.firebaseio.com/");'
	//var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");';

echo 'var base64image = ' . json_encode($imdata) . ';';	
	
echo 'myFirebaseRef.push({';
	
echo 'title : ' . json_encode($title) . ',';
echo 'content : ' . json_encode($content) . ',';
echo 'base64image : ' . json_encode($imdata) . ',';
echo 'category : ' . json_encode($category) . ',';
echo 'date : ' . json_encode($date) . ',';

echo '});
	</script>';
}
nextPage();
?>