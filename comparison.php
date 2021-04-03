<!DOCTYPE html>

<html>
    <head>
        <title>
            Comparison php
        </title>
    </head>
    <body>
        <?php
            $a = 10; 
            $b = 10;
            echo $a == $b;
            
            echo "<br>";
            var_dump($a == $b);
        ?>
    </body>
</html>

<html>
    <head>
        <title>
            Assignment operator
        </title>
    </head>
    <body>
        <?php
            echo "<br><br><br>";
            $a = 10;
            $b = 10;
            var_dump($a===$b);
        ?>
    </body>
</html>
<html>
    <head>
        <title>
            Assignment operator
        </title>
    </head>
    <body>
        <?php
            echo "<br><br>";
            $a = 20;
            $b = 21;
            var_dump($a != $b);

        ?>
    </body>
</html>

<html>
	<head>
		<title>
			Comparision operator
		</title>
	</head>
	<body>
		<?php
			echo "<br><br><br><br>";
			$a = 5;
			$b = "8";
			var_dump($a<>$b);
		
		?>
	</body>
	
</html>
	
<html>
	<body>

	<?php
	$x = 100;  
	$y = "100";
	echo "<br><br>";
	var_dump($x !== $y); 
	?>  

	</body>
</html>

<html>
	<head>
		<title>comparison operator</title>
	</head>
	<body>
		<?php
	echo "<br><br><br><br><br>";
		$x = 100;
		$y = 50;

		var_dump($x > $y); 
		?>
	</body>
</html>

]<html>
	<title>
		comparison operator 
	</title>
	<body>
		<?php
		echo "<br><br><br>";
		$x = 10;
		$y = 50;

		var_dump($x < $y);
		?>
	</body>
</head>


<html>
	<head>
		<title>
			compariosn operator
		</title>
	</head>
	<body>
		<?php
		$x = 50;
	$y = 50;

	var_dump($x >= $y);
		?>
		
	</body>
</html>

<html>
	<head>
		<title>
			comparison operator
		</title>
	</head>
	<body>
	
		<?php
				$x = 50;
				$y = 50;
				echo "<br><br>";
				var_dump($x <= $y); 
		?>  
	
	</body>
</html>

<html>
	<head>
		<title>
			comparison operator
		</title>
	</head>
	<body>
			<?php
				echo "<br><br><br><br>";
				$x = 5;  
				$y = 10;

				echo ($x <=> $y); 
				echo "<br>";

				$x = 10;  
				$y = 10;

				echo ($x <=> $y); 
				echo "<br>";

				$x = 15;  
				$y = 10;

				echo ($x <=> $y); 
			?>  
	
	</body>

</html>
