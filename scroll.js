




var btn = document.querySelector("#border");
btn.addEventListener("click", function() {
    var div = document.querySelector("#div");
    
  if(div.style.display === "none") {
        div.style.display = "block";
    } else {
      div.style.display = "none";
  }
    
});