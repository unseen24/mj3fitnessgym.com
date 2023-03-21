<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $logname = $_POST['logname'];
        $logusername = $_POST['logusername'];
        $gender = $_POST['gender'];
        $lognumber = $_POST['lognumber'];
        $logemail = $_POST['logemail'];
        $logpass = $_POST['logpass'];
        $member = $_POST['member'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mj3 fitness gym";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!".mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO monthly (UserId, UserName, FullName, Gender, PhoneNumber, Email, Password, Membership) VALUES ('0', '$logname', '$logusername', '$gender', '$lognumber', '$logemail', '$logpass', '$member')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
  
    // close connection
    mysqli_close($con);
    
    header("Location: https://localhost/mj3/mj3.html")

?>
