<?php session_start(); /* Starts the session */	
	if(isset($_POST['Submit'])){
		$pass = $_POST['pass'];
	}
?>
<!doctype html>
<html>
<form action="" method="post" name="Login_Form">
	<input name="pass" type="text" class="Input">
	<input name="Submit" type="submit" value="Submit" class="Button3">
</form>
</html>
<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
<script>

var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
myFirebaseRef.child('admin_pass_change').set({ password: '<?php echo $pass ?>'});

</script>