<!DOCTYPE html>
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
    input[type=text] {
  width:160px;
    height:15px;
  transition:width 0.3s 0.6s ease-out, height 0.3s 0.6s ease-out;
}

input[type=text]:focus {
  width: 90%;
  height: 20px;
}
    </style>
<!--       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css" integrity="sha256-nwNjrH7J9zS/Ti4twtWX7OsC5QdQHCIKTv5cLMsGo68=" crossorigin="anonymous" /> -->
  </head>
  
<body>
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
<!--   <script>
    alert("scripted");
    readTextFile("defaultchat");
  var x = setInterval(function(){
readTextFile("defaultchat");},100);
</script> -->
  <h1 id="title">Chatroom</h1>
  <p>Chatting as <?php echo $_COOKIE["NAME"];?></p>
  <p><div id="iframe-container"><iframe name="frame1" id="myFrame" src="/data/chatroom/chats/<?php echo $_GET['chat']?>.txt" frame-border="0" width="100%" height="300px"></iframe></div></p>
 <form action="../data/chatroom/message.php" method="post" autocapitalize="true" autocorrect="on" autocomplete="off" >
   <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
   <input type="hidden" name="chat" value="<?php echo $_GET['chat']?>">
    <br><span>Message: </span><input type="text" name="message"><br>
<input type="submit" value="Send">
<?php
if (!file_exists("../data/chatroom/chats/".$_GET['chat'].".txt")) {
  file_put_contents("../data/chatroom/chats/".$_GET["chat"].".txt", "");
}
?>
   <script>
var frame = document.getElementById('myFrame');
    frame.onload = function () {
        var body = frame.contentWindow.document.querySelector('body');
        body.style.color = '#eeeeee';
        body.style.fontSize = '20px';
        body.style.lineHeight = '20px';
        body.height = "90%";
      document.frame1.document.body.style.fontFamily = "Verdana";
    };
     function fetchHeader(url, wch) {
    try {
        var req=new XMLHttpRequest();
        req.open("HEAD", url, false);
        req.send(null);
        if(req.status== 200){
            return req.getResponseHeader(wch);
        }
        else return false;
    } catch(er) {
        return er.message;
    }
}

     var x = setInterval(function(){
document.getElementById('myFrame').src = document.getElementById('myFrame').src
       var iframesrc="/data/chatroom/chats/<?php echo $_GET['chat']?>.txt"
//alert(fetchHeader("/data/chatroom/chats/<?php echo $_GET['chat']?>.txt",'Last-Modified'));
//        var container = document.getElementById('iframe-container');

// var iframe2 = document.createElement('iframe');
// iframe2.src = '/data/chatroom/chats/<?php echo $_GET['chat']?>.txt';
       var frame = document.getElementById('myFrame');
       var body = frame.contentWindow.document.querySelector('body');
        body.style.color = '#eeeeee';
        body.style.fontSize = '20px';
        body.style.lineHeight = '20px';
        body.style.height = "90%";
        var cssLink = document.createElement("link");
        cssLink.href = "/styles/styles.css"; 
        cssLink.rel = "stylesheet"; 
        cssLink.type = "text/css"; 
        frame.document.head.appendChild(cssLink);
        // body.style.fontFamily = "verdana";
       //alert(body.style.fontFamily);
     },1000);
</script>
  </form></body></html>