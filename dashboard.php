<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['AdminLoginId']))        //!isset means if not set?
{
    header("location:./admin_login.php");
}

if (isset($_POST['done'])) {
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
    $faculty = $_POST['faculty'];

    $query = "INSERT INTO student_table(`id`,`firstname`, `lastname`, `age`, `faculty`) VALUES ('$id','$fname','$lname','$age','$faculty')";

    $result = mysqli_query($conn, $query);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin Panel</title>
    <link rel="stylesheet" href="./css/das.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

</head>

<body>
    <section class="header">

        <div id="welcome">
            <h1>Welcome to Admin Panel- <?php echo $_SESSION['AdminLoginId'] ?></h1>
            <form method="POST">
                <button name="Logout">LOG OUT</button>
            </form>


        </div>
        <div class="col-lg-4 m-auto">
            <form method="POST">
                <br><br>
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-white text-center">Insert Student</h1>
                    </div>
                    <br>
                    <label>ID:</label>
                    <input type="text" name="id" class="form-control" required>
                    <label>First Name:</label>
                    <input type="text" name="firstname" class="form-control" requied>
                    <label>Last Name:</label>
                    <input type="text" name="lastname" class="form-control" required>
                    <label>Age:</label>
                    <input type="text" name="age" class="form-control" required>
                    <label>Faculty:</label>
                    <input type="text" name="faculty" class="form-control" required>
                    <br>
                   
                    <button class="btn btn-success" type="submit" name="done">ADD</button>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center">Display Student Records</h1>
                <table class="table table-striped table table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Faculty</th>
                        <th>Delete</th>
                        <th>Update</th>
                        <th><button class="btn-primary btn"><a href="getattendance.php" class="text-white">Get_Attendance</a></button></th>
                    </tr>
                    <?php
                    include 'connection.php';

                    $query = "select * from student_table";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <tr class="text-center">
                            <td><?php echo $res['id']; ?></td>
                            <td> <?php echo $res['firstname']; ?></td>
                            <td> <?php echo $res['lastname']; ?></td>
                            <td> <?php echo $res['age']; ?></td>
                            <td> <?php echo $res['faculty']; ?></td>
                            <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
                            <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
                            
                        </tr>
                    <?php
                    }

                    ?>
                </table>
            </div>
        </div>

        <?php
        
        if (isset($_POST['Logout'])) {
            session_destroy();
            echo "<script>window.location='admin_login.php'</script>";
            
        }
        ?>

</body>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery.min.js"></script>

</html>