var geolocation = document.getElementById('geolocation');
var geolocation_text = document.getElementById('geolocation_text');

// test to see if broswer supports geolocation, if not then hide feature
if (navigator.geolocation) {
    geolocation.style.display = "block"
    geolocation_text.style.display = "block"
} else {
    geolocation.style.display = "none"
    geolocation_text.style.display = "none"
}
