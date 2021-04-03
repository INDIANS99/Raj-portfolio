<html>
    <head>
        <title> if else statment</title>
    </head>
    <body>
        <?php
            $t = date("H");
            if ($t < "20") {
                echo "have a good day ! ";
            }
        ?>
        <br><br>
        <?php
            $a  = 4;
            if ($a == 5);
            {
                echo " number is mached";

            }
        ?>
        <br><br>
        <?php

            $a = 5;
            if ( $a == 5)
            {
                echo "Good morning";
            }
        ?>
        <?php
          /*  $a = $s["Good"];
            $b = $v["Morning"];
           if($a == $s and $b == $v){
               echo "Good". "Morning";
           }
           */
          $d = 5;
          $e = 10;
          
            if ($d == $e)
          {
              echo $d + $e; 
          }
        ?>
            <br><br>
        <?php

            $a = 5;
            $b = 6;
            if ($a !== 6)
            {
                echo "my name is rajveer";

            } 
            else {
                echo "no name included ";
            }
        ?>

    </body>
</html>