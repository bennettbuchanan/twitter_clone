document.getElementById("image_table").addEventListener("click", function imageTable() {
	
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

	// create three row elements and append them to the table
    for(i = tr.childNodes.length; i < 3; i++) {
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
    }

    // target the body and add the newly created div as a child element
	var body = document.getElementsByTagName("body")[0];
	body.appendChild(div);
	body.appendChild(table);

	var images = document.getElementsByTagName('img');
	imageCount = images.length;

	for(j = 0; j < imageCount; j++) {
		var tr = document.createElement("tr");
		table.appendChild(tr);
		for(k = 0; k < 3; k++) {
			var th = document.createElement("th");
			tr.appendChild(th);
			if (k == 0) {
		    	var img = document.getElementsByTagName('img')[j];
		    	var clone = img.cloneNode(true);
			    th.appendChild(clone);
			} else if (k == 1) {
				var imgsrc = document.getElementsByTagName('img')[j].src;
				var node = document.createTextNode(imgsrc);
				th.appendChild(node);
			} else if (k == 2) {
				var alt = document.getElementsByTagName('img')[j].alt;
				var node = document.createTextNode(alt);
				th.appendChild(node);
			}
		}
	}

	// loop through child elements of body and append to the div
	while (body.childNodes.length > 0) {
	    div.appendChild(body.childNodes[0]);
	}
});