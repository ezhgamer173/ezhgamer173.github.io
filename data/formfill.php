<html>
  <body>
    <script src="scripts.js" type="text/javascript"></script>
    <script>setCookie("name", <?php echo $_GET["name"];?>)</script>
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
date_default_timezone_set("America/New_York");
$final = $_GET["name"]." at ".getIPAddress().";".date("m/d/Y")." at ".date("h:i:s a").": \"".$_GET["suggestion"]."\"\n";
fwrite(fopen("suggestions.txt","a"),$final)
?>
<script>window.location.replace("https://Picture-Gallery.ezhgamer173.repl.co");</script>
Thank you for your suggestion of "<?php echo $_GET["suggestion"]; ?>," <?php echo $_GET["name"];?><br>
<form action="index.php">
  <button name="back" type="submit">Back</button>
</form>
  </body>
</html>