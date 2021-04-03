<!DOCTYPE html>
<html>
    <head>
        <title>Numbers Program</title>
    </head>
    <body>
        <?php
            $x = 5555;
            var_dump(is_integer($x));
            echo "<br><br>";
            $x = 88.009;
            var_dump(is_integer($x));
        ?>
    </body>
</html>
<html>
    <head>
        <title>
        Numbers Program
        </title>
    </head>
    <body>
        <?php
            echo "<br><br><br>";
            $x = 20.78;
            var_dump(is_float($x));
        ?>
    </body>
</html>
<html>
    <head>
        <title>
            Numbers Program
        </title>
    </head>
    <body>
        <?php
            echo "<br><br><br>";
            $x = 1.9e77777777;
            var_dump($x);
        ?>
    </body>
</html>
<html>
    <head>
        <title>Numbers Programs</title>
    </head>
    <body>
        <?php
            $x = acos(8);
            var_dump($x);
        ?>
    </body>
</html>

<html>
    <head>
        <title>Numbers progrm</title>
    </head>
    <body>
        <?php
            $x = 100;
            var_dump(is_numeric($x));
            echo "<br><br>";
            $x = "5985";
            echo "<br><br>";
            var_dump(is_numeric($x));

            $x = "59.85" + 100;
            echo "<br> <br>";
            var_dump(is_numeric($x));

            $x = "Hello";
            echo "<br><br>";
            var_dump(is_numeric($x));

        ?>
    </body>
</html>