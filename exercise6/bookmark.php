<?php 

session_start();

if(isset($_POST['add'])){
    $_SESSION['bookmark'][$_POST['bookmarks']] = $_POST['urls'];
}

if(isset($_POST['delete'])){
    unset($_SESSION['bookmark'][$_POST['mark']]);
}

if(isset($_POST['clear'])){
    $_SESSION['bookmark'] = array();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark</title>
    
<style>

body {
 background-image: url("https://cdn.hipwallpaper.com/i/55/34/0i2yhs.jpg");
 background-repeat:no-repeat;
 background-size:cover;
}


.input-group {
  width: 300px;
  padding: 50px;
  margin: 20px;
  width:500px;
  margin-left:300px;
  background-color:#ded5bb;
  font-size:18px;
}

table {
  padding: 50px;
  margin: 20px;
  width:600px;
  margin-left:300px;
  background-color:#c2b280;
}


h1{
    margin-top:-30px;
    margin-left:24%;
}

.mark{
    width:100%;
    height:30px;
    border-radius: 5px;
    border-color: 4px solid gray;
    
}

#button{
    float:right;
    background-color:#13A5E5;
    border: none;
    padding: 15px 32px;
    text-align: center;
    font-size: 14px;
    border-radius:5px;
    margin-right:-40px;

}


#button1{
    float:left;
    background-color:#d11a2a ;
    border: none;
    padding: 15px 32px;
    text-align: center;
    font-size: 14px;
    border-radius:5px;
    margin-left:300px;

}
#button:hover{
    opacity:0.8;
}

#button1:hover{
    opacity:0.8;
}

.button{
    float:right;
    margin-top:-15px;
    margin-right: 0px;
    background-color:#d11a2a;
    border:none;
    border-radius:3px;
    width:25px;
}

.button:hover{
    opacity:0.8;
}


</style>
</head>
<body>
    <div class="input-group">
        <h1> Adding Bookmark</h1>
        <form class="login" action="" method="post">
            <label for="bookmark">Name:</label><br>
            <input class="mark" type="text"  name="bookmarks"><br>
            <label for="url"> URL:</label><br>
            <input class="mark" type="text" name="urls"><br><br>
            <input id="button"type="submit" name="add" value="ADD">
            <input id="button1" type="submit" name="clear" value="CLEAR ALL">
        </form>
    </div>
    <div id="output">
<table >
    <thead>
        <tr>
             <th class="head1"> Your Bookmark</th> 
        </tr>
    </thead>
<tbody>

<?php
if(isset($_SESSION['bookmark'])){
foreach($_SESSION['bookmark'] as $bookmarkName =>  $bookmarkUrl ){ ?>
<tr>
       <td><a href="<?php echo 'https://'. $bookmarkUrl; ?>" target="_blank"> <?php echo $bookmarkName;?></a></td> 
       <form action="" method="POST">
       <td><input type="hidden" name="mark" value="<?php echo $bookmarkName; ?>"></td>
       <td><input class="button" type="submit" value="X" name="delete" ></td>
       </form>
    </tr>
<?php }}?>
</tbody>
</table>
</div>
</html>
</body>

