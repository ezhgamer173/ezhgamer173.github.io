<?php
if (!isset($_COOKIE["NAME"])) {
  $final = 0;
  $js = array_keys((array) json_decode(file_get_contents("../data/chatroom/IDS.json")));
  
// echo "<script>alert('".gettype($js)."')</script>";
  while (in_array(strval($final),$js)){
    $final += 1;
  }
  $json = json_decode(file_get_contents("../data/chatroom/IDS.json"),true);
  //file_put_contents("../data/chatroom/IDS.json", json_encode($json));
  setcookie("NAME","No Name Set",time()+3600*24*300000,"/");
}
?>
<html>
  <head>
    <title>Chatroom</title>
    <link rel="preload" as="image" href="/images/wheel.png">
    <link rel="apple-touch-icon" href="/images/favicon.ico">
   <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="icon" type="icon" href="/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/menu.css">
    <link rel="stylesheet" href="/styles/chatroom.css">
    <link href='https://fonts.googleapis.com/css?family=Eater' rel='stylesheet'>
    <script src="/scripts/menu.js"></script>
    <script src="/scripts/slideshow.js"></script>
    <script src="/scripts/chatroom.js"></script>
    <script src="/scripts/scripts.js"></script>
    <style>body{margin-top:20px;}
    li {
      color: #eeeeee;
    }
    form{
      background-color:transparent;
    }
    </style>
<!--       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css" integrity="sha256-nwNjrH7J9zS/Ti4twtWX7OsC5QdQHCIKTv5cLMsGo68=" crossorigin="anonymous" /> -->
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
  <h1 id="title">Chatroom Hub</h1>
  <p>To change your name, input the new name into the text box and press the "Change Name" button.<br>To join a chat, input the chat name and press "Join Chat"<br>You don't have to use "defaultchat".</p>
  <form action="../data/chatroom/changeName.php" method=post>
    <span>Your Name: </span><input type="text" name="newName" value=<?php echo $_COOKIE["NAME"];?>><br>
<input type="submit" value="Change Name"></form>
  <br>
 <form action="chat.php" method=get>
    <br><span>Chat Name: </span><input type="text" name="chat" value="defaultchat"><br>
<input type="submit" value="Join Chat">
  </form>