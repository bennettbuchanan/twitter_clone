// assign anonymous function to onsubmit property of form
document.getElementById('post_status').onsubmit = function() {

    // determine if the location checkbox is checked
    var location = this.elements['location'];

    if (location.checked) {

    	getLocation();

		function getLocation() {
		    if (navigator.geolocation) {
		        navigator.geolocation.getCurrentPosition(showPosition);
		    } else { 
		        alert("Your status was posted!");
		    }
		}

		function showPosition(position) {
		    var y = "Latitude: " + position.coords.latitude + 
		    " Longitude: " + position.coords.longitude;	
		    alert("Your status was posted from " + y + "!");
		}
	    
    } else {
    	alert ("Your status was posted!");
    }
};