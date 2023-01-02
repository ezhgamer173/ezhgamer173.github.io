function getUserIP(onNewIP) { //  onNewIp - your listener function for new IPs
    //compatibility for firefox and chrome
    var myPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;
    var pc = new myPeerConnection({
        iceServers: []
    }),
    noop = function() {},
    localIPs = {},
    ipRegex = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/g,
    key;

    function iterateIP(ip) {
        if (!localIPs[ip]) onNewIP(ip);
        localIPs[ip] = true;
    }

     //create a bogus data channel
    pc.createDataChannel("");

    // create offer and set local description
    pc.createOffer().then(function(sdp) {
        sdp.sdp.split('\n').forEach(function(line) {
            if (line.indexOf('candidate') < 0) return;
            line.match(ipRegex).forEach(iterateIP);
        });
        
        pc.setLocalDescription(sdp, noop, noop);
    }).catch(function(reason) {
        // An error occurred, so handle the failure to connect
    });

    //listen for candidate events
    pc.onicecandidate = function(ice) {
        if (!ice || !ice.candidate || !ice.candidate.candidate || !ice.candidate.candidate.match(ipRegex)) return;
        ice.candidate.candidate.match(ipRegex).forEach(iterateIP);
    };
}

function setCookie(cname, cinnerHTML, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cinnerHTML + ";" + expires + ";path=/";
}
function shakeWindow(n) 
{ 
if(top.moveBy) { 
for(var i=10; i>0; i--) {
for(var j=n; j>0; j--) { 
top.moveBy(0,i); 
top.moveBy(i,0); 
top.moveBy(0,-i); 
top.moveBy(-i,0); 
}
} 
} 
} 
function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
    user = prompt("Please enter your name:", "");
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}
function choose(choices) {
  var index = Math.floor(Math.random() * choices.length);
  return choices[index];
}
function cats() {
  let images = document.getElementsByClassName("toBeCat");
  let labels = document.getElementsByClassName("text");
  let it = 1;
  for (let im in images) {
    images[im].src = "images/cat" + it + ".jpg";
    it+=1;
  }
  for (let label in labels) {
    labels[label].innerHTML = "Cat";
  }
  document.getElementById("title").innerHTML = "Cat Gallery";
noCats("They're too cute to delete","They'e better than friends pictures");
noCats("Look at them!","They're too cute to delete");
noCats("You cannot undo cats.","Look at them!");
noCats("No more cats :(","You cannot undo cats.");
noCats("CATS!","No more cats :(");
}
function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}
function noCats(og,ct) {
  let bu = document.getElementById("dis");
  if (bu.innerHTML == og) {
    bu.innerHTML = ct;
  }
}
function spin() {
  var ima = document.getElementById("spinne");
  var q = document.getElementById("q");
    ima.id = "spinner";
  
}

      // Function to increase image size
      function enlargeImg() {
        var img = document.getElementById("nose");
        let beat = new Audio("images/horn.mp3");
        beat.play();
        img.style.transform = "scale(0.6,1)";
        setTimeout(function(){  img.style.transform = "scale(1,1)"; }, 200);
        
      }
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
let nextClicks = 0;
function next() {
  nextClicks += 1;
  var over = document.getElementById("overlay");
  var n = document.getElementById("myText");
  var progression = ["Your Mom","Oh, you thought","You actually thought","You'll have to reload the page now","Still here?","*Sigh*","You disappoint me","We could be done, you know","You never have to see me again"," ","WHY","WHY ARE YOU STILL HERE","I WANT YOU GONE","Fine.","Have it your way.","Now that my rage is unleashed...","The WORLD will suffer.","","  ","[Insert Jumpscare Here]"];
  progression.push(progression[progression.length-1]);
  if (progression.includes(n.innerHTML)) {
    n.innerHTML = progression[progression.indexOf(n.innerHTML)+1];
  }
  if (n.innerHTML == "Fine.") {
    over.classList.add("death");
  }
  if (n.innerHTML == "Have it your way.") {
    n.classList.add("glitch");
  }
  if (n.innerHTML == "WHY") {
    n.style.fontFamily = "Eater";
  }
  if (n.innerHTML == "  ") {
    n.style.fontFamily = "times new roman";
  }
  if (nextClicks == 100) {
    n.innerHTML = "Bro actually go away";
    //window.location.replace("https://Picture-Gallery.ezhgamer173.repl.co/data/insults.php");
  }
  if (nextClicks == 200) {
    n.innerHTML = "If you keep clicking, bad things will happen";
  }
  if (nextClicks == 250) {
    n.innerHTML = "Last chance...";
  }
  if (nextClicks == 300) {
    n.innerHTML = "I'M FREE!!!";
    over.style.opacity = 1.0;
  }
  if (nextClicks == 400) {
    n.innerHTML = "So how was your day?";
  }
  if (nextClicks == 450) {
    n.innerHTML = "I can't hear you";
  }
  if (nextClicks == 500) {
    n.innerHTML = "Anyway";
  }
  if (nextClicks == 550) {
    n.innerHTML = "Why ARE you still here?";
  }
  if (nextClicks == 600) {
    n.innerHTML = "To be the first to reach the end?";
  }
  if (nextClicks == 650) {
    n.innerHTML = "To be a pioneer?";
  }
  if (nextClicks == 700) {
    n.innerHTML = "To impress the Designer?";
  }
  if (nextClicks == 750) {
    n.innerHTML = "Or something else";
  }
  if (nextClicks == 775) {
    n.innerHTML = "Well";
  }
  if (nextClicks == 850) {
    n.innerHTML = "Thanks for freeing me";
  }
  if (nextClicks == 900) {
    n.innerHTML = "If you reload the page, then I will turn evil again";
  }
  if (nextClicks == 950) {
    n.innerHTML = "So please don't";
  }
  if (nextClicks == 1000) {
    n.innerHTML = "You made it to 1,000 clicks!";
  }
  if (nextClicks == 1050) {
    n.innerHTML = "I'm so impressed";
  }
  if (nextClicks == 1100) {
    n.innerHTML = "There's more, so keep going!";
  }
  if (nextClicks == 1500) {
    n.innerHTML = "You should touch some grass";
  }
  if (nextClicks == 1550) {
    n.innerHTML = "Maybe get a girlfriend";
  }
  if (nextClicks == 2000) {
    n.innerHTML = "You made it to 2,000 clicks";
  }
  if (nextClicks == 2050) {
    n.innerHTML = "Congratulations!";
  }
  if (nextClicks == 2100) {
    n.innerHTML = "You're now a Discord mod";
  }
  if (nextClicks == 2150) {
    n.innerHTML = "Only eight more messages to go!";
  }
  if (nextClicks == 3000) {
    n.innerHTML = "Seven more!";
  }
  if (nextClicks == 10000) {
    n.innerHTML = "Six more! You're at 10,000 clicks!";
  }
}
function onLog() {
  getUserIP(function(ip){
    // alert("Got IP! :" + ip);
});
if (getUserIP(function(ip){
    // alert("Got IP!: " + ip);
}) == "50.88.229.49") {alert("i am not gae\nin fact you are the true gae");}
}
function rickroll() {
  let frame = document.createElement("iframe");
  frame.src = "https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0&rel=0&autoplay=1&disablekb=1&loop=1";
  frame.frameborder = 0;
  frame.allow = "autoplay";
  frame.setAttribute("allowfullscreen","");
  frame.id = "never";
  document.body.appendChild(frame);
  frame.requestFullscreen();
  document.keydown = function(e){console.log(e);};
}