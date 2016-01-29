function show_timeline(YEAR_RANGE){
	/*clear existing posts from timeline */
	var timeline = document.getElementById("cd-timeline");
	while (timeline.firstChild) {
    	if (timeline.firstChild.class = "cd-timeline-block"){
    		timeline.removeChild(timeline.firstChild);
    	}
	}
	
	/*add posts from YEAR_RANGE to the timeline */
	var startDate = new Date('01-01-' + YEAR_RANGE[0]);
	var endDate = new Date('12-31-' + YEAR_RANGE[1]);
	
	var myFirebaseRef = new Firebase("https://scorching-inferno-2234.firebaseio.com/");
	
	myFirebaseRef.orderByChild("date").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		if (newPost.approved){ 
			//add element if post is between Aug 1, (startYear) and Aug 1, (endYear)
			var postDate = new Date(newPost.date);
			var inTimeRange = startDate <= postDate && postDate < endDate;
			if (inTimeRange){
				var newPostObject = new post(snapshot.key(), newPost.title, newPost.content, newPost.date, newPost.category, newPost.base64image, newPost.videolink, newPost.approved, newPost.trekYear);
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
	
	var current_year = new Date().getFullYear();
	for (year = 2013; year < current_year + 1; year++){
		function createItem(year){
  			var item = document.createElement('a');
  			var trekYear = year + '-' + (year+1);
  			item.textContent = trekYear;
  			item.onclick = function(){
  				show_timeline( (function() {
  					var range = [year,year+1];
  					return range;
  					})() 
  				);
  				displayOnly(trekYear);
  			}
  			list.appendChild(item);
		}
		createItem(year);  			
	}
	menu.appendChild(list);
}

function displayOnly(trekYear){
	//get all trek years
	var current_year = new Date().getFullYear();
	var first_year = 2013;
	var all_years = [];
	for (var year = first_year; year <= current_year; year++){
		all_years.push(year.toString() + "-" + (year+1).toString());
	}
	
	//display only the current trek year
	for (i = 0; i < all_years.length;i++){
		var trek = all_years[i];
		var cssClass = ".".concat(trek);
		var disp = $(cssClass).css("display");
		if (trekYear == trek){
			$(cssClass).attr("style","display:block");
		} else {
			console.log(cssClass);
			$(cssClass).attr("style","display:none");
		}
	}
}