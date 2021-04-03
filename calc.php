

<?php
error_reporting(0);?>


<html>
<head>

</head>   
<body>
<center>                
<?php

   $choice = $_POST['value'];
   //$a  =   10;
   //$b  =   30;
   $value1=$_POST['value1'];
   $value2=$_POST['value2'];
   
   $value3=$_POST['get_value'];
   echo "Ramesh".$value3;

   //echo "<br>enter value of   A  " .   $a;
   //echo "<br> enter value of  B  " .  $b;
   
   switch ($choice){
      case "+": 
      $value3 = ($value1 + $value2);
      
      break;
      case "-":
      #echo "<br>sub of A & B " . ($a - $b);
      $value3 = ($value1 - $value2);
      echo "ramesh".$value3;
      break;
      case "*":
      echo "<br>mul of A & B " . ($a * $b);
      break;
      case "/":
      echo "<br>Division of A & B ". ($a / $b);
      break;
      case "%":
      echo "<br>percentage of A & B <br> ".($a/40*100);
      break;
      default:
      echo "<br><br>";
      echo "wrong operaction you have performed";
  }   

   
?>
    
    
           <form method="post" action="calc.php"><br>
            <select name="value">
            <option value="+">+</option>
            <option value="-">-</option>
            </select>
            <input type="text" name="value1" value = <?php echo $value1;?>>
            <input type="text" name="value2">
<br>      
<br>      <input type="text" name="get_value" placeholder="Your Result" <?php echo $value3;?>>
            <input type ="submit" name="get_value" value="submit">        
         </form>
</center> 
</body>
</html>
<br><br>
