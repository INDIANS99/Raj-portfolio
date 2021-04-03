<br>
<?php
    $mysubject = array("MCAD","AdvanceJava","NMA");
    echo "mysubject is " .  $mysubject  [0].",".$mysubject [1] . "and".$mysubject [2] .".<br>"  ;
    $myfavcar = array("farari" , "marcedies" , "odi");
    echo "myfavcar is" . $myfavcar[0].",".$myfavcar[1]. "and" . $myfavcar[2] . ".";
 ?>
 <br><br>
 <?php
    $myfavcar = array("farari" , "marcedies" , "odi");
    echo "myfavcar is" . $myfavcar[0].",".$myfavcar[1]. "and" . $myfavcar[2] . ".";

 ?>
 <br><br>
 <?php
      $name = array("Rajveer","softconcept","prahladsharmasir");
      echo "entered name is ". $name[0].",".$name[1]."and" .    $name   [2] . ".";
  ?>

  <br><br>
<?php
      $phone = array("android" , "blackberry" , "ios--iphone");
      $arraylength = count($phone);
      for($x = 0; $x < $arraylength; $x++) {
        echo $phone[$x];
        echo "<br><br>";
      }

 ?>
