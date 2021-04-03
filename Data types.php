<!Doctype html>
<html>
    <head>
        <title>Data Types</title>
    </head>

<body>
    <?php 
        $x = 'hello world!';
        $y = "hello world!";
        echo $x;
        echo "<br>";
        echo $y;

    ?>
</body>
</html>
<html>
    <head>
        <title>Data Types</title>
    </head>
    <body>
    <br><br><br>
        <?php
            $x = 5935;
            var_dump($x);
        ?>
    </body>
</html>
<html>
    <head>
        <title>Data Types</title>
    </head>
    <body>
        <?php
            $x = 10.3333 ;
            $y = 33 ;
            $z = "Rajveer";
            $a = 0.0005;
            var_dump($x);echo "<br>";
            var_dump($y);echo "<br>";
            var_dump($z);echo "<br>";
            var_dump($a);echo "<br>";

        ?>
    </body>
</html>

<html>
    <head>
        <title>Data Types</title>
    </head>
    <body>
        <?php
        $cars = array ("volvo","bmw","toyoto");
        var_dump($cars);
        ?>
    </body>
</html>

<html>
    <head>
        <title>Data types</title>
    </head>
    <body>
        <?php
            class car{
                public $color;
                public $model;
                public function __construct ($color , $model) {
                $this->color = $color;
                $this->model = $model;

            }
            public function message() {
                return "my car is a &nbsp;".$this->color . " ".$this->model."!";

            }
            }
            echo "<br><br><br>";
            $mycar = new car ("black","volvo");
            echo $mycar -> message();
            echo "<br>";
            $mycar = new car("red","toyoto");
            echo $mycar -> message();
             ?>
    </body>

</html>
<html>
    <head>
        <title>Data types with null value</title>
    </head>
    <body>
        <?php
            echo "<br><br><br><br><br>";
            $x = "hello world!";
            $y = null;
            var_dump($x);

        ?>
    </body>
</html>
