<!DOCTYPE html>
<html>
  <head>
    <title>Homework Folder</title>
    <link rel="apple-touch-icon" href="/images/favicon.ico">
   <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="icon" type="icon" href="/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/menu.css">
    <link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Eater' rel='stylesheet'>
    <script src="/scripts/menu.js"></script>
     <script src="/scripts/latin.js"></script>
    <script src="/scripts/scripts.js"></script>
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
  <h1 id="title">Latin Stuff</h1>
  <p>Coded in Python by Daniel Holter<br>Translated to Javascript by me</p>
  <label for = "word">Genative Singular</label><br>
  <input type="text" name="declension" id="word">
<!--   <input type="radio" name="declension" value="Second" id="second">
  <label for = "second">Second Declension</label><br>
  <input type="radio" name="declension" value="Third" id="third">
  <label for = "third">Third Declension</label><br>
  <input type="radio" name="declension" value="Fourth" id="fourth">
  <label for = "fourth">Fourth Declension</label><br>
  <input type="radio" name="declension" value="Fifth" id="fifth">
  <label for = "fifth">Fifth Declension</label><br><br> -->
  <p>Is the word of the third declension?</p>
  <input type="radio" name="third?" value="yes" id="singular">
  <label for = "singular">Yes</label><br>
  <input type="radio" name="third?" value="no" id="plural">
  <label for = "plural">No</label><br><br>

  <button type="button" onclick="check()">Submit</button>
  <p id="output"></p>
<!--   <script>function check() {
  
  }</script> -->
</body>
</html>