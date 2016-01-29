<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		$pass = $_POST['pass'];
		/* Define username and associated password array */
		$admin_logins = array('admin' => 'stem123');
		$trekker_logins = array('trekker' => $pass);
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($admin_logins[$Username]) && $admin_logins[$Username] == $Password){
			/* Success for admin: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$admin_logins[$Username];
			header("location:admin_ui.php");
			exit;
		} else if (isset($trekker_logins[$Username]) && $trekker_logins[$Username] == $Password) {
			/* Success for trekkers: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$trekker_logins[$Username];
			header("location:trekker_ui.php");
			exit;		
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	} else if(isset($_POST['Cancel'])){ //to get back to the homepage
		//TODO: UPDATE THIS TO GO HOME, NOT HARDCODED TO 2015
		header("location:../timeline.html");
		exit;
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Login Script Without Using Database</title>
		<link href="./css/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="http://www.i-trek.org/wp-content/themes/magma/theme-images/favicon.ico" />
	</head>
	<body>
		<div id="Frame0">
		  <h1 align="center">i-Trek </h1>
		  <h3 align="center">Login with admin or trekker credentials to submit a new timeline post.</h3>
		</div>
		<br>
		<form action="" method="post" name="Login_Form">
		  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
		    <?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
		    <?php } ?>
		    <tr>
		      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
		    </tr>
		    <tr>
		      <td align="right" valign="top">Username</td>
		      <td><input name="Username" type="text" class="Input"></td>
		    </tr>
		    <tr>
		      <td align="right">Password</td>
		      <td><input name="Password" type="password" class="Input"></td>
		    </tr>
		    <tr>
		      <td>&nbsp;</td>
		      <td><input name="Submit" type="submit" value="Login" class="Button3"> or <input name="Cancel" type="submit" value="Return home" class="Button3"> <!-- UPDATE THIS TO GO HOME, NOT HARDCODED TO 2015 -->
			</td>
		    </tr>
		    <input name="pass" type="hidden" id="hid">
		  </table>
		</form>
	</body>
</html>
<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
<script>
var myFirebaseRef = new Firebase("https://scorching-inferno-2234.firebaseio.com/");

myFirebaseRef.orderByChild("date").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		if (newPost.password != null){ 
			document.getElementById('hid').value = newPost.password;
		}
	}, function (errorObject) { //in case database read fails
  		alert("The read failed: " + errorObject.code);
	});

</script>