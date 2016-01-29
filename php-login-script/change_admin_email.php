<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
	$change = false;
	$note = 'none';
	if(isset($_POST['Submit'])){
		$change = true;
		$email = $_POST['email'];
		$note = 'block';
	}
?>
<!doctype html>
<html>
<head> 	<link rel="shortcut icon" href="http://www.i-trek.org/wp-content/themes/magma/theme-images/favicon.ico" /> </head>
<div align="center" style="width:30em;height:7em;background:#f2f2f2;padding:3em;margin-left:27%">
Please enter new Admin email below, then press submit. <br>
<form action="" method="post" name="form">
	<br>
	<input name="email" type="text" class="Input">
	<input name="Submit" type="submit" value="Submit" class="Button3">
</form>
<h5 style="display:<?=$note?>;color:red">Thank you, the Admin email has been changed.</h5> <br>
<button onClick="window.location.href='admin_ui.php'">Back to admin page</button>
</div>
<br>
<a style="margin-left:27%" href="logout.php">Click here</a> to Logout.
</html>
<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
<script>
var myFirebaseRef = new Firebase("https://scorching-inferno-2234.firebaseio.com/");
if ('<?php echo $change ?>') {
	myFirebaseRef.child('admin_email').set({ email: '<?php echo $email ?>'});
}
</script>