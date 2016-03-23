// Add file contents to DOM. 
function onSuccess(content) {
  console.log(typeof content);
  document.getElementById("extra_statuses").innerHTML = content;
}

// Make Ajax GET request to file.
function ajaxGet(url, onSuccess) {
  setTimeout(function() {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        onSuccess(xhttp.responseText);
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
  }, 2000);
}
