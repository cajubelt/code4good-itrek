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
			icon.src = "img/cd-icon-picture.svg";
			
			var iconDiv = document.createElement("div");
			iconDiv.className = "cd-timeline-img";
			iconDiv.className += " cd-picture";
			iconDiv.appendChild(icon);
			
			var content = document.createElement("div");
			content.className = "cd-timeline-content";				
			content.appendChild(newPostTitle);
			content.appendChild(newPostContent);
			
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
function post(title, content, author, year, category){
	this.title = title;
	this.content = content;
	this.author = author;
	this.year = year;
	this.category = category;
	this.toHTML = toHTML;
}
//var helloObjectWorld = new post('title','content','author','year','category');
//helloObjectWorld.toHTML();
