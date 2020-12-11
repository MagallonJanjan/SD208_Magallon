<?php
include("helper.php"); 
session_start();
$conn = mysqli_connect('localhost','root','','information');
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());  
}
if(isset($_POST['delete'])){ 
    $base = $_POST['data']; 
    $sql = mysqli_query($conn,"DELETE FROM `data` WHERE Id = '$base'"); 
    mysqli_close($conn); 
    header('location: data.php'); 
}
if(isset($_POST['update'])){ 
    $_SESSION['firstname'] = $_POST['fdata'];
    $_SESSION['lastname'] = $_POST['ldata'];
    $_SESSION['email'] = $_POST['edata'];
    $_SESSION['password'] = $_POST['pdata'];
    $_SESSION['id'] = $_POST['data']; 
    header('location: update.php');

}

if(isset($_POST['add'])){
    header("location:registration.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Data</title>
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<style>

.table {
    width:90%;
    margin-left:5%;
    border: 1px solid #ddd;
}
.button{
    margin-right:-60px;
}
.email{
    margin-right:-90px;
}

#add{
    float:right;
    margin-right: 5%;
    width: 150px;
}


</style>
</head>
<body>
   <center> <h1>𝑅𝑒𝑔𝒾𝓈𝓉𝑒𝓇𝑒𝒹 𝒰𝓈𝑒𝓇𝓈</h1></center> <br>
        <form action="" method="POST">
            <button type="submit" class="btn btn-success" id="add" name="add">Add</button><br><br>
        </form>
    <table class="table table-bordered table-striped ">
        <tbody>  
            <tr class="table-primary">
                <th scope="col-4">Id</th>
                <th scope="col-4">First Name</th>           
                <th scope="col-4">Last Name</th>
                <th scope="col-4">Email Address</th>           
                <th scope="col-4">Action</th>
            </tr>
            
            <?php
            $get = mysqli_query($conn, "SELECT * FROM `data`");
            while($row = mysqli_fetch_assoc($get)){ 
            ?>
            <tr class="table-secondary">
            <td><?php  echo $row['Id'];?></td>
                <td><?php  echo $row['firstName'];?></td>
                <td><?php  echo $row['lastName'];?></td>
                <td class="email" ><?php  echo  $row['emailAddress'];?></td> 
                <form action="" method="POST">
                <td>
                
                    <div class="button"> 
                        <input type="hidden" name ="fdata" value="<?php  echo $row['firstName'];?>">
                        <input type="hidden" name ="ldata" value="<?php  echo $row['lastName'];?>">
                        <input type="hidden" name ="edata" value="<?php  echo $row['emailAddress'];?>">
                        <input type="hidden" name ="pdata" value="<?php  echo $row['password'];?>">
                        <input type="hidden" name ="data" value="<?php  echo $row['Id'];?>">
                        <button type="submit" class="btn btn-info" name="update">Update</button>
                        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                    </div>
                    
                </td>
                </form>
            </tr>
        <?php }?>
        </tbody>
    </table>
</body>
</html>