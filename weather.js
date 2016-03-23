function getData(data) {
  // Get data from API and add the current weather to html file.
  var node = document.createTextNode(data.current_weather);
  document.getElementById('weather').appendChild(node);
}

var script = document.createElement('script');
script.src = 'https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=getData'
document.body.appendChild(script);












  // Grab the template script
  var theTemplateScript = document.getElementById("user-template");
  var content = theTemplateScript.innerHTML;
  var theTemplate = Handlebars.compile(content);

  function fetchJSON(xhttp) {
    contextString = xhttp.responseText;
    var contextObject = JSON.parse(contextString);
    var theCompiledHtml = theTemplate(contextObject);
    document.getElementById('content-placeholder').innerHTML = theCompiledHtml;
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

  // Define our data object
  var context = locationGet('/statuses-1.json', fetchJSON);
