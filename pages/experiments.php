<!DOCTYPE html>
<html>
  <head>
    <title>Experiments</title>
    <link rel="apple-touch-icon" href="/images/favicon.ico">
   <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="icon" type="icon" href="/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/menu.css">
    <script src="/scripts/menu.js"></script>
    <script src="/scripts/scripts.js"></script>
    <style>
      a {
        
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
  <br>
  <h1>Good Experiments</h1>
  <a href="https://BattleSimulator.ezhgamer173.repl.co">Battle Simulator</a><br>
  <a href="https://Nested.ezhgamer173.repl.co">D&D Party and Gear Generator</a><br>
  <h1>Crappy Experiments</h1>
  <a href="https://Picture-Gallery.ezhgamer173.repl.co/pages/experiments/minecraftNeuralNetwork.php">Minecraft Classifier</a><br>
  <a href="https://Clicker.ezhgamer173.repl.co">Bad Clicker Game</a><br>
  <a href="https://CountryGame.ezhgamer173.repl.co">Weird Country Territory Simulation (for some reason doesn't work right now)</a><br>
</body></html>