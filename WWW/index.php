<script src="Ajax.js"></script>

<img src="http://<?php 
echo $_SERVER["SERVER_ADDR"]; ?>:8000/stream.mjpg">
<button type="button" onclick="bouton('avancer.php?vit=')">Avancer</button>
<button type="button" onclick="bouton('reculer.php?vit=')">Reculer</button>
<button type="button" onclick="bouton('Tdroite.php?vit=')">Tourner a Droite</button>
<button type="button" onclick="bouton('Tgauche.php?vit=')">Tourner a Gauche </button>
<button type="button" onclick="bouton('stop.php?vit=')">Stop</button>

<input type="range" id="vitesse" name="vitesse" min="20" max="200"  value="100"
list="tickmarks">
<datalist id="tickmarks">
<option value="20"></option>
<option value="30"></option>
<option value="40"></option>
<option value="50"></option>
<option value="60"></option>
<option value="70"></option>
<option value="80"></option>
<option value="90"></option>
<option value="100"></option>
<option value="110"></option>
<option value="120"></option>
<option value="130"></option>
<option value="140"></option>
<option value="150"></option>
<option value="160"></option>
<option value="170"></option>
<option value="180"></option>
<option value="190"></option>
<option value="200"></option>
</datalist>


<script>
function bouton (commande) {
  
  var vitesse = document.getElementById("vitesse").value;
  $.ajax({
        url:commande+vitesse , //the page containing php script
        type: "POST", //request type
        success:function(result){
        //    alert(result)
       }
     });
 }
 </script><?php 
