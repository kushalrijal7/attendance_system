<?php
require 'connection.php';
session_start();
if (($_SESSION["status"]!=true))  
{
    header("location:./login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="./style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="icon" type="image/x-icon" href="images/fav.jpg">
    <!-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css"> -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <style>
        .welcome {
            color: white;
            font-family: poppins;
            /* background-color: #6495ed; */
            text-align: center;
        }

        .form {
            text-align: center;
            color: white;
            padding: 35px;
        }

        .output {
            color: white;
        }

        .cmnt {
            color: white;
        }

        .commnent{
            font-weight: bold;
        }

        .comment-box{
            padding: 25px 0px;
        }
    </style>

</head>


<body>
    <section class="header">
        <nav>
            <a href="#"><img src="images/header_logo.png" alt="logo"></a>

            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li>
                        <form method="POST">
                            <button class="submit-btn" name="Logout">Logout</button>
                        </form>
                    </li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>


        <div class="welcome">
            <h1 class="wel"><?php echo "Welcome User " ; ?></h1>
        </div>

        <?php
        include 'connection.php';

        $username = $comment = "";
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $comment = $_POST['comment'];

            $sql = "INSERT INTO users(`username`, `blog`) VALUES ('$username','$comment')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo 'submited';
                header("location:user.php");
            } else {
                echo "error" . $sql . '<br/>' . mysqli_error($conn);
            }
        }

        ?>
        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Title:</label>
            <input type="text" name="username" value="<?php echo $username; ?> " required>
            <br><br>
            <div class="comment-box">
            <label class="commnent" for="comment">Create a Blog:</label><br>
            <textarea name="comment" rows="20" cols="90" required><?php echo $comment; ?></textarea>
                <br>
                </div>
                <button class="submit-btn" name="submit">Submit</button>
        </form>








        <?php
        if (isset($_POST['Logout'])) {
            session_destroy();
            header("location:./login.php");
        }
        ?>
</body>

</html>