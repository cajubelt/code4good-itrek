<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!-- put link to what page it goes to after submit pressed here (action=...)--> 
<FORM action="http://localhost:8888/vertical-timeline/2014.html" 
       enctype="multipart/form-data"
       method="post">
<P>
Title <INPUT type="text" name="submit-title"><BR>
Content <INPUT type="text" name="submit-content"><BR>
Image/Video <INPUT type="file" name="files"><BR>
<INPUT type="submit" value="Send"> <INPUT type="reset">
</FORM>

<a href="logout.php">Click here</a> to Logout.