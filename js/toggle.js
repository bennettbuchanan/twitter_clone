// define the prototype for the toggle function
HTMLElement.prototype.toggle = function() {
	if (this.style.display == '' || this.style.display == "none") {
        this.style.display = "block";
				this.setAttribute("aria-expanded", "true");
    } else {
        this.style.display = "none";
				this.setAttribute("aria-expanded", "false");
    }
}
