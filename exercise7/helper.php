<?php

//Creating Connection
$conn = mysqli_connect('localhost','root','','information');
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){ // If the register button is clicked, below will execute

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $emailAdd = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['firstname'] = $_POST['firstname'];
// Query to insert data
$sql = "INSERT INTO `data`(`firstName`,`lastName`,`emailAddress`,`password`) VALUES ('$firstName', '$lastName', '$emailAdd','$password')";

if(mysqli_query($conn,$sql)){ 
    
    echo "<script> alert('New Record Created Successfully')</script>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);// Close connection

}

?>