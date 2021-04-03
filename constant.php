
<html>
    <head>
        <title>CONSTANT program</title>
    </head>
    <body>
    <?php
        #error_reporting(0);
        echo "<br><br><br>";
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
    ?>
    </body>
</html>

<html>
    <head>
        <title>constant program</title>
    </head>
    <body>
    <?php
        define("GREETING", "Welcome to W3Schools.com!", true);
        echo "greeting";
    ?>
    </body>
</html>

<html>
    <head>
        <title>constant program </title>
    </head>
    <body>
    <?php
        define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
]);
        echo cars[0];
    ?>

    </body>
</html>

<html>
    <head>
        <title>constant program</title>
    </head>
    <body>
    <?php
        define("GREETING", "Welcome to W3Schools.com!");

        function myTest() {
        echo "GREETING";
}
 
        myTest();
?>

    </body>
</html>