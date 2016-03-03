// define toggle function for use in other functions
function toggle(id) {
    var elem = document.getElementById(id).style;
    if (elem.display == '' || elem.display == "none") {
        elem.display = "block";
    } else {
        elem.display = "none";
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
    } else {
        nav.className = 'nav-show';
    }
})