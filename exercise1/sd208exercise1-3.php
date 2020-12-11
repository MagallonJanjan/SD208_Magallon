<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Count Words</h1>
<?php 

    function countWords($str){
        $string = explode( " " ,strtolower($str));
        print_r(array_count_values($string));
    }
    countWords("I am Sakuragi and I am the genuis");

   

?>
</body>
</html>