<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <?php
             function add($x, $y)
			  {
                 return ($x + $y);  }

             echo add (1, 2);
             echo "</br>";

             function substract($x, $y) 
			 {
                return ($x - $y);  }

            echo substract (3, 4);
 			echo "</br>";

             function multiply($x, $y) 
			 {
                return ($x * $y);  }

            echo multiply (4, 5);
            echo "</br>";

            function divide($x, $y) 
			{
                return ($x / $y);  }

            echo divide (5,6);
             
    ?>
</body>
</html>