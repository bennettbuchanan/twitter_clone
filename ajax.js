function onSuccess(xhttp) {
  document.getElementById("extra_statuses").innerHTML = xhttp.responseText;
}

function ajaxGet(url, onSuccess) {
  setTimeout(function() {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        onSuccess(xhttp);
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
  }, 2000);
}
