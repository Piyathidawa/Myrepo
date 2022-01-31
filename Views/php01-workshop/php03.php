<!DOCTYPE html>
<html>
    <head>
        <title>php03</title>
    </head>
    <body>
        <?php
            $colors = array("red", "green", "yellow", "blue" ,"pink" ,"black" , "white");
            echo "MyArray Value : ";
            foreach ($colors as $value) {
                echo "$value ";
            }
            echo "<br>";
            echo "Expected Value : ";
            $reverse=array_reverse($colors);
            foreach ($reverse as $value) {
                echo "$value ";
            }
            echo "<br>";
                
        ?>
    </body>
</html>