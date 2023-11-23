<?php

class Crobot
{

    private $m1_s1 = 0;
    private $m1_s2 = 0;
    private $m2_s1 = 0;
    private $m2_s2 = 0;

    public function __construct()
    {
        $i = 0;
        $fp = fopen("GPIO.conf", "r");
        if ($fp) {
            while (($buffer = fgets($fp)) !== false) {
                $buffer = trim($buffer);
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
                $i++;
              echo($buffer) ;
            }
            fclose($fp);
        }


    }

    public function avancer($vitesse)
    {
shell_exec("./bash/avancer.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2 $vitesse"); 
echo("./bash/avancer.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2 $vitesse");
 }
    public function reculer($vitesse) {
 shell_exec("./bash/reculer.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2  $vitesse");
    }
    public function Tgauche() { 
        shell_exec("./bash/tgauche.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2");
    }
    public function Tdroite() {  shell_exec("./bash/tdroite.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2 ");;
    }
    public function stop()
    {
        shell_exec("./bash/avancer.sh $this->m1_s1 $this->m1_s2 $this->m2_s1 $this->m2_s2 0"); 
    }

}
