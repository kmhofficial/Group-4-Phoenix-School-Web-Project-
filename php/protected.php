<?php
session_start();
if ($_SESSION["login"] != "OK") {
    header("Location:http://localhost:8080/project/index.php");
    exit;
}
?>
<?php

$conn = new mysqli('localhost', 'root', '', 'loginregister');
if ($conn->connect_error) die;
include("loginandregister.php");
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM registration WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
?>

    <!DOCTYPE html>

    <head>
        <title></title>
        <link href='../css/index.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    </head>

    <body>
        <div class="protected-page">
            <div class="navbar-protect">
                <div class="sidemenubtn">
                    <input type="checkbox" id="menucheck" onclick="sidemenu()"><i class="fa-solid fa-bars fa-2x" id="bars"></i>
                </div>
                <div class="logo">
                    <a href="">Phoenix</a>
                    <img src="/project/media/index/logo.gif">
                </div>
                <nav>
                    <ul id="menuitems" class="menubox">
                        <li><a href="http://localhost:8080/project/pj/pc_laptop.php"><i class="fa-solid fa-computer"></i>PC & Laptops</a></li>
                        <li><a href="http://localhost:8080/project/html/games.php"><i class="fa-solid fa-gamepad-modern"></i>Games</a></li>
                        <li><a href="http://localhost:8080/project/Nine/HTML/about%20us.html"><i class="fa-regular fa-address-card"></i></i>About</a></li>
                        <li><a href="http://localhost:8080/project/Nine/HTML/contactus.html"><i class="fa-regular fa-phone-volume"></i>Contact Us</a></li>
                    </ul>
                </nav>

                <button class="loginbtn" name="loginuser" style="width:auto;">Login
                </button>
            </div>
            
            <div class='user-box'>
                <div class="user-info">
                    <div class="user-edit" id="editbox">
                        <h1>Edit Profile</h1>
                        <form class="update" method="post" action="update.php">
                            <label>Email</label>
                            <input type="text" name="newemail">
                            <label>New Password</label>
                            <input type="password" name="newpass">
                            <button type="submit" class="update-btn">Update</button>

                        </form>

                    </div>
                    <div class="user" id="userbox">
                        <h1>Profile</h1>
                        <?php

                        if ($row = $result->fetch_assoc()) {
                            $_SESSION['id'] = $row['ID'];
                        ?>
                            <?php if ($row['Avatar'] != null) {

                            ?> <img src="../uploads/<?php echo $row['Avatar'] ?>" class="avatarimg" />';
                            <?php
                            } else {
                                echo "<i class='fa-solid fa-user fa-3x'></i>";
                            }
                            ?>
                            <form class="avatarimageform" action="../php/upload.php" enctype="multipart/form-data" method="post">
                                <div class="avatarimageicon">
                                    <i class="fa-regular fa-camera"></i>
                                    <input type="file" class="avatarimgfile" name="avatarimg">
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                    <defs>
                                        <filter id="gooey">
                                            <!-- in="sourceGraphic" -->
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                                            <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                                            <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                                        </filter>
                                    </defs>
                                </svg>

                                <button id="gooey-button" type="submit" name="uploadavatar">
                                    Upload
                                    <span class="bubbles">
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                        <span class="bubble"></span>
                                    </span>
                                </button>

                            </form>
                            <h1><?php
                                echo  $row['firstName'] . " " . $row['lastName'];
                                ?></h1>
                            <h3><?php if ($row["Account"] == "Admin") {
                                ?><span class="admin"><?php echo $row['Account']; ?></span> <?php
                                                                                        } else {
                                                                                            echo "User";
                                                                                        }
                                                                                            ?>
                            </h3>
                            <p><?php echo $row['Email']; ?></p>
                    </div>
                    <div class="profile-btns">
                        <button class="edit-btn" name="edit" value="OFF" id="edit">Edit</button>
                        <form method='post'>
                            <div>
                                <button class="logout-btn" name="logout" value="logout">Logout</button>
                            </div>
                        </form>
                    </div>
                <?php
                        }
                ?>
                </div>

            </div>
            <?php
            if ($row["Account"] == "Admin") {
            ?>

                <table border="1" class='usertable'>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Card Number</th>
                        <th>Card Date</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM registration");
                    while ($row = $result->fetch_assoc()) { ?>

                        <tbody>
                            <tr>
                                <td><?php echo $row['firstName'] . $row['lastName'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Password'] ?></td>
                                <td><?php echo $row['CardNumber'] ?></td>
                                <td><?php echo $row['CardDate'] ?></td>
                                <td><a href="delete.php?action=delete&id=<?php echo $row['ID']; ?>"><button class="delete-user"></button></a></td>
                            </tr>
                        <?php }


                        ?>
                        </tbody>
                </table>

                <table border="1" class='usertable2'>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM userorder");
                    while ($row = $result->fetch_assoc()) { ?>

                        <tbody>
                            <tr>
                                <td><?php echo $row['Name']?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Address'] ?></td>
                                <td><?php echo $row['Product'] ?></td>
                                <td><?php echo $row['Price'] ?></td>
                                <td><a href="deleteorder.php?action=delete&id=<?php echo $row['ID']; ?>"><button class="delete-user"></button></a></td>
                            </tr>
                    <?php }
               
                    ?>
                        </tbody>
                </table>
                <?php
                    }
                    else if  ($row["Account"] == ""||$row["Account"] == NULL ) {                             
                    ?>
                    <table border="1" class='usertable2'>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM userorder WHERE Email = '$email'");
                    while ($row = $result->fetch_assoc()) { ?>

                        <tbody>
                            <tr>
                                <td><?php echo $row['Name']?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Address'] ?></td>
                                <td><?php echo $row['Product'] ?></td>
                                <td><?php echo $row['Price'] ?></td>
                                <td><a href="deleteorder.php?action=delete&id=<?php echo $row['ID']; ?>"><button class="delete-user"></button></a></td>
                            </tr>
                    <?php }
               
                    ?>
                        </tbody>
                </table>
                <?php
                    }
                    ?>


        </div>

        <script>
            var editprofile = document.getElementById('edit');
            var profilebox = document.getElementById('userbox');
            var editbox = document.getElementById('editbox');

            editprofile.addEventListener('click', (e) => {
                if (editprofile.value == "OFF") {
                    editprofile.value = "ON";
                    profilebox.style.display = "none";
                    editbox.style.display = "block";
                } else if (editprofile.value == "ON") {
                    profilebox.style.display = "block";
                    editprofile.value = "OFF";
                    editbox.style.display = "none";
                }

            })
        </script>
        <script src="../javascript/index.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>

    </html>
<?php
}
?>