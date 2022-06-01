<?php
class SimpleClass
{
   public $var1 = 'hello ' . 'world';
   public $var2 = <<<EOD

EOD;
   public $var3 = 1+2;
   
   public $var4 = self::myStaticMethod();
   public $var5 = $myVar;

  
   public $var6 = myConstant;
   public $var7 = [true, false];

   public $var8 = <<<'EOD'

EOD;

  
   static $var9;
   readonly int $var10;
}
?>