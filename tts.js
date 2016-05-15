function playTTS(read,lang) {
   var tts="tts";
   var sec="audio/recs/point1sec.mp3";
   var a = new XMLHttpRequest();
   var b = document.getElementById("tts");
   var read = read.replace(/&/g,"and");
   var url = tts+".class.php";
   b.src=sec;
   b.play();
   a.open("POST", url, true);
   a.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   a.setRequestHeader("Connection", "close");
   a.onreadystatechange = function() {
	if(a.readyState == 4 && a.status == 200) {
	  b.src=a.responseText;
	}
   }
a.send("read="+ read +"&lang="+lang);
}
function stopTTS() {
     var a = document.getElementById("tts");
     a.pause();
     a.currentTime = 0;
}

function pauseTTS() {
     var a = document.getElementById("tts");
     a.pause();
}
function resumeTTS() {
     var a = document.getElementById("tts");
     a.play();
}
document.write('<audio id="tts" autoplay><source src="audio/recs/point1sec.mp3" type="audio/mp3" /></audio>');