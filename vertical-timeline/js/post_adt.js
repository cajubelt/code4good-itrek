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
						
			if (this.category == "Fundraising") {
				icon.src = "dollar.png";
				iconDiv.className += " cd-dollar";
			}
			else if (this.category == "Trek Planning") {
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
			
			var content = document.createElement("div");
			content.className = "cd-timeline-content";				
			content.appendChild(newPostTitle);
			content.appendChild(newPostContent);
			content.appendChild(newPostDate);
			
			var category = document.createElement("div");
			category.className = this.category;
			category.appendChild(content);
			category.appendChild(iconDiv);
			
			var blockk = document.createElement("div");
			blockk.className = "cd-timeline-block";
			blockk.appendChild(category);
			
			document.getElementById("cd-timeline").appendChild(blockk); //Note this doens't work if use block instead
				
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
