<?php

//change this to location of timeline page
//note that this will only work on remotely hosted site OR locally hosted, not both at once. 
//$timeline_address = 'http://cajubelt.scripts.mit.edu/code4good-itrek/';

if(isset($_POST['submit-button']))
{ //this retrieves info submitted by user and puts it into the database
	
//get info sent from login page
$title = $_POST['submit-title'];
$content = $_POST['submit-content'];
$date = $_POST['date'];
$category = $_POST['category'];
$video_link = $_POST['video'];
$imdata = base64_encode(file_get_contents($_FILES['files']['tmp_name']));
$approved = False;
$preview = False;

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


$admin_email = "fierro.samantha@gmail.com";
$email = 'i-Trek';
$subject = 'New i-Trek timeline submission pending approval.';
$comment = 'Please log on to firebase account to approve the new post.';

//send email
mail($admin_email, "$subject", $comment, "From:" . $email);

}

if(isset($_POST['preview-button']))
{

	$title = $_POST['submit-title'];
	$content = $_POST['submit-content'];
	$date = $_POST['date'];
	$category = $_POST['category'];
	$video_link = $_POST['video'];
	$imdata = base64_encode(file_get_contents($_FILES['files']['tmp_name']));
	$approved = False;
	$preview = True;

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

<br>

<div id="red" style="display:none" align="middle">
<div style="padding:3em;width:35em;text-align:center" >
<h3 align="top" style="color:black">Thank you for submitting a post to i-Trek's timeline. </h3><br>
<p style="color:black">Click <a style="color:grey" href="2015.php"> here </a> to return to the site. <br> <br>
(Please do not hit the refresh button). </p>
</div>
</div>


<button id="back" style="margin:3em;display:none" onClick="history.go(-1)">Back to submission form</button>
<section style="display:none" id="cd-timeline" class="cd-container">

<!-- do not remove. dummy timeline post needed for toHTML to place new posts onto timeline properly. -->
<div class="cd-timeline-block" style="display:none">
	<div class="fundraising">
		<div class="cd-timeline-content" style="display:none">
			<span class="cd-date" style="display:none">January 1, 0000</span>
		</div> <!-- cd-timeline-content -->
	</div> <!--fundraising -->
</div> <!-- cd-timeline-block -->
</section>

<script type="text/javascript">

    var title = '<?php echo $title; ?>';
    var content = '<?php echo $content; ?>';
    var date = <?php echo json_encode($date); ?>;
    var category = '<?php echo $category; ?>';
    var video_link = '<?php echo $video_link; ?>';
    var imdata = '<?php echo $imdata; ?>';
    var preview = '<?php echo $preview; ?>';
    console.log(preview);
    if (preview) {
    	console.log("here");
    	document.getElementById('cd-timeline').style.display = 'block';
    	document.getElementById('back').style.display = 'block';

    	var newPostObject = new post(title,content,date,category,imdata,video_link,'true');

		newPostObject.toHTML();
    } else {
    	console.log("HUHOHOHO");
    	document.getElementById("red").style.display = 'block';

    }


</script>

</html>