     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="PHP_Calculater.php" method="GET">
	<input type="number" name="number1" /><br>
	<input type="number" name "number2"/><br>
    <input type="submit" name "printValue" value="show"/>
    </form>
</body>
</html> 
    <?php
             function add(number1, number2)
			  {
                 return (number1 + number2);  }

             echo add ($x , $y);
             echo "</br>";

             function substract($x, $y) 
			 {
                return ($x - $y);  }

            echo substract ($x , $y);
 			echo "</br>";

             function multiply($x, $y) 
			 {
                return ($x * $y);  }

            echo multiply  ($x , $y);
            echo "</br>";

            function divide($x, $y) 
			{
                return ($x / $y);  }

            echo divide  ($x , $y);
             
    ?>