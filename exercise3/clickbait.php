<?php
    define("TITLE","Honest Click-Bait Headlines");
    include("function.php");
     if( isset( $_POST["fix_submit"]) ) {
         checkForClickBait();
     }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <title>Clickbait to Honest!</title>
  </head>
  <body>
      
  <center>
    <div class="container">
<h1><?php echo TITLE; ?></h1>
<p class="lead">( Change fake headlines into honest headlines )</p>
<div class="row">
      <form class="col-sm8 col-sm" action="" method="post">
     
      <textarea placeholder="Paste Clickbait Headings Here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
        <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Change to Honest</button>
      </form>
    </div>
    </div>
    <!-- Bootsrap JS -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body></center>
</html>
        <?php   
        if (isset($_POST["fix_submit"])) {
          
            $clickBait = checkForClickBait()[0];
            $honestHeadline = checkForClickBait()[1];
            displayHonestHeadline($clickBait, $honestHeadline);  
        }
        ?>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>