<?php

include("connection.php");
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scxale=1.0">
    <title>Kathmandu BernHardt College</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/fba8fac12b.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link rel="icon" type="image/x-icon" href="images/fav.jpg">

    

</head>

<body>

    <section class="header">
        <nav>
            <a href="index.html"><img src="images/header_logo.png" alt="logo"></a>

            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about-section">ABOUT</a></li>
                    <li><a href="">COURSE</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="">CONTACT</a></li>
                    <li><a href="login.php">Login/Signup</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>
    
        <div id="error"></div>
        
        
        <div class="login-form">
            <h2>Admin Login</h2>

            <form method="POST">
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="AdminName" value="" placeholder="Admin Name" name="AdminName">
                    
                   

                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="AdminPassword" value="" placeholder="Password" name="AdminPassword">

               
                </div>

                <button type="submit" name="signin">Sign in</button>

                <div class="extra">
                    <a href="#">Forgot password ? </a>
                </div>
            </form>
        </div>

        <?php
        $username = $password = '';
        $errors = array('AdminName'=>'','AdminPassword'=>'');
        if (isset($_POST['signin'])) {
            $username = $_POST['AdminName'];
            $password = $_POST['AdminPassword'];
        
            $query = "SELECT * FROM admin WHERE Admin_name = '$username' && Admin_password = '$password' LIMIT 1 ";
            $result = mysqli_query($conn, $query);
            $count = mysqli_num_rows($result);
            if($count>0)
            {
                // echo "login Successful";
                session_start();
                $_SESSION['AdminLoginId'] =  $username;
                header("location:dashboard.php");
            }else if($username==null||$username==""){
                echo "<script>alert('Please Enter Admin Name!!')</script>";
            }else if($password==null||$password==""){
                echo "<script>alert('Password field is Empty!!')</script>";
            }
            else{
                echo "<script>alert('Inncorrect Password')</script>";
            }
            
            mysqli_close($conn);
           
        }
        
    ?>


</body>

</html>