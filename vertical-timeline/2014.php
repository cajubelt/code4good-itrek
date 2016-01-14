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
  	
	<title>i-Trek Updates</title>
</head>
<body>
	<div style="background:#000000">
	<a href="php-login-script/index.php" class="button" style="font-size:80%;background:#e34c00">Personnel Login</a>

<!-- 	<div style="position:absolute;right:1em;padding-bottom:15px;top:1em;">
		<button class="login" style="color:#FFFFFF;background:#e34c00;border:none;padding:.5em">Personnel Login</button>
	</div> -->
	</div>
	<header style="background:#000000;height:300px">

		<img src="logo.png" style="width:720px;height:300px;">
	
	</header>
		<div class="tab" style="background:#000000">
			<div style="display:inline-block;background:#000000;padding-top:15px;padding-bottom:15px;padding-left:15px;padding-right:15px;margin-right:-4px;height:50px">
				Follow our 2014 Trekkers throughout their research project experience.
			</div>

			<div class="dropdown" style="display:inline-block;position:absolute;right:1em;padding-bottom:15px" align="right">
			  <button class="dropbtn">Previous Years</button>
			  <div class="dropdown-content">
			    <a href="index.html">2015</a>
			    <a href="2014.php">2014</a>
			  </div>
			</div>
		</div>
	
	<section id="2014intro" class="cd-container">
		<h1 style="font-size:40px;padding:1em" align="middle">
			2014 Pilot Trek
		</h1>
		<p id="TrekkersLabel">
			Trekkers:
		</p>
		<p>
			Ato Howard — Quinsigamond Community College <br>
			Christine Richardson — Morgan State University <br>
			Gage Light — Savannah State University <br>
			Ni’Matul-ain Muhammed — Morgan State University
		</p>
		<br>
		<p>
			The 2014 <a href="http://www.i-trek.org/become-a-trekker/" class="orange">Trekkers</a> chose to pursue a research project that attempted to define a 
			coral reef health scale, entitled “The i-Trek Global Coral Health Survey”, that 
			can be used by anyone to evaluate and log the health of coral reefs. While other 
			scales require highly qualified users and equipment, only easily obtainable materials 
			would be needed to evaluate health with this scale. To determine the health of coral 
			using the Global Health Survey, a user would only need to collect water samples to be 
			tested with pH meters and salinity meters and observe the coral and its surroundings. 
			The total costs for materials is less that $20.
		</p>
		<br>
		<p>
			The data collection portion of the i-Trek pilot program took place during the 
			first two weeks of June 2014. This portion of the program was meant to facilitate 
			the bulk of the research project proposed by the undergraduate student participants, 
			or Trekkers, and engage them in career development, community service and networking 
			opportunities. To see what a Trek is about, check out the video below and read the 
			day to day depiction of the Trek.
		</p>	
		<br><br>
		<div id="video" align="middle" style="padding-top:.5em">
			<iframe width="560" height="315"
				src="https://www.youtube.com/embed/7OgQbroOJGw" frameborder="0" allowfullscreen>
			</iframe>
		</div> <!-- video -->	
	</section> <!--2014intro -->
	

	
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
		
		
		<form id="filters">
			Fundraising: <input type="checkbox" name="checkboxFundraising" id="checkboxFundraising" onclick="toggleVisibility('fundraising')" checked>
			Trek Planning: <input type="checkbox" name="checkboxPlanning" id="checkboxPlanning" onclick="toggleVisibility('planning')" checked>
			Trekker Actions: <input type="checkbox" name="checkboxActions" id="checkboxActions" onclick="toggleVisibility('actions')" checked>

		</form>
		
<!--
		<div class = "fundraising">
			<p>
				Testing fundraising filter
			</p>
		</div> 
		
		<div class = "actions">
			<p>
				Testing actions filter
			</p>
		</div> 
		<div class = "planning">
			<p>
				Testing planning filter
			</p>
		</div>-->
 
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Presentation Session</h2>
					<p>
						The last career development session was a judged presentation session. Each 
						<a href="http://www.i-trek.org/become-a-trekker/" class="orange">Trekker</a> prepared 
						a presentation that will be given at a minimum of two high schools. Their presentations were 
						judged by STEM and non-STEM professionals. After being given feedback, the program ended 
						with a Cuban dinner in Miami which was attended by Warren Marcus, a local MIT alumni bio 
						research professional. This final networking opportunity officially ended the Trek.
					</p>
					<p>
						Overall, the program proved to be full of learning opportunities. Each
						<a href="http://www.i-trek.org/become-a-trekker/" class="orange">Trekker</a> was able to 
						gain new skills and improve on others. They left the program understanding how they can take 
						initiative to find and create opportunities that will help them progress toward their research 
						and professional goals.
					</p>
					<span class="cd-date">June 13, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!--test -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Presentation Preparation</h2>
					<p>
						Trekkers were able to spend the day preparing a final research report and presentation that 
						will be given the following day.
					</p>
					<span class="cd-date">June 12, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!--fundraising -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Testing and Aquarius Presentation</h2>
					<p>
						Samples collected the previous day were evaluated at 
						<a href="http://www.marinelab.org/index.html" class="orange">MarineLab</a> in order to affirm their 
						predictions. The evening was another networking activity, a visit to Florida International 
						University to attend a MIT alumni event. This event was a presentation of Aquarius, the 
						only underwater research center in the world currently in operation. Researchers in Aquarius 
						Skyped in to give a tour of the facility and describe life underwater. A recent MIT graduate, 
						who would be living in the facility, also presented on the research she would be conducting. 
						The event culminated with the Trekkers being able to network with professionals and entrepreneurs.
					</p>
					<span class="cd-date">June 11, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Final Testing</h2>
					<p>
						The day was spent doing final tests at two different coral reef locations collecting 
						research samples using some newly designed equipment.  This showed promising results and 
						helped define the questions and procedures that should be presented to users.
					</p>
					<span class="cd-date">June 10, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Professionalism Course Conclusion</h2>
					<p>
						Monday was spent finishing the professionalism course that was started on June 2nd. 
						This part of the course focused on presentation skills, research skills, social media, 
						and time management. The course involved creating effective presentations and other 
						activities such as writing an abstract, preparing an e-calendar and developing career-friendly 
						social media profiles. Some of these skills would prove useful to the Trekkers during their 
						final presentations and when drafting the final research document.
					</p>
					<span class="cd-date">June 9, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Activity Day! (activity)</h2>
					<p>
						After a full week of activities, the Trekkers were allowed a day to explore Miami on their 
						own. Each Trekker did a different activity ranging from zoo visits to go kart racing.
					</p>
					<span class="cd-date">June 8, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="fundraising">
				<div class="cd-timeline-img cd-picture">
					<img src="img/cd-icon-picture.svg" alt="Picture">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Habitat Restoration </h2>
					<p>
						To give back to the local community, the Trekkers participated in a community service 
						activity. Trekkers spent the day restoring the habitat of the endangered Schaus Swallowtail 
						butterfly on Adam’s island which is part of Biscayne National Park.  This activity was 
						organized by Mark Walters, the local Sierra Club Outings Chair of the Miami Group, in 
						conjunction with the National Park Service.  On the way home from this very hot day of 
						physical labor, Mark led them to the famous 
						<a href="https://robertishere.com/" class="orange">Robert is Here Fruit Stand</a> where they had 
						smoothies and milkshakes and he introduced them to fruits they had never even heard of before.  All agreed that the visit to this place was worth the hard work earlier.
					</p>
					<span class="cd-date">June 7, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class = "fundraising">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Collected Samples Evaluated</h2>
					<p>
						Samples collected the previous day were evaluated at 
						<a href="http://www.marinelab.org/index.html" class="orange">MarineLab</a> in Key Largo, Florida and 
						adjustments were made to the equipment and plan. For the evening career development session, 
						each student was instructed to prepare an elevator pitch. Each
						<a href="http://www.i-trek.org/become-a-trekker/" class="orange">Trekker</a> had to deliver their 
						pitch and was feedback was provided by the i-Trek
						<a href="http://www.i-trek.org/become-volunteer/" class="orange">volunteers</a>. 

					</p>
					<span class="cd-date">June 6, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- fundraising -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class = "actions">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Preliminiary Dive</h2>
					<p>
						As another Trekker earned his PADI certification, the <a href="http://www.i-trek.org/become-a-trekker/" class="orange">Trekker's</a> 
						research plan and equipment 
						were tested with a preliminary dive at two different coral locations. The evening involved 
						dinner with Winston Walters, a neurological researcher at the University of Miami School of 
						Medicine who also manages the lab. This event was very insightful because he shared 
						information about his work and on how to pursue a career as a researcher.
					</p>
					<span class="cd-date">June 5, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class = "planning">
				<div class="cd-timeline-img cd-picture">
					<img src="img/cd-icon-picture.svg" alt="Picture">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Data Collection Planning</h2>
					<p>
						Two of the four participants passed the scuba certification course and were awarded PADI 
						certifications. After the <a href="http://www.i-trek.org/become-a-trekker/" class="orange">Trekkers</a> 
						were certified, they started fine tuning their data 
						collection plan and equipment. This included roles for each Trekker, building a plankton 
						net to be use to collect samples on the surface and constructing a rig to hold an underwater 
						camera.
					</p>
					<p>
						The evening event involved a networking event consisting of a Skype call with a MIT graduate 
						student in a field relevant to the research project. The Trekkers were able to ask relevant 
						questions about their research project and graduate school in general.
					</p>
					<span class="cd-date">June 4, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning -->
		</div> <!-- cd-timeline-block -->		
		
		<div class="cd-timeline-block">
			<div class="planning">
				<div class="cd-timeline-img cd-location">
					<img src="img/cd-icon-location.svg" alt="Location">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2>Interview and Calling Skills</h2>
					<p>
						The majority of the day consisted of continued scuba certification training.
						The next career developing session, held in the evening, involved the
						<a href="http://www.i-trek.org/become-a-trekker/" class="orange">Trekkers</a> 
						participating in the first part of a professionalism course. The first part of 
						this course focused on interview skills and conference call etiquette. After receiving 
						a brief explanation of do’s and don’ts for interviews, each Trekker played the role of
						interviewer and interviewee in a round of mock interviews and graded each other on 
						their etiquette, responses and body language. Afterwards, the Trekkers and 1 i-Trek 
						<a href="http://www.i-trek.org/become-volunteer/" class="orange">volunteer</a> 
						went to different parts of the house and participated in a conference call to
						define research roles. Three of the them played the role of a different disruptive 
						person while the leader of the call, who was one of the Trekkers,  had to manage
						each person on the call while having a successful conference call.
					</p>
					<span class="cd-date">June 3, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- planning -->
		</div> <!-- cd-timeline-block -->
		
		
		<div class="cd-timeline-block">
			<div class="actions">
				<div class="cd-timeline-img cd-picture">
					<img src="img/cd-icon-picture.svg" alt="Picture">
				</div> <!-- cd-timeline-img -->
	
				<div class="cd-timeline-content">
					<h2 style="padding-bottom:15px;">Scuba Certification and Career Development</h2>
					<p>
						In order to adequately define the scale and test its effectiveness, 
						the<a href="http://www.i-trek.org/become-a-trekker/" class="orange">Trekkers</a> 
						needed to collect data on several coral reefs. 
						This is easiest done while diving. Therefore, each Trekker participated 
						in scuba certification classes that would take three to four days.
					</p>
					<p>
						In conjunction with data collection and preparation, four volunteers 
						facilitated career development sessions, networking sessions and a 
						community outreach activity. These sessions began with a presentation of Grad 
						Catalyst during the evening of the first scuba certification day. The 
						Grad Catalyst is a presentation produced by MIT’s Office of the Dean of 
						Graduate Education to educate underrepresented students on how to increase 
						their chances of being admitted to top tier graduate programs.
					</p>
					<span class="cd-date">June 2nd, 2014</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- actions -->
		</div> <!-- cd-timeline-block -->
		
	</section> <!-- cd-timeline -->
          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->


<!--php below communicates with index.php (testing post submission) -->

<?php
if(isset($_POST['submit-title']))
{
	//get info sent from login page
	$title = $_POST['submit-title'];
	$content = $_POST['submit-content'];
	$image = $_POST['files'];
	
	echo '<script>';
	echo 'var title = ' . json_encode($title) . ';';
	echo 'var content = ' . json_encode($content) . ';';
	echo 'var image = ' . json_encode($image) . ';';
	
	echo 'var author = "not yet defined"' . ';';
	echo 'var year = "not yet defined"' . ';';
	echo 'var category = "action";';
	
	echo 'var newPost = new post(title, content, author, year, category);';
	echo 'newPost.toHTML();';
	echo '</script>';
}
?>

</body>
</html>