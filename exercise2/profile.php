<!-- <?php
    if(isset($_POST['logout'])){
       header("location:login.php");
        exit();
    }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
font-family: Arial;
margin: 0;
background-color: lightgrey;
}

hr{
    width:300px;
   
}

.header {
 position:relative;
 width: 95%;
 height: 300px;
 background-color:#1abc9c;
 padding: 2%;
}

.header img {
    height:85px;
    width:110px;
    border-radius:10px;
}

.header p{
text-align: center;
color: white;
font-size: 60px;
font-family: serif;
}

.header a{
margin-left: 2%;
float: right;
border-radius: 50%;
}

.header p1{
float:left

}

.prof{
position: absolute;
width: 800px;
height: 350px;
top: 150px;
margin-left: 19%;
background-color:white;

}
.image img{
width: 290px;
height: 350px;

}

.text{
display: inline-block;
font-size: 17px;
float: right;
margin-right: 24%;
}

#logout{
   margin-left:-220px;
   margin-top:-500px
   
}

</style>
</head>
<body>

<div class="header">
</div>

<div class="prof">
<div class="text">
<p><span>I'M<strong> JOSEPH JOHN</span></strong></p>
<p>Software Engineer and Ball Handler</p>
<hr>
<p><strong>Age:</strong> 1 3/4</p>
<p><strong>Address:</strong> Bohol, Philippines 6306</p>
<p><strong>Email:</strong> magallonjanjan@gmail.com</p>
<p><strong>Phone:</strong> 754-3010</p>
<p><strong>Hobby:</strong> Playing Basketball</p>
<p><strong>Website:</strong> https://www.ballislife.com </p>
</div>
<div class="image">
<img src="steph.jpg">
</div>
<form action="" method="post">
<div id="logout">
<a href="login.php"><img src="logout.png" alt="logout" 
width="70px" height="40px"></a>
</form>
 



</body>
</html>