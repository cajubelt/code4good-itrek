function show_timeline(PAGE_YEAR){
	/*clear existing posts from timeline */
	var timeline = document.getElementById("cd-timeline");
	while (timeline.firstChild) {
    	if (timeline.firstChild.class = "cd-timeline-block"){
    		timeline.removeChild(timeline.firstChild);
    	}
	}
	
	/*add posts from PAGE_YEAR to the timeline */
	var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
	
	myFirebaseRef.orderByChild("date").on("child_added", function(snapshot, prevChildKey) {
		var newPost = snapshot.val();
		if (newPost.approved){ 
			var year = newPost.date.substring(0,4);
			if (year == PAGE_YEAR){
				var newPostObject = new post(snapshot.key(), newPost.title, newPost.content, newPost.date, newPost.category, newPost.base64image, newPost.videolink, newPost.approved);
				newPostObject.toHTML(false);
			}
		}
	}, function (errorObject) { //in case database read fails
  		alert("The read failed: " + errorObject.code);
	});
}