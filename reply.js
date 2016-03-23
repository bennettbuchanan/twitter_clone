var content_container = document.querySelector('.statuscontentcontainer');

// Add click event listener to parent div
content_container.addEventListener("click",function(e) {
	// e.target was the clicked element
  	if (e.target.matches(".reply_link")) {
	  	// store this clicked element in a numerical variable
	  	var thisReply = e.target.dataset.tag;

		function changeReply() {
			// target the corresponding unique user id number
			var status_post = document.getElementById('user_reply_' + thisReply);
			status_post.toggle();
		}
    // call changeReply function
    changeReply();
	}
});

content_container.addEventListener("click",function(e) {
	// e.target was the reply form's button
  	if (e.target.matches(".replybutton")) {
	  	alert("Your reply was posted!")
	}
});
