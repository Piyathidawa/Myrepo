<!DOCTYPE html>
<html>
    <head>
        <title>php01</title>
    </head>
    <body>
        <?php
            date_default_timezone_set("Asia/Bangkok");
            $day = date(" l d/m/Y");
            echo "Today is ".$day."<br>";
        ?>
    </body>
</html>