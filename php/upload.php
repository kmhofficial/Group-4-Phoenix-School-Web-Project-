<?php
session_start();

$email = $_SESSION['email'];
if (isset($_POST['uploadavatar'])) {
    $conn = new mysqli('localhost', 'root', '', 'loginregister');
    $filename =  @$_FILES["avatarimg"]["name"];
    $tempname = @$_FILES["avatarimg"]["tmp_name"];
    $folder ="../uploads/".$filename; 
    $sql = "UPDATE registration SET Avatar='$filename' WHERE Email = '$email'";
    move_uploaded_file($tempname,$folder);
    
    $query = mysqli_query($conn,$sql);
    if($query){
        header("location:http://localhost:8080/project/php/protected.php");
    }   
    }

    

   ?>

