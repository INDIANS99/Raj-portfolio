    <!DOCTYPE html>

    <html>
        <head>
            <title>
                generate calculator
            </title>
        </head>
        <body>
        
<form method ="POST" action="calculator.php" >
    <input type ="text" name="value">
    <input type ="submit" name ="submit" value = "submit">
</form>
<?php
$myfavcolor = $_POST['value'];
//echo 'ramersh'.$myfavcolor;
$a = 20;     
$b = 6;
echo "<br> value of A : ".$a;
echo "<br> value of B : ".$b;
////$operator = "+,-,*,/,%";
    switch ($myfavcolor){
        
        case "+": 
        echo "<br>sum of A & B " . ($a + $b);
        break;
        case "-":
        echo "<br>sub of A & B " . ($a - $b);
        break;
        case "*":
        echo "<br>mul of A & B " . ($a * $b);
        break;
        case "/":
        echo "<br>Division of A & B ". ($a / $b);
        break;
        case "%":
        echo "<br>percentage of A   ".( $a/25*100);
        break;
        #case "1/x":
         #   echo "<br>1/x of A";
        default:
        echo "wrong operaction you have performed";
    }

?>