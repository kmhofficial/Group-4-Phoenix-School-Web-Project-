<?php
if (array_key_exists('contact-btn', $_POST)) {
    send();
}
function send(){
    $name =  $_POST['fn'].$_POST['ln'];
    $email = $_POST['email'];
    $phone =$_POST['phone'];
    $text = $_POST['text'];

    $conn = new mysqli('localhost', 'root', '', 'loginregister');
    if ($conn->connect_error) {
        die('connection fail' . $conn->connect_error);
    }
    else {
        $slmt = $conn->prepare(
            "insert into contactus(Name,Email,Phone,Message)
        values(?,?,?,?)"
        );
        $slmt->bind_param(
            "ssss",
            $name,
            $email,
            $phone,
            $text
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
            <?php
            echo "Message Sent";
            ?>
        </h1>
    </div> 
    <?php
}
}
?>