function getData(data) {
  // Get data from API and add the current weather to html file.
  var node = document.createTextNode(data.current_weather);
  document.getElementById('weather').appendChild(node);
}

var weather_button = document.getElementById('update_weather');
weather_button.addEventListener("click", function() {
  // Remove default content of weather span. 
  var myNode = document.getElementById("weather");
  myNode.innerHTML = '';
  // Append script to DOM for fetching data with callback.
  var script = document.createElement('script');
  script.src = 'https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=getData'
  document.body.appendChild(script);
});
