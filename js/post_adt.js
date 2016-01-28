//method to produce html element for a post (in progress)
function toHTML(isAdmin){
		with (this){
						
			//Information inputted by the user
			var newPostTitle = document.createElement("h2");
			newPostTitle.textContent = this.title;
			newPostTitle.style.marginBottom = '10px';
			
			var newPostContent = document.createElement("p");
			newPostContent.textContent = this.content;
			
			var isImage = false;
			var newPostImage = document.createElement("img");
			if (this.base64image != "") {
				newPostImage.src = "data:image/png;base64," + this.base64image;
				newPostImage.className = "content-image";
				// newPostImage.style.height = "20em";
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
			
			if (isAdmin) {
				var newPostApproval = document.createElement("div");

				var checkboxHeader = document.createElement('h1');
				checkboxHeader.textContent = "Approve";
				checkboxHeader.style.display = "inline-block";
				newPostApproval.appendChild(checkboxHeader);
				
				var checkbox = this.createCheckbox();
				checkbox.style.display = "inline-block";
				newPostApproval.appendChild(checkbox)
				
				var editButtonForm = document.createElement("form");	
				editButtonForm.style.position = "absolute";	
				editButtonForm.style.right = "90px";
				editButtonForm.style.top = "10px";
				editButtonForm.action = "admin_edit_post.php";
				editButtonForm.enctype="multipart/form-data";
				editButtonForm.method="post";
				
				var editButton = document.createElement("input");
				editButton.type="submit";
				editButton.value= 'Edit Post';
				editButton.name = "edit-post";
				editButton.id = "edit-post";

				var editButton2 = document.createElement("input");
				editButton2.type="hidden";
				editButton2.value= this.database_id;
				editButton2.name = "hid";

				editButtonForm.appendChild(editButton);
				editButtonForm.appendChild(editButton2);

				//

				var deleteButtonForm = document.createElement("form");	
				deleteButtonForm.style.position = "absolute";	
				deleteButtonForm.style.right = "10px";
				deleteButtonForm.style.top = "10px";
				deleteButtonForm.action = "";
				deleteButtonForm.enctype="multipart/form-data";
				deleteButtonForm.method="post";
				
				var deleteButton = document.createElement("input");
				deleteButton.type="submit";
				deleteButton.value= 'Delete Post';
				deleteButton.name = "delete-post";
				deleteButton.id = "delete-post";

				var deleteButton2 = document.createElement("input");
				deleteButton2.type="hidden";
				deleteButton2.value= this.database_id;
				deleteButton2.name = "hid";

				deleteButtonForm.appendChild(deleteButton);
				deleteButtonForm.appendChild(deleteButton2);
				
				newPostApproval.appendChild(deleteButtonForm);
				newPostApproval.appendChild(editButtonForm);			
				
				newCDTimelineContentBlock.appendChild(newPostApproval);							
							
			} else {
				var checkbox = null;
			}		
			
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
			
			var newPostApprovalOuterDiv = document.createElement("div");
			newPostApprovalOuterDiv.appendChild(newPostCategory);
			if (isAdmin) {
				newPostApprovalOuterDiv.id = checkbox.id;
				if (checkbox.approved) {
					newPostApprovalOuterDiv.className = "approved";
				} else {
					newPostApprovalOuterDiv.className = "unapproved";
				}
			}
			
			var newPostBlock = document.createElement("div");
			newPostBlock.className = "cd-timeline-block";
			newPostBlock.appendChild(newPostApprovalOuterDiv);
			
			var timeline = document.getElementById("cd-timeline");
			var timelineBlocks = document.getElementsByClassName("cd-timeline-block");
			var timelineDateSpans = document.getElementsByClassName("cd-date");
			for (var i=0; i< Math.max(timelineDateSpans.length - 1,1); i++) { //why -1 here? Otherwise NaN
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
	
//method to produce a checkbox to toggle post approval
function createCheckbox() {
	var checkbox = document.createElement('input');
	checkbox.type = "checkbox";
	checkbox.name = "name";
	checkbox.value = "value";
	checkbox.id = this.database_id;
	checkbox.approved = this.approved;
	checkbox.checked = this.approved;
	
	function toggleApproval() {
		console.log("running toggleApproval")
		var myFirebaseRef = new Firebase("https://brilliant-fire-4870.firebaseio.com/");
		var ID = checkbox.id;
		console.log(ID);
		var timelinePostRef = myFirebaseRef.child(ID);	
		checkbox.approved = !checkbox.approved
		timelinePostRef.update({approved:checkbox.approved});
		console.log(checkbox.approved);
		
		var checkboxOuterDiv = document.getElementById(checkbox.id);
		if (checkbox.approved) {
			checkboxOuterDiv.className = "approved";
		}
		else {
			checkboxOuterDiv.className = "unapproved";
		}
			
	}
	checkbox.onclick = toggleApproval;
	return checkbox;
}


	
//object representing a post on the timeline
function post(database_id, title, content, date, category, base64image, videolink, approved){
	this.database_id = database_id; //TODO: make this the only parameter
	this.title = title;
	this.content = content;
	this.date = date;
	this.category = category;
	this.base64image = base64image;
	this.videolink = videolink;
	this.approved = approved;
	this.toHTML = toHTML;
	this.createCheckbox = createCheckbox;
}
