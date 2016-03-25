// Get the template script.
var theTemplateScript = document.getElementById("user-template");
var content = theTemplateScript.innerHTML;
var theTemplate = Handlebars.compile(content);

function fetchJSON(xhttp) {
  contextString = xhttp.responseText;
  var contextObject = JSON.parse(contextString);

  // Do not display "See more statuses" button if last page of data.
  if(contextObject.last_page == true) {
    var moreButton = document.getElementById('extra_statuses_button');
    moreButton.style.display = "none";
  }

  // Loop through each item in the JSON array and create new div for a post.
  for (var i = 0; i < contextObject.statuses.length; i++) {
    var theCompiledHtml = theTemplate(contextObject.statuses[i]);
    var div = document.createElement("div");
    var element = document.getElementById("content-placeholder");
    element.appendChild(div).innerHTML = theCompiledHtml;
  }
}

function locationGet(url, fetchJSON) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        fetchJSON(xhttp);
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

var load_statuses = document.getElementById("extra_statuses_button");

// Set variable to count how many pages to load;
var i = 1;
load_statuses.addEventListener("click", function() {
  locationGet('/statuses-' + i + '.json', fetchJSON);
  i++;
});
