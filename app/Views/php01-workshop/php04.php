<!DOCTYPE html>
<html>
    <head>
        <title>php04</title>
    </head>
    <body>
        <?php
            $input = "SoftwareEngineering";
            echo "Input : " .$input;
            echo "<br>";
            $aryInput = str_split($input);
            $len = strlen($input);
            $max = 0;
            for($i=0 ; $i<$len; $i++){
                $ch = $aryInput[$i];
                $num = substr_count($input,$ch);
                if($num > $max){
                    $max = $num;
                    $chmax = $aryInput[$i];
                }
            }    
            echo "Largest Character : " .$max. "<br>";     
            echo "For the Character : ". $chmax. "<br>";
        ?>
    </body>
</html>