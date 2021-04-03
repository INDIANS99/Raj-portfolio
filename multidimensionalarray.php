<?php
        $studentinformation = array (array("name","rollno","address"),
        array("Rajveer","007","Visnagar"),array("Softconcept","company","Visnagar"));
        echo $studentinformation[0][0].": name is:" .$studentinformation[0][1].
        "address is:".$studentinformation[0][2]."<br><br>";
        echo $studentinformation[1][0].": name is:" .$studentinformation[1][1].
        "address is:".$studentinformation[1][2]."<br><br>";
 ?>
<?php
         $studentinformation = array (array("name","rollno","address"),
         array("Rajveer","007","Visnagar"),array("Softconcept","company","Visnagar"));
         for($row = 0; $row < 3;$row++){
           echo "<p><b>Row number $row</b></p>";
           echo "<ol>";
           for($col = 0; $col<3; $col++){
             echo "<li>".$studentinformation[$row][$col]."</li>";
           }
           echo "</ol>";
         }


?>
