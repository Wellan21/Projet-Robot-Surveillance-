<?php 

$vitesse=$_GET["vit"]; 

$sens = $_GET["rota"]; 

echo"".$vitesse."   ".$sens."";
shell_exec("gpio 0 $sens");

shell_exec("gpio 1 $vitesse");