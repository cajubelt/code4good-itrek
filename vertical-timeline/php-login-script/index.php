<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!-- put link to what page it goes to after submit pressed here (action=...)--> 
<FORM action="http://localhost:8888/vertical-timeline/2014.php" 
       enctype="multipart/form-data"
       method="post">
<P>
Title <br> <textarea name="submit-title" cols="40" rows="1"></textarea> <br>
<!-- Title <INPUT type="text" name="submit-title" style="width:100%"><BR> -->
Content <br> <textarea name="submit-content" cols="40" rows="5" ></textarea> <br>
<!-- Content <INPUT type="text" name="submit-content" style="width:100%;height:300px"><BR> -->
Image/Video <INPUT type="file" name="files"><BR> <br>
<INPUT type="submit" value="Send"> <INPUT type="reset">
</FORM>
<?php include "2014.php";?>
<a href="logout.php">Click here</a> to Logout.

<script type='text/javascript'>
	
	//method to produce html element for a post (in progress)
	function toHTML(){
			var node = document.createElement("p");
			with (this){
				var para = document.createTextNode(this.title);
			}
			node.appendChild(para);
			var div1 = document.getElementById('div1');
			div1.appendChild(node);
		}
		
	//object representing a post on the timeline
	function post(title, content, author, year, category){
		this.title = title;
		this.content = content;
		this.author = author;
		this.year = year;
		this.category = category;
		this.toHTML = toHTML;
	}
	//var helloObjectWorld = new post('title','content','author','year','category');
	//helloObjectWorld.toHTML();
	
</script>