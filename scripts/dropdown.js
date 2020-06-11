function dropdown() {
    var checkBox = document.getElementById("checkbox");
    var checkMark = document.getElementById("checkmark");
    var dropdown = document.getElementById("games");
    var nav = document.getElementById("nav");
    var logo = document.getElementById("logo")
  
    if (checkBox.checked == true){
      dropdown.style.display = "grid";
      nav.style.position = "fixed";
      checkBox.style.position = "fixed";
      checkMark.style.position = "fixed";
      logo.style.display = "none";
      checkBox.style.marginTop = "60px";
      checkMark.style.marginTop = "60px";
      checkMark.style.transform = "rotate(180deg)";
    } else {
      dropdown.style.display = "none";
      nav.style.position = "relative";
      checkBox.style.position = "absolute";
      checkMark.style.position = "absolute";
      logo.style.display = "block";
      checkBox.style.marginTop = "15px";
      checkMark.style.marginTop = "15px";
      checkMark.style.transform = "rotate(0deg)";
    }
  } 