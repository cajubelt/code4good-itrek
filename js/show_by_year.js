function show_timeline(YEAR_RANGE){
	/*clear existing posts from timeline */
	var timeline = document.getElementById("cd-timeline");
	while (timeline.firstChild) {
    	if (timeline.firstChild.class = "cd-timeline-block"){
    		timeline.removeChild(timeline.firstChild);
    	}
	}
	
	/*add posts from YEAR_RANGE to the timeline */
	var startDate = new Date('08-01-' + YEAR_RANGE[0]);
	var endDate = new Date('08-01-' + YEAR_RANGE[1]);
	
	var myFirebaseRef = new Firebase("https://scorching-inferno-2234.firebaseio.com/");
	
	myFirebaseRef.orderByChild("date").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		if (newPost.approved){ 
			//add element if post is between Aug 1, (startYear) and Aug 1, (endYear)
			var postDate = new Date(newPost.date);
			var inTimeRange = startDate <= postDate && postDate < endDate;
			
			if (inTimeRange){
				var newPostObject = new post(snapshot.key(), newPost.title, newPost.content, newPost.date, newPost.category, newPost.base64image, newPost.videolink, newPost.approved);
				newPostObject.toHTML(false);
			}
		}
	}, function (errorObject) { //in case database read fails
  		alert("The read failed: " + errorObject.code);
	});
}

function createYearMenu(){
	var menu = document.getElementById("prevYears");
	var list = document.createElement('div');
	list.className = 'dropdown-content';
	list.id = 'list_of_years';
	
	//var years_array = [];
	var current_year = new Date().getFullYear();
	for (year = 2014; year < current_year + 1; year++){
		function createItem(year){
  			var item = document.createElement('a');
  			item.textContent = year-1 + ' - ' + year;
  			item.onclick = function(){
  				show_timeline( (function() {
  					var range = [year-1,year];
  					return range;
  					})() 
  				);
  			}
  			list.appendChild(item);
		}
		createItem(year);  			
	}
	menu.appendChild(list);
}