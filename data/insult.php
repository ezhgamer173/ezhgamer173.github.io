<html>
  <body>
    
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
$final = getIPAddress().date("m/d/Y")." at ".";".date("h:i:s a")."; to ".$_GET["name"].": \"".$_GET["suggestion"]."\"\n";
fwrite(fopen("insults.txt","a"),$final)
?>
<script>window.location.replace("https://Picture-Gallery.ezhgamer173.repl.co");</script>
 Yes, get your anger out.<br><br>
<form action="index.php">
  <button name="back" type="submit" onclick="getip()">Back</button>
</form>
  <script>function json(url) {
  return fetch(url).then(res => res.json());
}

function getip() {let apiKey = '4d8a089312f6b93d9534d5a234f9a4b429754d6f447096cff6579023';
json(`https://api.ipdata.co?api-key=${apiKey}`).then(data => {
  console.log(data.ip);
  console.log(data.city);
  console.log(data.country_code);
  
  // so many more properties
});}</script>
  </body>
</html>