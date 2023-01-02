<!DOCTYPE html>
<html>
  <head>
    <title>Suggest/Insult</title>
    <link rel="preload" as="image" href="/images/wheel.png">
    <link rel="apple-touch-icon" href="/images/favicon.ico">
   <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="icon" type="icon" href="/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" href="/styles/slideshow.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/menu.css">
    <script src="/scripts/menu.js"></script>
    <script src="/scripts/slideshow.js"></script>
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
  <h1 id="title">Forms</h1>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<button onclick="document.getElementById('id01').style.display='block';document.getElementById('id02').style.display='none'">Make a Suggestion</button>
  <br><br>
<center><div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close animate" title="Close Modal">&times;</span>
<form action="../data/formfill.php" method="get">
  <div class="ccontainer animate">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Real Name" name="name" required>

    <label for="suggestion"><b>Suggestion</b></label>
    <input type="text" placeholder="What do you want to see added?" name="suggestion" required>

    <button type="submit" class="formbutton">Submit</button>
  </div>

<!--   <div class="container" style="background-color:#323232">
    <button type="button" class="cancelbtn formbutton">Cancel</button> -->
<!--   </div> -->
</form>
</div></center>
  <script>
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>
<button onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'">Insult Someone</button>
<center><div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close animate" title="Close Modal">&times;</span>
<form action="../data/insult.php" method="get">
  <div class="ccontainer animate">
    <label for="name"><b>To</b></label>
    <input type="text" placeholder="Who is the insult targeting?" name="name" required>

    <label for="suggestion"><b>Insult</b></label>
    <input type="text" placeholder="Your Insult" name="suggestion" required>

    <button type="submit" class="formbutton">Submit</button>
  </div>
<!--     <button type="button" class="cancelbtn formbutton" onclick="document.getElementById('id02').style.display='none'">Cancel</button> -->
  </div>
</form>
</div></center>
</body>
</html>