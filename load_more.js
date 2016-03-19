var load_statuses = document.getElementById("extra_statuses_button");

load_statuses.addEventListener("click", function() {
  this.style.background = '#9C9898';
  this.disabled = true;
  this.style.cursor = 'not-allowed';
  ajaxGet('/statuses-1.html', onSuccess);
  revertColor();
});

function revertColor () {
  setTimeout(function() {
    load_statuses.style.background = '#FF7679';
    load_statuses.disabled = false;
    load_statuses.style.cursor = 'pointer';
  }, 2000);
}
