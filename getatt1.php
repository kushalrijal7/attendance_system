<?php
include 'connection.php';

session_start();

if (isset($_POST['getattendance'])) {


    $date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
    $query = "select * from student_table";
    $res = mysqli_query($conn, $query);
    // $sql = mysqli_fetch_all($res, MYSQLI_ASSOC);
    // print_r($sql);

    
    while($row = mysqli_fetch_array($res))
    {
        $mno = $row["id"];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $age = $row['age'];
        $faculty = $row['faculty'];
        if(isset($_POST[$mno]))
        {
            $query1 = "INSERT INTO attendance(`id`, `firstname`, `lastname`, `age`, `faculty`,`date`, `attendance`)
            VALUES ('$mno','$fname','$lname','$age','$faculty','$date','1')";
        }else{
            $query1 = "INSERT INTO attendance(`id`, `firstname`, `lastname`, `age`, `faculty`,`date`, `attendance`)
             VALUES ('$mno','$fname','$lname','$age','$faculty','$date','0')";
        }
    

    
           

        
       
        mysqli_query($conn, $query1) or die("Insert Error" . $sid);
        print "<script>";
        print "alert('Attendance got Successfully');";
        print "self.location = 'getattendance.php';";
        print "</script>";
            }
    }else{
    header("location:attendance.php");
}
?>