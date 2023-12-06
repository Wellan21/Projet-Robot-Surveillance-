<script src="Ajax.js"></script>





<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="boutons-avancer">
        <button type="button" onclick="bouton('avancer.php?vit=')">
            <img src="image/avancer.png" alt="Avancer" width="80" height="80">
        </button>
    </div>
        <div class="boutons-reculer">
         <button type="button" onclick="bouton('reculer.php?vit=')">
            <img src="image/reculer.png" alt="Reculer" width="80" height="80">
        </button>
    </div>
    <div class="video-stream">
        <!-- <img src="http://10.121.41.107:8000/stream.mjpg"width="650" height="350"> -->
        <img src="http://<?php  echo $_SERVER["SERVER_ADDR"]; ?>:8000/stream.mjpg"> 

    </div>
    <div class="boutons-droit">
            <button type="button" onclick="bouton('Tdroite.php?vit=')">
                <img src="image/tourner_droite.png" alt="Tourner Droite" width="80" height="80">
            </button>
    </div>
    <div class="boutons-gauche">
            <button type="button" onclick="bouton('Tgauche.php?vit=')">
                <img src="image/tourner_gauche.png" alt="Tourner Gauche" width="80" height="80">
            </button>
    </div>
    <div class="boutons-stop">
            <button type="button" onclick="bouton('stop.php?vit=')">
                <img src="image/stop.png" alt="Stop" width="80" height="80">
            </button>
     </div>
            

<div class="vitesse">
<input type="range" id="vitesse" name="vitesse" min="20" max="200"  value="20"
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
</div>

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
