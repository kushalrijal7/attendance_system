<?php
include_once('connection.php');
// include_once('connection.php');
$first_name = $last_name =$batch = $mail =  "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $first_name = $_POST['Fname'];
     $last_name =  $_POST['Lname'];
     $batch = $_POST['faculty'];
    //  $s_year = $_POST['year'];
     $mail = $_POST['Email'];

    $data = ("INSERT INTO register (Fname, Lname, faculty, Email ) VALUES ('$first_name', '$last_name', '$batch', '$mail')");

    if (mysqli_query($conn, $data)){

        echo 'registered';
        header("location: login.php?=registered");

    }else{

        echo "error".$data.'<br/>'.mysqli_error($conn);
    }
}
mysqli_close($conn);
?>