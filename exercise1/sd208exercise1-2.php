<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>Chess board in PHP</h1><br>
<table width="500px" cellspacing="0px" cellpadding="0px" border="1px"></center>
    <?php

for($i=1; $i<=8; $i++){
    echo("<tr>");
    //echo 'John'."<br>";
    for($j=1; $j<=8; $j++){
        $totalcell = $i+$j;
        if($totalcell%2==0){
           echo "<td height=50px width=50px bgcolor=white></td>";
           //echo ' john';
        }
        else{
            echo "<td bgcolor=black></td>";
            //echo ' joseph';
        }
    }
   
}

    ?>
</body>
</html>