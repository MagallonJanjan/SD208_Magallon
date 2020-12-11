<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <h1>Fizzbuzz</h1>
<?php

function fizzBuzz($i){
   
    if($i % 3 == 0 && $i % 5 == 0)
        {
            echo("Fizzbuzz");
        }
        elseif ($i % 5 == 0)
        {
            echo("Buzz");
        }
        elseif($i % 3 == 0)
        {
            echo("Fizz");
        }
        else
        {
        echo($i);
        }
    
    }

for($i = 1; $i <= 100; $i++){
    fizzBuzz($i);
    echo "<br>";
}



?>
</body>
</html>