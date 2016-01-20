function processEntries() {	
	var title = document.getElementById("submit-title").value;
	var content = document.getElementById("submit-content").value;
	var date = document.getElementById("date").value;
	var hasTitle = false;
	var hasContent = false;
	var hasDate = false;
		
	//Title required
	if (title.trim()=="") {
		document.getElementById("title-error").firstChild.nodeValue = "Please submit a title for this post.";
		hasTitle = false;
	}
	else{
		document.getElementById("title-error").firstChild.nodeValue = "*";
		hasTitle = true;
	}
	
	//Content required
	if (content.trim()=="") {
		document.getElementById("content-error").firstChild.nodeValue = "Please submit content for this post.";
		hasContent = false;
	}
	else {
		document.getElementById("content-error").firstChild.nodeValue = "*";	
		hasContent = true;
	}
	
	//Date required
	if (date=="") {
		document.getElementById("date-error").firstChild.nodeValue = "Please submit a date for this post.";
		hasDate = false;
	}
	else {
		document.getElementById("date-error").firstChild.nodeValue = "*";
		hasDate = true;
	}
	
	//Enable submit button once required fields are filled out
	if (hasTitle && hasContent && hasDate) {
		document.getElementById("submit-button").disabled = false;
	}
	else {
		document.getElementById("submit-button").disabled = true;
	}
		
}

//used whenever text is changed before saving for the title and content fields
function disableSubmitButton() {
	document.getElementById("submit-button").disabled = true;
}

//ensures that the date and category are not changed between save and submit
document.getElementById("date").addEventListener("click", disableSubmitButton);
document.getElementById("category").addEventListener("click", disableSubmitButton);



window.onload = function() {
	document.getElementById("save-button").onclick = processEntries;
};
