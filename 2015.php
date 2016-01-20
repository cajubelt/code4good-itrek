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
	<a href="php-login-script/index.php" class="button" style="font-size:80%;background:#e34c00">Personnel Login</a>
	</div>
	<header style="background:#000000;height:300px">
		<img src="img/logo.png" style="width:720px;height:300px;">
	</header>
		<div class="tab" style="background:#000000">
			<div style="display:inline-block;background:#000000;padding-top:15px;padding-bottom:15px;padding-left:15px;padding-right:15px;margin-right:-4px;height:50px">
				Follow our 2015 Trekkers throughout their research project experience.
			</div>

			<div class="dropdown" style="display:inline-block;position:absolute;right:1em;padding-bottom:15px" align="right">
			  <button class="dropbtn">Previous Years</button>
			  <div class="dropdown-content">
			    <a href="2015.php">2015</a>
			    <a href="2014.php">2014</a>
			  </div>
			</div>
		</div>

		<form id="filters" align="left" style="padding:2em;text-size:200%">
			<div style="text-decoration:underline">
				Filter by category
			</div> <br>
			<div style="display:inline-block;padding-right:2em"> 			Fundraising: <input type="checkbox" name="checkboxFundraising" id="checkboxFundraising" onclick="toggleVisibility('fundraising')" checked>
			</div> 
			<div style="display:inline-block;padding-right:2em"> Trek Planning: <input type="checkbox" name="checkboxPlanning" id="checkboxPlanning" onclick="toggleVisibility('planning')" checked>
			
			</div>
			<div style="display:inline-block;padding-right:2em">
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
		
		<!-- CHANGE IMG AND TAGS AND STUFF -->

		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Selection of Research Project</h2>
					<span class="cd-date">August, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Trekker Travel Reimbursement</h2>
					<span class="cd-date">August, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->				
						
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Select Trekker Orientation Theme</h2>
					<span class="cd-date">July, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->		

		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Book Trekker Housing</h2>
					<span class="cd-date">July, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Secure Lab Tours, Presenters and Mentors for Trekker Orientation</h2>
					<span class="cd-date">July, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Finalize Orientation Schedule and Volunteers</h2>
					<span class="cd-date">July, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Submit all Required Forms for Trek Orientation</h2>
					<span class="cd-date">July, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Wine Tasting Fundraisers (multiple)</h2>
					<span class="cd-date">July, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Trekker Data Collection and Documentation (Trip)</h2>
					<span class="cd-date">June, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->	

		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Reimburse Trekkers for Data Collection Trip</h2>
					<span class="cd-date">June, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Fund-a-Student Campaign (Trekker Orientation)</h2>
					<span class="cd-date">June, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Benefit Dinner</h2>
					<span class="cd-date">May, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Establish Trek Orientation Budget</h2>
					<span class="cd-date">May, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Determine Maximum Number of Trekkers for Orientation</h2>
					<span class="cd-date">May, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Notify Trekkers of Orientation Acceptance</h2>
					<span class="cd-date">May, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Document Detailed Trek Research Plan and Agenda</h2>
					<span class="cd-date">May, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Application Period – Trekker Orientation</h2>
					<span class="cd-date">April, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Research Housing Options & Costs for Trek Orientation</h2>
					<span class="cd-date">April, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->		
																													
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Review & Discuss Trekker Applications</h2>
					<span class="cd-date">April, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
										
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Advertise Benefit Dinner</h2>
					<span class="cd-date">April, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->		
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Secure Entertainment & Food for Benefit Dinner</h2>
					<span class="cd-date">April, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Send Benefit Dinner Reminders to Past Participants</h2>
					<span class="cd-date">April, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Re-evaluate Trekker Budget</h2>
					<span class="cd-date">April, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Purchase Travel for (June) Trek</h2>
					<span class="cd-date">March, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->	
				
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Determine Exact Dates for Trek Orientation</h2>
					<span class="cd-date">March, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Create Fact Sheet and Application Paperwork for Trek Orientation</h2>
					<span class="cd-date">March, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Advertise Trek Orientation</h2>
					<span class="cd-date">March, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Communicate with Feeder Schools</h2>
					<span class="cd-date">March, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning --> 
		</div> <!-- cd-timeline-block -->	

		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Review Grant Opportunities (ongoing)</h2>
					<span class="cd-date">February, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->	

		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Dry Run of Trekker Experiments</h2>
					<span class="cd-date">February, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->	

		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Select Trek Research Location</h2>
					<span class="cd-date">February, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions --> 
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Select Venue for Annual Benefit Dinner</h2>
					<span class="cd-date">January, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->										

		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Complete Remaining Actions for Kickstarter Program</h2>
					<span class="cd-date">January, 2015</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising --> 
		</div> <!-- cd-timeline-block -->	
																											
	</section> <!-- cd-timeline -->
          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script> //this puts posts from the database onto the timeline
	
	//var myFirebaseRef = new Firebase("https://torrid-torch-4218.firebaseio.com/-K80XUZiPvdoUy5TXW7X");
	// var myFirebaseRef = new Firebase("https://amber-fire-9380.firebaseio.com/");
	var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
	
	myFirebaseRef.orderByChild("title").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		var newPostObject = new post(newPost.title, newPost.content, newPost.date, newPost.category, newPost.base64image, newPost.videolink, newPost.approved);
		newPostObject.toHTML();
	}, function (errorObject) { //in case database read fails
  		alert("The read failed: " + errorObject.code);
	});

</script>


</body>
</html>