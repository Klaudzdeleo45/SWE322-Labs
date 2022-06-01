<?php
  class Player {
      // we have 3 data members
      public $HP;
      public $Race;
      public $SpecialAttack;
      
      //we have 3 methods 
         function IncreaceDecreaceHP($HpValue) {
        $this->HP += $HpValue;
         }

         function DisplayInformation() {
           return "Player has $this->HP and coming from $this->Race";
         }

         function StarttAttack($value) {
            $attackType = $value;
            echo $attackType." Refsnes.<br>";
            
         }
            
         

    }

   $player = new Player;

   $player->HP = 99;
   echo "PLayer Health is" .$player->HP;
   echo "<br>";

   $player->IncreaceDecreaceHP(-9);
   echo "PLayer Health is" .$player->HP;
   echo "<br>";

   $player->IncreaceDecreaceHP(9);
   echo "PLayer Health is" .$player->HP;
   echo "<br>";


  $player->StarttAttack("Sword");
  $player->StarttAttack("Gun");
  $player-> StarttAttack ("RBG");
  
  ?>
