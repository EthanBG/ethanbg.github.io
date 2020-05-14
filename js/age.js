var mark = document.getElementById('age')

function getAge(date) {
       var diff = Date.now() - date.getTime();
       var age = new Date(diff);
       return Math.abs(age.getUTCFullYear() - 1970);
   }

var ageFin = getAge(new Date(2003, 7, 27))
mark.innerHTML = ageFin
