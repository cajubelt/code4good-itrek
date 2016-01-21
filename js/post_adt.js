//method to produce html element for a post (in progress)
function toHTML(){
		with (this){
			//Information inputted by the user
			var newPostTitle = document.createElement("h2");
			newPostTitle.textContent = this.title;
			
			var newPostContent = document.createElement("p");
			newPostContent.textContent = this.content;
			
			var isImage = false;
			var newPostImage = document.createElement("img");
			if (this.base64image != "") {
				newPostImage.src = "data:image/png;base64," + this.base64image;
				newPostImage.className = "content-image";
				isImage = true;
			}
			
			var isVideo = false;
			var newPostVideo = document.createElement("iframe");
			if (this.videolink != "") {
				newPostVideo.src = this.videolink;
				isVideo = true;
			}
			

			var icon = document.createElement("img");
			var iconDiv = document.createElement("div");
			iconDiv.className = "cd-timeline-img";
						
			if (this.category == "fundraising") {
				icon.src = "img/dollar.png";
				iconDiv.className += " cd-dollar";
			}
			else if (this.category == "planning") {
				icon.src = "img/gear.png"
				iconDiv.className += " cd-gear";
			}
			else { //Trekker Actions
				icon.src = "img/footprint.png";
				iconDiv.className += " cd-footprint";
			}
			
			iconDiv.appendChild(icon);
			
			var newPostDate = document.createElement("span");
			var dateObject = new Date(this.date);
			var year = dateObject.getUTCFullYear();
			var monthDict = {0:"January", 1:"February", 2:"March", 3:"April",
							4:"May", 5:"June", 6:"July", 7:"August", 8: "September",
							9:"October", 10:"November", 11:"December"};
			var month = monthDict[dateObject.getUTCMonth()];
			var day = dateObject.getUTCDate();
			newPostDate.textContent = month + " " + day + ", " + year;
			newPostDate.className = "cd-date";
			
			var newCDTimelineContentBlock = document.createElement("div");
			newCDTimelineContentBlock.className = "cd-timeline-content";				
			newCDTimelineContentBlock.appendChild(newPostTitle);
			if (isImage) {
				newCDTimelineContentBlock.appendChild(newPostImage);
			}
			if (isVideo) {
				newCDTimelineContentBlock.appendChild(newPostVideo);
			}
			newCDTimelineContentBlock.appendChild(newPostContent);
			newCDTimelineContentBlock.appendChild(newPostDate);
			
			var newPostCategory = document.createElement("div");
			newPostCategory.className = this.category;
			newPostCategory.appendChild(newCDTimelineContentBlock);
			newPostCategory.appendChild(iconDiv);
			
			var newPostBlock = document.createElement("div");
			newPostBlock.className = "cd-timeline-block";
			newPostBlock.appendChild(newPostCategory);
			
			var timeline = document.getElementById("cd-timeline");
			var timelineBlocks = document.getElementsByClassName("cd-timeline-block");
			var timelineDateSpans = document.getElementsByClassName("cd-date");
			for (var i=0; i<timelineDateSpans.length - 1; i++) { //why -1 here? Otherwise NaN
				var postDate = new Date(timelineDateSpans[i].textContent)
				//get the time in Milliseconds, and if the time of the new post is
				//greater than the time of the given post (iterating backwards through time),
				//we insert the new post before the given post
				if (postDate.getTime() < dateObject.getTime()) {
					timeline.insertBefore(newPostBlock, timelineBlocks[i]); //Note this doens't work if use block instead
					break;
				}
				else {
					timeline.appendChild(newPostBlock);
				}
			}
		}
		
	}
	
//object representing a post on the timeline
function post(title, content, date, category, base64image, videolink, approved){
	this.title = title;
	this.content = content;
	this.date = date;
	this.category = category;
	this.base64image = base64image;
	this.videolink = videolink;
	this.approved = approved;
	this.toHTML = toHTML;
}
