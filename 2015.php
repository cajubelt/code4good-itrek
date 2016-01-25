<!doctype html>
<html lang="en" class="no-js">
<head>
	<link rel="shortcut icon" href="http://www.i-trek.org/wp-content/themes/magma/theme-images/favicon.ico" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<script src="js/post_adt.js"></script> <!-- Post ADT -->
  	<script src="https://cdn.firebase.com/js/client/2.3.2/firebase.js"></script> <!-- firebase -->
	<title>i-Trek Updates</title>
</head>

<body>
	<div style="background:#000000">
	<a href="php-login-script/login.php" class="button" style="font-size:80%;background:#e34c00">Personnel Login</a>
	</div>
	<header style="background:#000000;height:18.75em">
		<img src="img/logo.png" style="width:45em;height:18.75em;">
	</header>
		<div class="tab">
			<div class="subtitle">
				<h2>Follow our 2015 Trekkers throughout their research project experience.</h2>
			</div>

			<div class="dropdown">
			  <button class="dropbtn">Previous Years</button>
			  <div class="dropdown-content">
			    <a href="2015.php">2015</a>
			    <a href="2014.php">2014</a>
			  </div>
			</div>
		</div>

		<form id="filters" align="left" style="padding:2em;text-size:200%">
			<div class="filterheading">
				<h1>Filter by category</h1>
			</div> <br>
			<div class="filterchoices"> 
				Fundraising: <input type="checkbox" name="checkboxFundraising" id="checkboxFundraising" onclick="toggleVisibility('fundraising')" checked>
			</div> 
			<div class="filterchoices"> 
				Trek Planning: <input type="checkbox" name="checkboxPlanning" id="checkboxPlanning" onclick="toggleVisibility('planning')" checked>
			</div>
			<div class="filterchoices">
				Trekker Actions: <input type="checkbox" name="checkboxActions" id="checkboxActions" onclick="toggleVisibility('actions')" checked>
			</div>
			
		</form>
	
<section id="cd-timeline" class="cd-container">
		
		<!-- toggleVisibility takes in the name of a class as a string. When called, 
			toggles the disp attribute of all elements with that class. 
			Requires that input exactly matches the name of a class. -->
		<script>;
			function toggleVisibility(category) {
				var cssClass = ".".concat(category);
				var disp = $(cssClass).css("display");
				if (disp == "none") {
					$(cssClass).attr("style","display:block")
				} else {
					$(cssClass).attr("style","display:none")
				}
			}
		</script>
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-dollar">
					<img src="img/dollar.png" alt="Fundraising">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Initiate Kickstarter Fundraising Program</h2>
					<span class="cd-date">December, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!--fundraising -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-gear">
					<img src="img/gear.png" alt="Planning">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Set Initial Trekker Budget & Create Funding Plan</h2>
					<span class="cd-date">December, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!--actions -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-dollar">
					<img src="img/dollar.png" alt="Fundraising">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Begin Trekker Fundraising</h2>
					<span class="cd-date">December, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-gear">
					<img src="img/gear.png" alt="Planning">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Trekker Commitment Deadline</h2>
					<span class="cd-date">December, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!--planning -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-gear">
					<img src="img/gear.png" alt="Planning">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Research and Document Bloggers for Kickstarter Program</h2>
					<span class="cd-date">November, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!--fundraising -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-footprint">
					<img src="img/footprint.png" alt="Action">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Create Video for Kickstarter Program</h2>
					<span class="cd-date">November, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!--fundraising -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-footprint">
					<img src="img/footprint.png" alt="Action">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Submit Trekker Literature Review</h2>
					<span class="cd-date">November, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-footprint">
					<img src="img/footprint.png" alt="Action">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Submit Trekker Abstract</h2>
					<span class="cd-date">November, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-footprint">
					<img src="img/footprint.png" alt="Action">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Review & Provide Feedback on Trekker Submissions</h2>
					<span class="cd-date">November, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-dollar">
					<img src="img/dollar.png" alt="Fundraising">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Discuss and Draft Schedule for Kickstarter Program</h2>
					<span class="cd-date">October, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->
				
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-gear">
					<img src="img/gear.png" alt="Planning">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Trekker Team Assignments</h2>
					<span class="cd-date">October, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-footprint">
					<img src="img/footprint.png" alt="Action">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Initial Trekker Conference Call</h2>
					<span class="cd-date">September, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-footprint">
					<img src="img/footprint.png" alt="Action">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Trekker Orientation (Boston)</h2>
					<span class="cd-date">August, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->
																												
	</section> <!-- cd-timeline -->
          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script> //this puts posts from the database onto the timeline
	
	//var myFirebaseRef = new Firebase("https://torrid-torch-4218.firebaseio.com/-K80XUZiPvdoUy5TXW7X");
	// var myFirebaseRef = new Firebase("https://amber-fire-9380.firebaseio.com/");
	var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
	
	myFirebaseRef.orderByChild("date").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		if (newPost.approved){ //TODO: add condition to check date!
			var newPostObject = new post(snapshot.key(), newPost.title, newPost.content, newPost.date, newPost.category, newPost.base64image, newPost.videolink, newPost.approved);
			newPostObject.toHTML(false);
		}
	}, function (errorObject) { //in case database read fails
  		alert("The read failed: " + errorObject.code);
	});

</script>


</body>
</html>