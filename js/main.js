var image = document.getElementById('imgtrans')
var img = image.height / 4
var windowsSize = window.innerHeight * 0.12
var tailleIMAGE = img + windowsSize
var elementTitre = [document.getElementById('youtube'), document.getElementById('twitch'), document.getElementById('instagram')]

elementTitre.forEach(function(elem){
  console.log(elem)
  elem.style.paddingTop = String(tailleIMAGE) + "px"
}
);

var twitch = document.getElementById('twitch')
var titreTW = document.getElementById("titreTW")
var twitchPARA = document.getElementById("twitchPARA")
var twitchPL = document.getElementById("twitchPL")

twitch.style.height = titreTW.height + twitchPARA.height + twitchPL.height + 20

var transition1 = document.getElementById('transition1')
var transition2 = document.getElementById('imgtrans')
var transition3 = document.getElementById('transition3')

transition1.style.top = document.getElementById('header').height + document.getElementById('presentation').height
transition2.style.top = transition1.style.top + document.getElementById('youtube').height
transition3.style.top = transition2.style.top + document.getElementById('twitch')
