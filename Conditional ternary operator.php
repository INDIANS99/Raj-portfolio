<!Doctype html>

<html>
	<head>
		<title>
			conditional ternary operator
		</title>
	</head>
	<body>
		<?php
			echo $status = (	empty($user)) ? "anonymous":"logged in";
			echo "<br>";
			$user = "Rajveer Gupta ";
			echo $status = (empty ($user)) ?  "anonymous" : "logged in";	
			?>
	</body>
</html>

<html>
		<head>
			<title>
				conditional ternary operator
			</title>
		</head>
		<body>
			<?php
				echo $user =  $GET['user']  ?? "anonymous";
				echo ("<br>");
				echo $color = $color ?? "red";
			?>
		</body>
</html>