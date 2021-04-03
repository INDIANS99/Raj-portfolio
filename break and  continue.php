<!DOCTYPE html>

<html>
    <head>
    <title>Break and Continue php Program </title>
    
    </head>
<body>
    <?php
        for($i = 0; $i<=20; $i++)
        {
            if ($i == 4)
            {
                continue;
            }
      
        echo "The number is : $i<br>";
        }
    ?>
    &nbsp;
    <br><br>
    <?php

            for($i = 0 ; $i<5 ; $i++){
                if($i == 2)
                {
                    continue;
                    
                    
                }
                echo "<br><br>";
                echo "$i Hello Rajveer &nbsp;&nbsp;". "you are invited in php ";
            }
            
    ?>
    <br><br>
<?php
    for($j = 0 ; $j<=10 ; $j++)
            {
                 
                    if($j == 6 || $j == 8 || $j == 9|| $j == 10 )
                   
                    {
                        continue;
                 
                    
                    }
                    
                    echo "$j hello generate a new advanture <br>";
                }   
            
                
            
?>


   
</body>
</html>