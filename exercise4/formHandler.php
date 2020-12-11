<?php
session_start();

 $fName = $lName = $address = $emailAdd = "";
$error = array('fname' => '', 'lname' => '', 'address' => '', 'email' => '');
$regex = '/\S+@\S+\.\S+/';


if(isset($_POST['sent'])){
    
    $address = $_POST['address'];

    //Checking the length of firstname
    if(strlen(trim($_POST['fname'])) >= 2 and strlen(trim($_POST['fname'])) < 25){
        $fName = $_POST['fname'];
    }
    else{
        $error['fname'] = "*Characters must not less than 2 and not greater than 25*";

    }

    //Checking the length of lastname
    if(strlen(trim($_POST['lname'])) >=2 and strlen(trim($_POST['lname'])) < 25){
        $lName = $_POST['lname'];
    }
    else{
        $error['lname'] = "*Characters must not less than 2 and not greater than 25*";

    }

    //Checking the email
    if(empty($_POST['email'])){
        $error['email'] = "*Email Address is empty";
    }
        else{
                if(preg_match($regex, $_POST['email'])){
                    $emailAdd = $_POST['email'];
                }
                else{
                    $error['email'] = "*Email must be valid*"; 
        }   
}
    
    // Checking if there is an error  
    $isErr = false;
    foreach($error as $key => $val){
        if($val != ""){
            $isErr = true;
            break;
        }
    }

    if(!$isErr){
        $_SESSION['fields'] = array($fName, $lName, $address, $emailAdd);
        header("location: output.php");
    }else{
        //print_r($error);
    }
}

?>