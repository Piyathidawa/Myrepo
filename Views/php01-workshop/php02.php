<!DOCTYPE html>
<html>
    <head>
        <title>php02</title>
    </head>
    <body>
        <?php
            $input = 'SoftwareEngineering';
            echo "Input : " . $input . "<br>";
            echo "Expected Value : " ;
            echo strtr("$input","aeiouAEIOU","xxxxxxxxxxx");
        ?>
    </body>
</html>