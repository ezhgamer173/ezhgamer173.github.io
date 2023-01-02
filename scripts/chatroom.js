function getNameFromId() {
  alert("ran");
  readTextFile("/data/chatroom/IDS.json", function(text){
    var data = JSON.parse(text);
    alert(data);
});
}
function readTextFile(file)
{
  alert("start");
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", "/data/chatroom/chats/"+file+".txt", false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                alert(allText);
            }
        }
    };
    rawFile.send(null);
}
function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}
