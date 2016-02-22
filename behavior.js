document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('nav-button').addEventListener('click', function(){
    var nav = document.getElementsByTagName('nav')[0];
    if (nav.className == 'nav-hide') {
      nav.className = 'nav-show';
    }
    else {
      nav.className = 'nav-hide';
    }
  })
});