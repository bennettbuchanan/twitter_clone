function toggle(id) {
    var elem = document.getElementById(id).style;
    if (elem.display == '' || elem.display == "none") {
        elem.display = "block";
    } else {
        elem.display = "none";
    }
}

window.addEventListener("scroll", function scrollDirection() {
	var header = document.getElementsByTagName('header')[0].style;

    var diffY=scrollDirection.y-window.pageYOffset;

    // do not change header on mobile view
    if (window.innerWidth > 768) {
	    if (diffY < 0) {
	        header.height = "0px";
	    } else if (diffY > 0) {
	        header.height = "43px";
	    }
   	}
    scrollDirection.y=window.pageYOffset;
});

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('nav-button').addEventListener('click', function(){
    var body = document.getElementsByTagName('body')[0];
    if (body.className == 'nav-show') {
      body.className = '';
    }
    else {
      body.className = 'nav-show';
    }
  })
});