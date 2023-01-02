<!DOCTYPE html>
<html>
  <head>
    <title>Totally Normal Page</title>
    <link rel="preload" as="image" href="/images/wheel.png">
    <link rel="apple-touch-icon" href="/images/favicon.ico">
   <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="icon" type="icon" href="/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" href="/styles/slideshow.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/menu.css">
    <link rel="stylesheet" href="../styles/glitch.css">
    <link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Eater' rel='stylesheet'>
    <script src="/scripts/menu.js"></script>
    <script src="/scripts/slideshow.js"></script>
    <script src="/scripts/scripts.js"></script>
    <style>
      #forbidden:active { 
        box-shadow:0px 1px 0px #cc0000 !important;
      }
    </style>
  </head>
  
<body>
    <?php
if (!isset($_GET["check"])) {
  echo '<script type="text/JavaScript"> 
onLog();
     window.location.replace("https://Picture-Gallery.ezhgamer173.repl.co/data/everyLog.php?from="+window.location.href+"");
     </script>';}
?>
    <div id="mySidenav" class="sidenav" style="width: 0px;">
<!--   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
  <a href="https://Picture-Gallery.ezhgamer173.repl.co">Gallery</a>
  <a href="https://Picture-Gallery.ezhgamer173.repl.co/pages/toys.php">Fun</a>
  <a href="https://Picture-Gallery.ezhgamer173.repl.co/pages/forms.php">Forms</a>
  <a href="https://Picture-Gallery.ezhgamer173.repl.co/pages/game.php">Game</a>
  <a href="https://Picture-Gallery.ezhgamer173.repl.co/pages/changelog.php">Changelog</a>
      <a href="https://Picture-Gallery.ezhgamer173.repl.co/pages/latin.php">Latin</a>
      <a href="https://Picture-Gallery.ezhgamer173.repl.co/pages/chatroom.php">Chatroom</a>
  <a href="https://Picture-Gallery.ezhgamer173.repl.co/pages/experiments.php">Experiments</a>
</div>
<div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
  
  <script>
    var cd = new Date("Dec 25, 2022 10:00:00");
    var countDownDate = cd.getTime();
// Update the count down every 1 second
var x = setInterval(function() {
  // Get today's date and time
  var now = new Date().getTime();
  var obj = new Date();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
var milliseconds = Math.floor((distance % (1000)) / 1);
  // Display the result in the element with id="demo"
  if (obj.getHours() == 16 && obj.getMinutes() == 20) {
    document.getElementById("demo").innerHTML = "LOL 4:20 LOL";
  }
    else if (obj.getMinutes()==cd.getMinutes() && obj.getHours()==cd.getHours() && obj.getDate()==cd.getDate() && obj.getMonth()==cd.getMonth()){
    document.getElementById("demo").innerHTML = "Use 7EB as your name in suggestions to get priority";
    }
  else {if (distance > 0) {
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";}
        else {
          document.getElementById("demo").innerHTML = "The last countdown has expired, and the new one has not been put up yet."
        }
  }
  
}, 100);
  </script>
  <div id="overlay" onclick="next()">
  <div id="myText">Your Mom</div>
</div>
<center><button onclick="on()" id="forbidden" style="background-color:red; box-shadow:0px 2px 0px #cc0000;">DO NOT PRESS THIS</button></center>
  <center id="clock"><p id="demo"></p></center>
  <center><div id="party"><p style="font-size:80%;text-align:center;"><br>PARTY!</p></div></center>
  <center><div id="endurancediv" onmouseover="randomizeHover('endurance')" onmouseleave="stopRandomizer()"><p id="endurance" style="font-size:80%; text-align:center;">08h<br>00m<br>00s</p></div></center>
  <script>
    function addLeadingZeros(num, totalLength) {
  return String(num).padStart(totalLength, '0');
}
    const maxHours = 8;
    var hours = maxHours;
  var minutes = 0;
  var seconds = 0;
  function countDown(hours, minutes, seconds) {
    var news = seconds;
    var newm = minutes;
    var newh = hours;
      if (hours == 0 && minutes == 0 && seconds == 0) {
        var no = "no";
      }
      else if (seconds == 0 && minutes == 0) {
        newh -= 1;
        newm = 59;
        news = 59;
      }
      else if (seconds == 0) {
        news = 59;
        newm -= 1;
      }
      else {
        news -= 1;
      }
    return [news, newm, newh];
    }
function randomize(id) {
  let el2 = document.getElementById(id);
  let c = countDown(hours, minutes, seconds);
  seconds = c[0];
  minutes = c[1];
  hours = c[2];
  el2.innerHTML = "" + addLeadingZeros(hours,2) + "h<br>" +addLeadingZeros(minutes,2) + "m<br>" + addLeadingZeros(seconds,2)+"s";
  if (hours == 0 && minutes == 0 && seconds == 0) {
    el2.innerHTML = "What a waste of time";
  }
}
function makeid(length) {
  var result = "";
  var characters = "abcdefghijklmnopqrstuvwxyz";
  var charactersLength = characters.length;
  for (var i = 0; i < length; i++) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
  }
  return result;}
let interval = "not set";
function randomizeHover(id) {
  if (interval === "not set") {
  interval = setInterval(() => {
    randomize(id);
  }, 1000);}
    }
function stopRandomizer(){
  clearInterval(interval);
  interval = "not set";
  hours = maxHours;
  minutes = 0;
  seconds = 0;
document.getElementById('endurance').innerHTML = ""+addLeadingZeros(maxHours,2)+"h<br>00m<br>00s";
}
  </script>
  <center><div id="chdiv"><p class="challenge">Use 7EB at the end of a suggestion to get priority</p></div></center><br><br>
  <center>
  <button type="button" onclick="spin()" id="q">Spin the wheel!<br></button></center>
  <center><img id="spinne" class="spi normimage transp" src="/images/wheel.png" alt="A Wheel"><div style="position: relative; left: 0; top: 0;"></center>
  <center><img class="transp clickable" id="mogus" src="../images/mogus.png" hidden alt="A sussy imposter" onclick="alert('IGHT IMMA VENT OUT');document.getElementById('mogus').toggleAttribute('hidden');document.getElementById('mogusb').toggleAttribute('hidden');"></center>
  <center><img class = "transp clickable" alt="VENT" src="../images/vent.webp" id="mogusb" onclick="document.getElementById('mogus').toggleAttribute('hidden');document.getElementById('mogusb').toggleAttribute('hidden'); alert('SUSSY IMPOSTER');var p = prompt('Are You Sus','YES');while(p.toLowerCase()!='yes'){alert('FALSE: YOU ARE SUS\nTRY AGAIN');p=prompt('Are You Sus','YES');}alert('CORRECT: YOU ARE SUS\nTHANK YOU');"></center>
<script src="../scripts/scripts.js"></script>    
</body>
</html>