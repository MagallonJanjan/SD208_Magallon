<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.box {
  background-color: #64AEB7;
  width: 300px;
  padding: 50px;
  margin-left: 380px;
  margin-top:80px;
  border: 1px solid;
  box-shadow: 5px 5px #888888;
}

</style>
<body>

<?php 
// session_start();
include ('formHandler.php');
?>
<div class="box">
<h1>Hello,<?php echo " " .  $_SESSION['fields'][0] . " ". $_SESSION['fields'][1];?></h1>
<h2>I am glad that you are from <?php echo $_SESSION['fields'][2]."."?></h2>
<h3>Here is your email address:</h3>
<h4><?php echo "<ins>". $_SESSION['fields'][3]. "</ins>"?></h4>
</div>



</body>
</html>