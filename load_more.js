var load_statuses = document.getElementById("extra_statuses_button");

// Change button to loading state styles.
load_statuses.addEventListener("click", function() {
  this.classList.add('load_button');
  this.classList.remove('call_to_action');
  this.disabled = true;
  ajaxGet('/statuses-1.html', onSuccess);
  revertColor();
});

// Remove loading state styles once content is loaded.
function revertColor () {
  setTimeout(function() {
    load_statuses.classList.add('call_to_action');
    load_statuses.classList.remove('load_button');
    load_statuses.disabled = false;
  }, 2000);
}
