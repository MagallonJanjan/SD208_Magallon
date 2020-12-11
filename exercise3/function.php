<?php

function checkForClickBait() {
        
        $clickBait = strtolower($_POST["clickbait_headline"]);
        
        $fake = array (
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "tricked",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable",
            "handsome"
            
        );
    
        $honest = array (
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
             "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal", 
            "handsome - what a scam"
        );
        
        $honestHeadline = str_replace($fake, $honest, $clickBait);
            
        return array ($clickBait, $honestHeadline);
        
}

function displayHonestHeadline($x, $y) {
    echo "<strong class ='text-danger'>Original Headlines</strong><h4>".ucwords($x)."</h4><hr>";
    echo "<strong class ='text-success'>Honest Headlines</strong><h4>".ucwords($y)."</h4>";
       
}




?>