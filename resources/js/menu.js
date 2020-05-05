//setting acc to accordion DOM object
var acc = document.getElementsByClassName("accordion");

//itterate for loop to check states of panels
var i;
for (i = 0; i < acc.length; i++) {
  //atributting clicks to panels, set toggle
  acc[i].addEventListener("click", function() {
    this.classList.toggle("menuactive");
    var panel = this.nextElementSibling;
    //close panel
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
      panel.style.borderBottom = "0px";
    }
    //if panel not at max height, open panel:
    else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      panel.style.borderBottom = "1px solid black";
    }
  }); //closing function()
}
