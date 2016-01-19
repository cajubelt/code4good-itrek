<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!-- put link to what page it goes to after submit pressed here (action=...)--> 
<FORM action="http://localhost:8888/i-trek/redirecting.php"
       enctype="multipart/form-data"
       method="post" style="margin-left:2em">
<P>
<br>
Title <br> <textarea name="submit-title" cols="40" rows="1"></textarea> <br>
Category
<select name="category">
  <option value="fundraising">Fundraising</option>
  <option value="planning">Trek Planning</option>
  <option value="actions">Trekker Actions</option>
</select> <br> <br>
Date <input type="date" name="date"> <br> <br>
Content <br> <textarea name="submit-content" cols="40" rows="5" ></textarea> <br>
<br>Image <input type="file" name="files"><br> or video (copy and paste youtube link) <br> <textarea name="video" cols="40" rows="1" ></textarea> <br> <br>

<INPUT type="submit" value="Send"> <INPUT type="reset">
</FORM>
<?php include "i-trek/index.php";?>
<a href="logout.php" style="margin-left:2em">Click here</a> to Logout.

