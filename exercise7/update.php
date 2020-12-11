<?php

session_start();

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$emailAdd = $_SESSION['email'];
$password = $_SESSION['password'];

if(isset($_POST['Update'])){
    $conn = mysqli_connect('localhost','root','','information');
    $fName = $_POST['first'];
    $lName = $_POST['last'];
    $email = $_POST['newemail'];
    $password = $_POST['newpassword'];
    $base =  $_SESSION['id'];
    $sql= mysqli_query($conn, "UPDATE `data` SET firstName = '$fName' , lastName = '$lName' , emailAddress = '$email' , password = '$password' WHERE Id =  '$base'");
    mysqli_close($conn);
    header("location:data.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    
    body{
    background-color: #4CA2C4;
}

.registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color: white;
    max-width: 500px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
	text-align: center;
    background-color: #5891ff;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 20px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

</style>
</head>
<body>
    <div class="registration-form">
        <form action="" method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="first" placeholder="<?php echo $firstname; ?>" required="true">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="last" placeholder="<?php echo $lastname; ?>" required="true">
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" name="newemail" placeholder="<?php echo $emailAdd; ?>" required="true">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="newpassword" placeholder="password" required="true">
            </div>
            <div class="form-group">
                <button type="submit" name="Update" class="btn btn-block create-account">Update</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
​