<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!-- put link to what page it goes to after submit pressed here (action=...)--> 
<FORM action="http://server.com/cgi/handle" 
       enctype="multipart/form-data"
       method="post">
<P>
Title <INPUT type="text" name="submit-title"><BR>
Content <INPUT type="text" name="submit-content"><BR>
Image/Video <INPUT type="file" name="files"><BR>
<INPUT type="submit" value="Send"> <INPUT type="reset">
</FORM>

Congratulations! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.