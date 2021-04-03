<!Doctype html>

	<html>
		<head>

		</head>
		<body  bgcolor="gray">
			
		</body>
	</html>
	<html>
		<head>
			<title>Variables program</title>
			
		</head>
		<body>
		<h1 text align ="center">Variable Program no.1</h1>
		<?php
		$txt = "hello world";
		$x = 5;
		$y = 10.5;
		echo $txt;
		echo "<br>";
		echo $x;
		echo "<br>";
		echo $y;
		?>
		</body>
	</html>
	<html>
		<head>
			<title>Variable Program</title>
		</head>
		<body>
			<h1 text align ="center">Variable Program no.2</h1>
			<?php
				$txt = "w3schools.com";
				echo "I love".$txt."!";
			?>
		</body
</html>

<html>
	<head>
		<title>Variable Program </title>
		
	</head>
	<body>
		<?php
			$x = 5;
			$y = 10;
			echo $x+$y;
		?>
	</body>
</html>
<html>
	<head>
		<title>variable program</title>
	</head>
	<body>
		<h1 text align="center">variable with global scope</h1>
		<?php
		$x = 5;  // global scope 
		function test(){
			#using x inside  this function will generate an error 
				echo "<p> variable  x inside function is : $x</p>";
		}
		test();
		echo "<p>  variable  x outside  function  is : $x</p>";
		?>
	</body>
</html>

	<html>
		<head>
			<title>Variables Program</title>
			<h1 text align="center"> Variable with local </h1>
			<?php
			function varia(){
			$x = 5; # local scope
			echo "<p> variable  x inside function  is $x</p>";
			} 
			varia ();
			#using x  outside the function will generate error 
			echo "<p>varaible  x outside function is  :$x</p>";
			?>
		</head>
		<body>
			
		</body>
	</html>
	<html>
		<head>
			<title>variable </title>
		</head>
		<body>
			<h1 text align="center">varible with global</h1>
			<?php
			$x = 5;
			$y = 10;
			function mytest(){
				global $x, $y;
				$y = $x + $y;
			}
			mytest();
			echo $y;// output  15 
			?>
		</body>
	</html>
	
	<html>
		<head>
			<title> Varibale </title>
		</head>
		<body>
			<h1 text align="center"> variable with global </h1>
			<?php
			$x = 5;
			$y = 10;
			function vr(){
				$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
			}
			vr();
			echo $y; //output 15
			
			?>
		</body>
	</html>
	<html>
		<head>
			<title>Variables Program </title>
		</head>
		<body>
			<?php
				function php() {
					static $x = 0;
					echo $x;
					$x++;


				}
				php();
				php();
				php();
			?>
		</body>
		</html>
	

