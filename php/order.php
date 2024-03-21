<?php
if (array_key_exists('orderproduct', $_POST)) {
    order();
}
?>
<?php

function order()
{
    session_start();

    if (@$_SESSION["login"] != "OK") {
        ?>
        <html>
        <head>
            <link rel="stylesheet" href="../css/index.css">
        </head>
       </html>
       <div class="emailduplicate">
        <h1>
            <?php echo "Please Login or Register account";?>
        </h1>
    </div> 
    <?php
    echo "<script> window.setTimeout(function() { top.window.location = '../index.php';},4000)</script>";
    exit;
    }

    $conn = new mysqli('localhost', 'root', '', 'loginregister');
    $Email = $_SESSION['email'];
    $prodname = $_POST['prodnames'];
    $prodprice =@$_POST['totalprice']."$";
        $sql = "SELECT * FROM registration WHERE Email='$Email' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            if ($row = $result->fetch_assoc()) {
                $row['firstName'];
                 $row['lastName'];
              $name = $row['firstName'].$row['lastName'];
              $row['Email'];
               $row['BillingAddress1'];
             $prodname;
              $prodprice;                
                $slmt = $conn->prepare(
                    "insert into userorder(Name,Email,Address,Product,Price)
                values(?,?,?,?,?)"
                );
                $slmt->bind_param(
                    "sssss",
                    $name,
                    $row['Email'],
                    $row['BillingAddress1'],
                    $prodname,
                    $prodprice

                );
                $slmt->execute();
                $slmt->close();
                $conn->close();
                
            }
        }
    
    
}
        

?>