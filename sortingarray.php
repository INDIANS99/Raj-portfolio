<?php
        $name = array("Abc","Rajveer", "kapilbhai" , "tirth" , "hardikbhai");
        sort($name);
        $clength = count($name);
        for($x = 0;$x < $clength;$x++ ){
          echo "$name[$x]";
          echo "<br>";
        }
 ?>
 <?php
        $numbers  =  array(1 , 22 , 33 , 44);
        sort($numbers);
        $arraylength = count($numbers);
        for($y = 0; $y < $arraylength; $y++){
          echo "$numbers[$y]";
          echo "<br>";
        }
  ?>
<?php
        $name = array("Rajveer","king","Boss");
        rsort($name);
        $clength = count($name);
        for($z = 0; $z < $clength; $z++){
          echo "$name[$z]";
          echo "<br>";
        }
 ?>
<?php
        $name = array(99 , 9 , 3);
        rsort($numbers);
        $arraylength = count($numbers);
        for($z = 0; $z < $arraylength; $z++){
        echo "$numbers[$z]";
        echo "<br>";
}
?>
<?php
      $age = array("Rajveer"=>"23","joe"=>"33","ddd"=>"33");
      asort($age);
      foreach($age as $a => $a_value){
        echo "key = ". $x .",Value=" .$a_value;
        echo "<br>";
      }

?>
<br><br>
<?php
      $age = array("Rajveer"=>"23","joe"=>"33","ddd"=>"43");
      ksort($age);
      foreach($age as $a => $a_value){
      echo "key = ". $x .",Value=" .$a_value;
      echo "<br>";
}
 ?>

 <br><br>
<?php
     $age = array("veer"=>"23","raj"=>"33","dwd"=>"43");
     arsort($age);
     foreach($age as $a => $a_value){
     echo "key = ". $x .",Value=" .$a_value;
     echo "<br>";
   }

 ?>
<br><br>

<?php
    $age = array("Rajveer"=>"23","joe"=>"33","ddd"=>"43");
    krsort($age);
    foreach($age as $a => $a_value){
    echo "key = ". $x .",Value=" .$a_value;
    echo "<br>";
}

?>
