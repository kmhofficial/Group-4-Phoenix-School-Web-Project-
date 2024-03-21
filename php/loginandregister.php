<?php
if (array_key_exists('register-btn', $_POST)) {
    register();
}

function register()
{
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $Email = $_POST['registeremail'];
    $Password = $_POST['psw1'];
    $CardNumber = $_POST['cardnumber'];
    $CardMonth = $_POST['month'];
    $CardYear = $_POST['year'];
    $CardDate = $CardMonth . "/" . $CardYear;
    $CardCode = $_POST['securitycode'];
    $CardOwnerFirstname = $_POST['cardownerfirstname'];
    $CardOwnerLastname = $_POST['cardownerlastname'];
    $City = $_POST['city'];
    $BillingAddress1 = $_POST['billindaddress1'];
    $BillingAddress2 = $_POST['billindaddress2'];
    $ZipCode = $_POST['zipcode'];
    $Phnumber = $_POST['phnumber'];
    $conn = new mysqli('localhost', 'root', '', 'loginregister');

    $checkusr ="SELECT * FROM `registration` WHERE Email = '$Email'";
    $result = mysqli_query($conn,$checkusr);

    
    if ($conn->connect_error) {
        die('connection fail' . $conn->connect_error);
    }if(mysqli_num_rows($result)>0){
       ?> 
       <html>
        <head>
            <link rel="stylesheet" href="../css/index.css">
        </head>
       </html>
       <div class="emailduplicate">
        <h1>
            <?php echo "Email Already Taken";?>
        </h1>
    </div> 
    <?php
    }
        else {
        $slmt = $conn->prepare(
            "insert into registration(firstName,lastName,Email,Password,CardNumber,
        CardDate,CardCode,CardOwnerFirstname,CardOwnerLastname,City,BillingAddress1,BillingAddress2,ZipCode,Phnumber)
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
        );
        $slmt->bind_param(
            "ssssssisssssii",
            $firstName,
            $lastName,
            $Email,
            $Password,
            $CardNumber,
            $CardDate,
            $CardCode,
            $CardOwnerFirstname,
            $CardOwnerLastname,
            $City,
            $BillingAddress1,
            $BillingAddress2,
            $ZipCode,
            $Phnumber
        );
        $slmt->execute();
        $slmt->close();
        $conn->close();
        ?>
        <html>
        <head>
            <link rel="stylesheet" href="../css/index.css">
        </head>
       </html>
       <div class="emailcreate">
        <h1>
            <?php echo "Email Registered";?>
        </h1>
    </div> 
    <?php
        exit;
    }
}
?>

<?php
if (array_key_exists('login-btn', $_POST)) {
    login();
}
function login()
{
    $conn = new mysqli('localhost', 'root', '', 'loginregister');
    $email = $_POST['loginemail'];
    $password = $_POST['loginpass'];
    $sql = "SELECT * FROM registration WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($conn->connect_error) {
        die('connection fail' . $conn->connect_error);
    }
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['login'] ="OK";
        header("location:protected.php");
        ?>

        
<?php
    } else {
        header("location:http://localhost:8080/project/index.php");
    }
}

?>


<?php

if (isset($_POST["logout"])) {
    session_destroy();
    header("location:http://localhost:8080/project/index.php");
    exit;
}
?>

