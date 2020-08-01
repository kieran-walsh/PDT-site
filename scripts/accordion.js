//Code borrowed from W3Schools - How To Make an Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
            panel.classList = "panel";
        }
        else {
            panel.style.display = "block";
        }
    });
}
