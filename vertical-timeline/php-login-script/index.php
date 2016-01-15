<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!-- put link to what page it goes to after submit pressed here (action=...)--> 
<FORM action="http://localhost:8888/vertical-timeline/2014_with_firebase.php" 
       enctype="multipart/form-data"
       method="post" style="margin-left:2em">
<P>
<br>
Title <br> <textarea name="submit-title" cols="40" rows="1"></textarea> <br>
<!-- Title <INPUT type="text" name="submit-title" style="width:100%"><BR> -->
Category
<select name="category">
  <option value="Fundraising">Fundraising</option>
  <option value="Trek Planning">Trek Planning</option>
  <option value="Trekker Actions">Trekker Actions</option>
</select> <br> <br>
Date <input type="date" name="date"> <br> <br>
Content <br> <textarea name="submit-content" cols="40" rows="5" ></textarea> <br>
<!-- Content <INPUT type="text" name="submit-content" style="width:100%;height:300px"><BR> -->
<br>Image <INPUT type="file" name="files"><br> or video (copy and paste youtube link) <br> <textarea name="video" cols="40" rows="1" ></textarea> <br> <br>

<INPUT type="submit" value="Send"> <INPUT type="reset">
</FORM>
<?php include "2014_with_firebase.php";?>
<a href="logout.php" style="margin-left:2em">Click here</a> to Logout.

