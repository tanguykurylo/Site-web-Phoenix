
var localisation = document.getElementsByName("localisation");

var commandeindividuelle =  document.getElementById("commandeindividuelle");
var commandegroupe =  document.getElementById("commandegroupe");

commandeindividuelle.style.display = 'block';
commandegroupe.style.display = 'none';

for(var i = 0; i < localisation.length; i++) {
   localisation[i].onclick = function() {
     var val = this.value;
     if(val == 'maisel' || val == 'paris'){
        commandeindividuelle.style.display = 'block';
        commandegroupe.style.display = 'none';
     }
     else if(val == 'coloc'){
         commandeindividuelle.style.display = 'none';
         commandegroupe.style.display = 'block';
     }

  }
}
