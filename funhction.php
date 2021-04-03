    <!DOCTYPE html>
    <html>
        <head>
            <title>
                function program 
            </title>
        </head>
        <body>
        <br>
            <?php
                function hello(){
                    echo "hello welcome to new php world <br>";
                    
                }
                echo "<br>";
                hello();
                hello();
                hello();
                hello();
            ?>

            <?php
                function mysubjects($ListofSubjects){
                    echo "$ListofSubjects <br>";
                }
                mysubjects("mcad");
                mysubjects("coa");
            ?>

                <br>
            <?php
                function computer($Name , $Fieldname , $LanguageName , $year , $CollegeUniversityName){
                    
                    echo "$Name .  $Fieldname . $LanguageName . $year . $CollegeUniversityName . <br><br>"; 
                        
                }     
                    computer("Rajveer" , "Computer" , "CC++" , "2015-2016" , "SK" );
            
            ?>
            <?php
                function sum(int $x , float $y){
                    $z = $x + $y;
                    return $z;

                }
                echo "5 + 10.5 = " . sum(5,10.5) . "<br>";
            ?>
            <?php
             //declare(strict_types = 1);
            function  addNumber(float $a , float $b) : int{
                return (int)($a + $b);  
            }
            echo "<br>";
            echo addNumber(1.2,5.2);
            
            ?>
            <?php
                function add_five(&$value){
                    $value += 5;

                }   
                $num = 2;
                add_five($num);
                echo $num;      
            
            ?>


                <!--generate a calculater in php program-->
                <!--first operation name is Addition-->
            
                
                
                
                
                
            





        </body>

    </html>