<!doctype html>

<html>
	<head>
		<title>
			string operator
		</title>
	</head>
	<body>
		
		<?php
		$txt1 = "Hello";
		$txt2 = " world!";
		echo $txt1 . $txt2;
		?>
	</body>
</html>

<html>
	<head>
		<title>
			string operator\
		</title>
	</head>
	<body>
		<?php
			$txt1 = "Hello";
		$txt2 = " world!";
		$txt1 .= $txt2;
		echo $txt1;
		?>
	</body>
</html>
