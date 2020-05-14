var player = document.querySelector('#audioPlayer');
var btnON = document.getElementById("soundON");
var btnOFF = document.querySelector("#soundOFF");
var i = 0

function  soundOFF() {
  console.log("geve")
  btnON.style.top = "-100vw"
  btnOFF.style.top = "0.8vw"
  player.pause()
};

function soundON() {
  btnON.style.top = "0.8vw"
  btnOFF.style.top = "-100vw"
  player.play()
};

function piege(i) {
  if (i==5){
    document.location.href="hacked.html";
  }
  else{
    i+=1
  }
  return i
}
