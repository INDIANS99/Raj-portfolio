<?php error_reporting(0);?>

<!DOCTYPE html>
    <html>
            <head>
                <title>Calculator</title>
                <link rel="stylesheet" type="text/css" href="http://localhost/cssw3school/calculator1.css" >
            </head>
            <?php
            //initializing operation variable and textbox1 and textbox2 values in post method
             $operation1 = $_POST['operation1'];
             $num1 = $_POST['num1'];
             $num2 = $_POST['num2'];
             //$operation = $_POST['submit'];
            //initializing switch case operation
             switch($operation1){

                 case "sum": $sum = $num1 + $num2;
                 $message= "the addition of two number is $sum";
                 break;
                 case "sub": $sub = $num1 - $num2;
                 $message= "the substraction of two number is $sub";
                 break;
                 case "mul": $mul = $num1 * $num2;
                 $message = "the multiplication of two number is $mul";
                 break;
                 case "div" : $div = $num1 / $num2;
                 $message = "the division of two number is $num";

                 break;
                 case "mod": $mod = $num1 /5 *100 ;
                 echo "num1 modulo is $mod";
                 break;
                 case "1/x" : $onebyx = 1/$num1;
                 echo "onebyx is $onebyx";
                 break;
                 case "+/-" : $plusmin = $num1/12;
                 echo "num is $plusmin";
                break;
                case "x2" : $x2 = $num1*$num1;
                echo "the x2 num is $x2";
                break;
                }



         ?>



        <body>
        <div class="box">
          <!-- geenerate a form in html-->
            <form name ="calculator" class="calculator" method="post" action = "calculator1.php"><br>


                <input type="text" name="num1" valid="num" id="num1" placeholder="Enter value1"><br><br>


                <input type="text" name="num2" valid="num" id = "num2" placeholder="Enter value2"><br><br>
                <select name="operation1" id = "operation1">
                    <option value="sum" >SUM</option>
                    <option value="sub" >SUB</option>
                    <option value="mul" >MUL</option>
                    <option value="div" >DIV</option>
                    <option value="mod" >MOD</option>
                    <option value="1/x" >onebyx</option>
                    <option value="+/-" >plusmin</option>
                    <option value="x2"> x2<option>

                </select>
<br>
                <?php echo '<p style="color:red; background-color:yellow; margin-bottom:70px ; margin-top:100px; padding-bottom:50px " >'.$message.'</p>' ?>
                <br>
                <input type="submit" name="submit" value="submit" id="submit">

                </form>
                </div>
                <p>
                <br><br>

                </p>
        </body>
    </html>
