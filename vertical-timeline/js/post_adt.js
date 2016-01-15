/**
 * 
 * @author Charlie Andrews-Jubelt
 */


//method to produce html element for a post (in progress)
function toHTML(){
		with (this){
			//Information inputted by the user
			var newPostTitle = document.createElement("h2");
			newPostTitle.textContent = this.title;
			
			var newPostContent = document.createElement("p");
			newPostContent.textContent = this.content;
			
			var icon = document.createElement("img");
			var iconDiv = document.createElement("div");
			iconDiv.className = "cd-timeline-img";
						
			if (this.category == "fundraising") {
				icon.src = "dollar.png";
				iconDiv.className += " cd-dollar";
			}
			else if (this.category == "planning") {
				icon.src = "gear.png"
				iconDiv.className += " cd-gear";
			}
			else { //Trekker Actions
				icon.src = "footprint.png";
				iconDiv.className += " cd-footprint";
			}
			
			iconDiv.appendChild(icon);
			
			var newPostDate = document.createElement("span");
			var dateObject = new Date(this.date);
			var year = dateObject.getFullYear();
			var monthDict = {0:"January", 1:"February", 2:"March", 3:"April",
							4:"May", 5:"June", 6:"July", 7:"August", 8: "September",
							9:"October", 10:"November", 11:"December"};
			var month = monthDict[dateObject.getMonth()];
			var day = dateObject.getDate();
			newPostDate.textContent = month + " " + day + ", " + year;
			newPostDate.className = "cd-date";
			
			var newCDTimelineContentBlock = document.createElement("div");
			newCDTimelineContentBlock.className = "cd-timeline-content";				
			newCDTimelineContentBlock.appendChild(newPostTitle);
			newCDTimelineContentBlock.appendChild(newPostContent);
			newCDTimelineContentBlock.appendChild(newPostDate);
			
			console.log(this.category);
			var newPostCategory = document.createElement("div");
			newPostCategory.className = this.category;
			console.log("hello");
			console.log(this.category);
			newPostCategory.appendChild(newCDTimelineContentBlock);
			newPostCategory.appendChild(iconDiv);
			
			var newPostBlock = document.createElement("div");
			newPostBlock.className = "cd-timeline-block";
			newPostBlock.appendChild(newPostCategory);
			
			document.getElementById("cd-timeline").appendChild(newPostBlock); //Note this doens't work if use block instead
				
		}
		
	}
	
//object representing a post on the timeline
function post(title, content, date, category){
	this.title = title;
	this.content = content;
	this.date = date;
	this.category = category;
	this.toHTML = toHTML;
}
