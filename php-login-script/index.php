<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}

?>
<!-- put link to what page it goes to after submit pressed here (action=...)--> 
<!-- <FORM action= "http://cajubelt.scripts.mit.edu/code4good-itrek/redirecting.php" -->
<!--USE THIS TO HOST LOCALLY -->
<!doctype html>
<html>
<head>
	<link href="./css/style.css" rel="stylesheet">
</head>
<FORM action="http://localhost:8888/redirecting.php" 
       enctype="multipart/form-data"
       method="post" style="margin-left:2em">
<P>
<br>
<h2>New Timeline Submission</h2>
<label for="submit-title">Title</label><br> 
<textarea id="submit-title" name="submit-title" cols="40" rows="1" onkeydown="disableSubmitButton()"></textarea>
<span id="title-error" style="color:red">*</span>
<br>
<label for="category">Category</label>
<select id="category" name="category">
  <option value="fundraising">Fundraising</option>
  <option value="planning">Trek Planning</option>
  <option value="actions">Trekker Actions</option>
</select>
<span id="category-error" style="color:red">*</span>
<br> <br>
<label for="date">Date</label>
<input id="date" type="date" name="date" onkeydown="disableSubmitButton()">
<span id="date-error" style="color:red">*</span>
<br> <br>
<label for="submit-content">Content </label><br>
<textarea id="submit-content" name="submit-content" cols="40" rows="5" onkeydown="disableSubmitButton()"></textarea>
<span id="content-error" style="color:red">*</span>
<br>
<br>
<label for="image">Image</label>
<input type="file" name="files"><br> or video (copy and paste youtube link) <br> <textarea id="video" name="video" cols="40" rows="1" ></textarea> <br> <br>

Please save before submitting: <input type="button" id="save-button" value="Save"><br>      
<INPUT id="submit-button" type="submit" value="Send" disabled="disabled"> <INPUT type="reset">
</FORM>
<?php
echo '<script src="submission_page_errors.js"></script>';
?>
<a href="logout.php" style="margin-left:2em">Click here</a> to Logout.
</html>
</html>

