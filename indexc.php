<?php
$insert=false;
if(isset($_POST['id'])){  
     $server="localhost";
     $username="root";
     $password="";
     $con=mysqli_connect($server,$username,$password);
     if(!$con)
     {
         die("connection to this database failed due to" . mysqli_connect_error());
     }
     // echo "Success connecting to the db"
     $state=$_POST['state'];
     $pincode=$_POST['pincode'];
     $id=$_POST['id'];
     $sql="INSERT INTO `vaccination registration system`.`centre` (`Pincode`, `State`, `ID`) VALUES ('$pincode', '$state', '$id');";
     //echo $sql;
     if($con->query($sql)==true)
     {
         //echo "Successfully Inserted";
         $insert=true;
     }
     else
     {
         echo "ERROR: $sql <br> $conn->error"; 
     }
     $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Registration System</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="Bg2.png" alt="Vaccination">
    <div class="containeer">
    <div class="logo">
            <img src="corbevax_img.svg">
        </div>
        <ul>
            <li>
            <a href="MAIN.html">Home</a>
                <a href="Contact_Us.html">Contact Us</a>
            </li>
        </ul>
        <h1><br><br>You can enter the details of your dependents if any.</h1>
            <a href="Dependent.html">
            <button class="btn" >Enter details of dependents</button>
            </a>
    </div>
</body>
</html>