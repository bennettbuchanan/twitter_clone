function toggle(id) {
    var elem = document.getElementById(id).style;
    if (elem.display == '' || elem.display == "none") {
        elem.display = "block";
    } else {
        elem.display = "none";
    }
}