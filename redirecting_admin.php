<?php

//change this to location of timeline page
//note that this will only work on remotely hosted site OR locally hosted, not both at once. 
//$timeline_address = 'http://cajubelt.scripts.mit.edu/code4good-itrek/';

if(isset($_POST['submit-button']))
{ //this retrieves info submitted by user and puts it into the database
	
//get info sent from login page
$id = $_POST['id'];
$approved = $_POST['app'];
$title = $_POST['submit-title'];
$content = $_POST['submit-content'];
$date = $_POST['date'];
$category = $_POST['category'];
$video_link = $_POST['video'];
$imdata = base64_encode(file_get_contents($_FILES['files']['tmp_name']));
if ($_POST['64code'] != "") {
	$imdata = $_POST['64code'];
}
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
</head>

<br>

<div id="red" style="display:none" align="middle">
<div style="padding:3em;width:35em;text-align:center" >
	<form action="php-login-script/admin_ui.php" method="post" name="form">
<h3 align="top" style="color:black">Thank you for submitting a post to i-Trek's timeline. </h3><br>
<p style="color:black">Click <input name="Submit" type="submit" style="color:grey" value="here"> to return to admin page. <br> <br>
(Please do not hit the refresh button). </p>
	</form>
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
<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
<script>
	console.log('<?php echo $category ?>');
	var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");

    var title = '<?php echo $title; ?>';
    var content = '<?php echo $content; ?>';
    var date = <?php echo json_encode($date); ?>;
    var category = '<?php echo $category; ?>';
    var video_link = '<?php echo $video_link; ?>';
    var imdata = '<?php echo $imdata; ?>';
    var preview = '<?php echo $preview; ?>';
    var id = '<?php echo $id; ?>';
    console.log(id);
	document.getElementById("red").style.display = 'block';
	myFirebaseRef.child(id).set({approved: 'false', base64image: '<?php echo $imdata; ?>', videolink: '<?php echo $video_link; ?>', content: '<?php echo $content ?>', date: <?php echo json_encode($date); ?>, category: '<?php echo $category ?>', title: '<?php echo $title ?>'});

</script>

</html>