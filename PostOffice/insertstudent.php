<?php

include "/config.php";

// Escape user inputs for security
$fname = mysqli_real_escape_string($conn, $_POST['firstName']);
$lname = mysqli_real_escape_string($conn, $_POST['lastName']);
$muid = mysqli_real_escape_string($conn, $_POST['muid']);
 $email = mysqli_real_escape_string($conn, $_POST['emailz']);
 $pass = mysqli_real_escape_string($conn, $_POST['temppass']);
 $ponum = mysqli_real_escape_string($conn, $_POST['ponum']);
  $telnum = mysqli_real_escape_string($conn, $_POST['telnum']);
 if ( !$fname || !$lname || !$muid){

 	include "header.php";
 	echo ' <div id="page-wrapper">

            <div class="container-fluid">
             <h1 class="page-header">';
 	echo  " Title, sender or reciever is empty. <br>";
 	echo "<br><a href = '/insertstudent.php'> Click here to return back! </a></h1> ";

 	die();
 }



$sql = "INSERT INTO users ( fname, lname,email,muid,pass,ponum,telnum) VALUES ('$fname', '$lname', '$email', '$muid','$pass','$ponum','$telnum')";
if(mysqli_query($conn, $sql)){
    echo "<a href = '/index.php'> Click here to return back! </a> ";

    header('Location: ./liststudents.php');
exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// close connection
mysqli_close($conn);
?>