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
       method="post" style="padding-left:36%">
<P>
<br>
<h2>New Timeline Submission</h2>

<br>
<label for="submit-title">Title</label><br>
<textarea id="submit-title" name="submit-title" cols="40" rows="1" onkeydown="disableSubmitButton()"></textarea>
<span id="title-error" style="color:red">*</span>
<br><br>
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
 
<div style="display: inline-block">      
<input id="submit-button" type="submit" name="submit-button" value="Submit" disabled="disabled">
<input syle="padding-right:5em;"type="button" id="save-button" value="  Done  "><br>
</div>
<div style="display: inline-block; padding-left:8em">
<input type="submit" disabled="disabled" name="preview-button" id="preview-button" value="Preview">
</div>

<br>
<p id="submission-message" style="color:red;visibility:hidden">Please press submit to send post to admin for
	<br>  approval or press preview to preview timeline post.</p>



<br>
<a href="logout.php">Click here</a> to Logout.
</FORM>
</html>

<?php
echo '<script src="submission_page_errors.js"></script>';
?>


