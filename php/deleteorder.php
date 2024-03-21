<?php

session_start();
$conn = new mysqli('localhost', 'root', '', 'loginregister');

$id = intval($_GET['id']);
$sql ="DELETE FROM userorder WHERE ID= $id";
$result=mysqli_query($conn, $sql);
$result = $conn->query($sql);
header("location:protected.php");

?>
