// hide menu when scrolling down, and show it when scrolling up
window.addEventListener("scroll", function scrollDirection() {
    var header = document.getElementsByTagName('header')[0];
    var diffY = scrollDirection.y - window.pageYOffset;
    // do not change header on mobile view
    if (window.pageYOffset > 40 && window.innerWidth > 768) {
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

var nav = document.getElementsByTagName('nav')[0];

// hide the nav for accessibility without JS
window.onload = function() {
  nav.className = 'nav-hide';
}

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
    if (nav.className == 'nav-show') {
        nav.classList.remove("nav-show");
        nav.classList.add('nav-hide');
    } else if (nav.className == 'nav-hide') {
        nav.classList.remove("nav-hide");
        nav.classList.add('nav-show');
    } else {
        nav.className = 'nav-show';
        this.style.background = '#eee';
    }
})
