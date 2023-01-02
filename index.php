<!DOCTYPE html>
<html>
  <head>
    <title>Picture Gallery</title>
    <link rel="preload" as="image" href="images/wheel.png">
    <link rel="apple-touch-icon" href="images/favicon.ico">
   <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="icon" type="icon" href="images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" href="styles/slideshow.css">
    <link rel="stylesheet" href="styles/forms.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/menu.css">
    <script src="scripts/menu.js"></script>
    <script src="scripts/scripts.js"></script>
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
  <?php
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// date_default_timezone_set("America/New_York");
//   $myfile = fopen("data/logs.txt","a");
// fwrite($myfile,(getIPAddress()."; ".date("m/d/Y")." at ".date("h:i:s a")."\n"));
?>
  <h1 id="title">Picture Gallery</h1>
    <button id="dis" type="button" onclick="cats()">CATS!</button><br><br>
<!--   <form action="formfill.php" method="get">
    <br>
    What would you like to see added to the website? Fake names' suggestions will be ignored.
    <br>Name: <input type="text" name="name"><br>
Suggestion: <input type="text" name="suggestion"><br>
<input type="submit">
  </form> -->

<!-- <form action="forms.php">
  <input type="submit">
</form> -->
  <p><br></p>
<!--   <a href="https://GameRedirect.ezhgamer173.repl.co">Game</a> -->
  <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade first">
    <div class="numbertext">1 / 8</div>
    <img src="images/hope.png" class="toBeCat" style="width:100%">
    <div class="text">Hope x Emma</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 8</div>
    <img src="images/james.jpeg" class="toBeCat" style="width:100%">
    <div class="text">James being James</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 8</div>
    <img src="images/angie.jpg" class="toBeCat" style="width:100%">
    <div class="text">Mia x Angie</div>
  </div>
<div class="mySlides fade">
    <div class="numbertext">4 / 8</div>
    <img src="images/mad.jpg" class="toBeCat" style="width:100%">
    <div class="text">Madeline's Trademarked Pose</div>
  </div>
    <div class="mySlides fade">
    <div class="numbertext">5 / 8</div>
    <img src="images/luke.jpg" class="toBeCat" style="width:100%">
    <div class="text">Luke and Seth doing drugs</div>
  </div>
    <div class="mySlides fade">
    <div class="numbertext">6 / 8</div>
    <img src="images/taylor.jpg" class="toBeCat" style="width:100%">
    <div class="text">Taylor as Rapunzel</div>
  </div>
    <div class="mySlides fade">
    <div class="numbertext">7 / 8</div>
    <img src="images/amelia.jpg" class="toBeCat" style="width:100%">
    <div class="text">Amelia as a tornado</div>
  </div>
    <div class="mySlides fade">
    <div class="numbertext">8 / 8</div>
    <img src="images/dean.jpg" class="toBeCat" style="width:100%">
    <div class="text">Dean flipping you off (cropped to censor)</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
</div>
<script src="scripts/slideshow.js"></script>
<!--   <img id="nodel" src="images/hope.png" alt="Hope x Emma">
  <img class="image" src="images/james.jpeg" alt="James">
  <img class="image" src="images/angie.jpg" alt="Mia x Angie">
  <img class="image" src="images/mad.jpg" alt="Madeline's trademarked pose">
  <img class="image" src="images/luke.jpg" alt="Luke x Seth">
  <img class="image" src="images/taylor.jpg" alt="Taylor">
  <img class="image" src="images/amelia.jpg" alt="Amelia being chaotic">
  <img class="image" src="images/dean.jpg" alt="Dean flipping you off"> -->