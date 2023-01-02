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
$final = getIPAddress()." to ".$_GET["from"]."; ".date("m/d/Y")." at "."".date("h:i:s a")."\n";
fwrite(fopen("logs.txt","a"),$final);
if (getIpAddress() == "216.53.151.211") {
  echo '<script type="text/JavaScript"> 
     alert("NO YOU ARE GAE");
     </script>'
;
}
  echo '<script type="text/JavaScript"> 
     window.location.replace("'.$_GET["from"]."?check=false".'");
     </script>'
;
?>
<!DOCTYPE html>
<html>
  <body>
    
  </body>
</html>