<!doctype html>

<html>
	<head>
		<title>
			arrary operator
		</title>
	</head>
	<body>
		<?php
			$x = array("a" => "red", "b" => "green");  
			$y = array("c" => "blue", "d" => "yellow");  

			print_r($x + $y); 	
		?>
	</body>
</html>

<html>
<body>

		<?php
			$x = array("a" => "red", "b" => "green");  
			$y = array("c" => "blue", "d"	 => "yellow");  

				var_dump($x == $y);
				?>  

		</body>
</html>

<html>
	<body>

			<?php
			$x = array("a" => "red", "b" => "green");  
			$y = array("c" => "blue", "d" => "yellow");  

			var_dump($x === $y);
			?>  

</body>
</html>

<html>
	<body>

		<?php
			$x = array("a" => "red", "b" => "green");  
			$y = array("c" => "blue", "d" => "yellow");  

			var_dump($x != $y);
		?>  

	</body>
</html>

<html>
	<body>

		<?php
			$x = array("a" => "red", "b" => "green");  
			$y = array("c" => "blue", "d" => "yellow");  

			var_dump($x <> $y);
		?>  

	</body>
</html>

<html>
		<body>

			<?php
				$x = array("a" => "red", "b" => "green");  
				$y = array("c" => "blue", "d" => "yellow");  

				var_dump($x <> $y);
			?>  

		</body>
</html>

<html>
		<body>

			<?php
				$x = array("a" => "red", "b" => "green");  
				$y = array("c" => "blue", "d" => "yellow");  

				var_dump($x !== $y);
			?>  

		</body>
</html>