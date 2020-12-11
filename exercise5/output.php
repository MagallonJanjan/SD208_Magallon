<?php

include('helper.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-color:white;
}

.box {
  background-color: #AED6F1;
  width: 300px;
  border: 15px green;
  padding: 50px;
  margin-left: 500px;
  margin-top:60px;
}

.button {
  background-color: #9064AF;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left:60px;
}

.button:hover {background-color: #552EA9}

.doctor{
   margin-top:-500px;
}

</style>
<body>

<div class="box">
   <center><h1>Hello, Good Day!</h1><br>
   <h2>Your BMI result is: <?php echo $_SESSION['fields'][0]; ?></h2>
    <h2><?php echo $_SESSION['fields'][1];?> </h2></center> 
    <form action="" method="post">
    <button type="submit" class="button" name="back">Calculate Again</button>
    </form>
    </div>
    <div class="doctor">
    <img src="doc.jpg" alt="" style="height:550px;width:500px;">
    </div>
    
</body>
</html>