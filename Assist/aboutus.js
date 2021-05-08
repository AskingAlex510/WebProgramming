var modal1 = document.getElementById("modalwin1");
var modal2 = document.getElementById("modalwin2");
var modal3 = document.getElementById("modalwin3");
var modal4 = document.getElementById("modalwin4");

var ava1 = document.getElementById("memberava1");
var ava2 = document.getElementById("memberava2");
var ava3 = document.getElementById("memberava3");
var ava4 = document.getElementById("memberava4");

var closemodal = document.getElementsByClassName("closemodal")[0];

ava1.onclick = function open() {
  modal1.style.display = "block";
}
ava2.onclick = function open() {
  modal2.style.display = "block";
}
ava3.onclick = function open() {
  modal3.style.display = "block";
}
ava4.onclick = function open() {
  modal4.style.display = "block";
}

window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }else if (event.target == modal2) {
    modal2.style.display = "none";
  }else if (event.target == modal3) {
    modal3.style.display = "none";
  }else if (event.target == modal4) {
    modal4.style.display = "none";
  }
}