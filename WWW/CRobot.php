<?php

class Crobot
{

    // Déclaration des variables privées pour les signaux des moteurs
    private $m1_s1 = 0;
    private $m1_s2 = 0;
    private $m2_s1 = 0;
    private $m2_s2 = 0;

    // Constructeur de la classe
    public function __construct()
    {
        $i = 0;
        
        // Ouverture du fichier de configuration GPIO.conf
        $fp = fopen("GPIO.conf", "r");
        
        // Vérification de l'ouverture réussie du fichier
        if ($fp) {
            // Lecture du fichier ligne par ligne
            while (($buffer = fgets($fp)) !== false) {
                $buffer = trim($buffer);
                
                // Attribution des valeurs lues aux variables appropriées en fonction de la ligne
                if ($i == 0) {
                    $this->m1_s1 = $buffer;
                }
                if ($i == 1) {
                    $this->m1_s2 = $buffer;
                }
                if ($i == 2) {
                    $this->m2_s1 = $buffer;
                }
                if ($i == 3) {
                    $this->m2_s2 = $buffer;
                }
                
                // Incrémentation du compteur $i
                $i++;
            }
            
            // Fermeture du fichier
            fclose($fp);
	shell_exec("./bash/init.sh");
        }
    }

    // Méthode pour faire avancer le robot avec une vitesse donnée
    public function avancer($vitesse)
    {
        // Exécution d'un script bash pour faire avancer le robot avec les signaux des moteurs
        shell_exec("./bash/avancer.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2 $vitesse"); 
        
      
    }

    // Méthode pour faire reculer le robot avec une vitesse donnée
    public function reculer($vitesse)
    {
        // Exécution d'un script bash pour faire reculer le robot avec les signaux des moteurs
        shell_exec("./bash/reculer.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2  $vitesse");
    }

    // Méthode pour faire tourner le robot à gauche
    public function Tgauche()
    { 
        // Exécution d'un script bash pour faire tourner le robot à gauche avec les signaux des moteurs
        shell_exec("./bash/tgauche.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2");
    }

    // Méthode pour faire tourner le robot à droite
    public function Tdroite()
    {  
        // Exécution d'un script bash pour faire tourner le robot à droite avec les signaux des moteurs
        shell_exec("./bash/tdroite.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2");
    }

    // Méthode pour arrêter le robot
    public function stop()
    {
        // Exécution d'un script bash pour arrêter le robot avec les signaux des moteurs
        shell_exec("./bash/avancer.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2 0"); 
    }

}
