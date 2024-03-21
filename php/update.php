<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'loginregister');
$email = $_SESSION['email'];
$newemail = $_POST['newemail'];
$password = $_POST['newpass'];
$sql = "UPDATE registration SET Email= '$newemail' ,Password = '$password' WHERE Email = '$email'";
$query = mysqli_query($conn,$sql);
if($query){
    $_SESSION['email'] = $newemail;   
    $sql = "SELECT * FROM registration WHERE Email='$newemail' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['login'] ="OK";
        header("location:protected.php");
}
}


?>