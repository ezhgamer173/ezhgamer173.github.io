<?php
date_default_timezone_set("America/New_York");
$final = $_COOKIE["NAME"]."：".$_POST["message"]."\n";
// fwrite(fopen("chats/".$_POST["chat"].".txt","a"),$final);
$final .= file_get_contents("chats/".$_POST["chat"].".txt");
file_put_contents("chats/".$_POST["chat"].".txt", $final);
header("Location: ".$_POST["destination"]);
?>
<!DOCTYPE html>
<html>
  <body>
    <script>alert("HI");window.location.replace(<?php echo $_POST["destination"] ?>);</script>
  </body>
</html>