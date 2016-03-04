HTMLElement.prototype.toggle = function() {
	if (this.style.display == '' || this.style.display == "none") {
        this.style.display = "block";
    } else {
        this.style.display = "none";
    }
}

// hide menu when scrolling down, and show it when scrolling up
window.addEventListener("scroll", function scrollDirection() {
    var header = document.getElementsByTagName('header')[0];
    var diffY = scrollDirection.y - window.pageYOffset;

    // do not change header on mobile view
    if (window.innerWidth > 768) {
        if (diffY < 0) {
            header.className = 'header-hide';
        } else if (diffY > 0) {
            if (header.className == 'header-hide') {
                header.className = '';
            }
        }
    }
    scrollDirection.y = window.pageYOffset;
});

// show header at regular size if window is below 768 pixels
window.addEventListener("resize", function() {
    var header = document.getElementsByTagName('header')[0];
    var w = window.innerWidth;
    if (w < 768) {
        if (header.className == 'header-hide') {
            header.className = '';
        }
    }
});

// show show menu when button is clicked
document.getElementById('nav-button').addEventListener('click', function() {
    var nav = document.getElementsByTagName('nav')[0];
    if (nav.className == 'nav-show') {
        nav.className = '';
        this.style.background = 'white';
    } else {
        nav.className = 'nav-show';
        this.style.background = '#eee';
    }
})

function imageTable() {
	// create a div with an id all_images_data_other
    var div = document.createElement("div");
    div.setAttribute("id", "all_images_data_other");
    div.style.display = "none";

    // create a table with an id all_images_data
    var table = document.createElement("table");
    table.setAttribute("id", "all_images_data");

	// create a tr element and append it to the table
	var tr = document.createElement("tr");
    table.appendChild(tr);

    // store the tr's node length in a variable
	var i = tr.childNodes.length; 

	// create three row elements and append them to the table
    while(i < 3){
    	var th = document.createElement("th");
    	tr.appendChild(th);
    	if (i == 0){
	    	var t = document.createTextNode("Image");
	    	th.appendChild(t);
    	} else if (i == 1){
    		var t = document.createTextNode("Image path");
	    	th.appendChild(t);
    	} else if (i == 2){
    		var t = document.createTextNode("Alternate text");
	    	th.appendChild(t);
    	}
    	i++;
    }

    // target the body and add the newly created div as a child element
	var body = document.getElementsByTagName("body")[0];
	body.appendChild(div);
	body.appendChild(table);

	var j = 0;
	while (j < 7){
		var tr = document.createElement("tr");
    	table.appendChild(tr);
    	var th = document.createElement("th");
    	tr.appendChild(th);
    	var img = document.getElementsByTagName('img')[j];
    	var clone = img.cloneNode(true);
	    th.appendChild(clone);
		j++;
	}

	// // get the alt text
	// var alt = document.images[0].alt;
 //    document.getElementsByTagName('img').innerHTML = alt;

 //    // get the image source
	// var src = document.images[0].src;
 //    document.getElementsByTagName('img').innerHTML = src;


	// loop through child elements of body and append to the div
	while (body.childNodes.length > 0) {
	    div.appendChild(body.childNodes[0]);
	}
}








