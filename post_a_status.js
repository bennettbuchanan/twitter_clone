var post_status = document.getElementById("post_button");

// add event listener for post form button and toggle its display
post_status.addEventListener("click", function() {
	var post_form = document.getElementById('post_form');
	post_form.toggle();	
})