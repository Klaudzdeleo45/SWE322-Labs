<?php
  class Player {
 
      public $HP;
      public $Race;
      public $SpecialAttack;
      
  
         function IncreaceDecreaceHP($HpValue) {
        $this->HP += $HpValue;
         }

         function DisplayInformation() {
           return "Player has $this->HP and coming from $this->Race";
         }

         function StarttAttack($value) {
            $attackType = $value;
            echo $attackType." .atacktype <br>";
            
         }
            
         

    }

   $player = new Player;
   
   echo "<br>";
   $player->HP = 100;
   echo "PLayer Health is" .$player->HP;
   echo "<br>";

   $player->IncreaceDecreaceHP(-8);
   echo "PLayer Health is" .$player->HP;
   echo "<br>";

   $player->IncreaceDecreaceHP(8);
   echo "PLayer Health is" .$player->HP;
   echo "<br>";


  $player->StarttAttack("DAGGER");
echo "<br>";
  $player->StarttAttack("KNIFE");
echo "<br>";
  $player-> StarttAttack ("GUN");
  
  ?>