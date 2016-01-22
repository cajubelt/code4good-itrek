<?php session_start(); /* Starts the session */
	$note = 'none';
	if(isset($_POST['Submit'])){
		$pass = $_POST['pass'];
		$note = 'block';
	}
?>
<!doctype html>
<html>
<div align="center" style="width:30em;height:7em;background:#e3e3e3;padding:3em;margin-left:27%">
Please enter new Trekker password below, then press submit. <br>
<form action="" method="post" name="Login_Form">
	<br>
	<input name="pass" type="text" class="Input">
	<input name="Submit" type="submit" value="Submit" class="Button3">
</form>
<h5 style="display:<?=$note?>;color:red">Thank you, the Trekker password has been changed.</h5> <br>
<button onClick="window.location.href='admin_ui.php'">Back to admin page</button>
</div>
<br>
<a style="margin-left:27%" href="logout.php">Click here</a> to Logout.
</html>
<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
<script>
var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
myFirebaseRef.child('admin_pass_change').set({ password: '<?php echo $pass ?>'});
</script>