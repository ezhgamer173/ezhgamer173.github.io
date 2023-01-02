<?php
// $file = "IDS.json";
// $json = (array) json_decode(file_get_contents($file),TRUE);
// $json[$_COOKIE["NAME"]] = $_POST["newName"];
$newURL = "https://Picture-Gallery.ezhgamer173.repl.co/pages/chatroom.php";
setcookie("NAME",$_POST["newName"],time()+86400*99999,"/");
header('Location: '.$newURL);
?>
<html><body></body></html>