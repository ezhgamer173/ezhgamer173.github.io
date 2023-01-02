function textPop(x) {
  x.style.transform = "scaleX(1.0)";
  x.style.opacity = 1.0;
}
function textUnpop(x) {
  x.style.transform = "scaleX(0.0)";
  x.style.opacity = 0.0;
}
function colorChange1(item) {
  alert("ran2.5")
  item.style.backgroundColor = "#202020";
}
function colorChange2(item) {
  item.style.backgroundColor = "#202020";
}
function openNav(x) {
  document.getElementById("mySidenav").style.width = "250px";
  document.body.style.backgroundColor = "rgba(30,30,30,1.0)";
  // alert("ran");
  // var s = document.querySelectorAll("form");
  // alert("ran2");
  // s.foreach(colorChange1);
  // alert("ran3");
  document.querySelectorAll(".sidenav a").forEach(textPop);
  x.style.left = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav(x) {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "rgba(50,50,50,1.0)";
  // document.querySelectorAll("form").foreach(colorChange2);
  document.querySelectorAll(".sidenav a").forEach(textUnpop);
  x.style.left = "0px";
}

function myFunction(x) {
  x.classList.toggle("change");
  if (document.getElementById("mySidenav").style.width == "0px") {
    openNav(x);
  }
  else {
    closeNav(x);
  }
}