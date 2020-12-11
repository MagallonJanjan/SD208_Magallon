<?php


session_start();

$bmi = $output = '';

if(isset($_POST['submit'])){

    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $output = "";

    if($weight == ''){
        echo "<script> alert('Invalid! Please complete the input field.')</script>";
    }
    elseif ($height == '') {
        echo "<script> alert('Invalid! Please complete the input field.')</script>";
        }

    else{
        $bmi = $weight /($height/100)**2;

        if ($bmi <= 18.5) {
            $output = "It means that you are underweight. You should eat healthy food and also have enough sleep.";
            }
        else if ($bmi > 18.5 AND $bmi<=24.9 ) {
            $output = "You seem to keep your weight normal. Well done!";
            } 
        else if ($bmi > 24.9 AND $bmi<=29.9) {
            $output = " You are Overweight. Try to maintain healthy diet.";
            }
        else if ($bmi > 30.0) {
            $output = "You are Obese.Try to maintain healthy diet. ";
            }  
        
            $_SESSION['fields'] = array($bmi, $output);
            header("location: output.php");
           
    }
}


if(isset($_POST['back'])){
    header("location:bmi.php"); 
}





?>