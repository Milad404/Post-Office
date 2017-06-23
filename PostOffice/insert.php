<?php

include "/config.php";

// Escape user inputs for security
$title = mysqli_real_escape_string($conn, $_POST['title']);
$toper = mysqli_real_escape_string($conn, $_POST['reciever']);
$sender = mysqli_real_escape_string($conn, $_POST['sender']);
 $comm = mysqli_real_escape_string($conn, $_POST['comm']);


 if ( !$title || !$sender || !$toper){

 	include "header.php";
 	echo ' <div id="page-wrapper">

            <div class="container-fluid">
             <h1 class="page-header">';
 	echo  " Title, sender or reciever is empty. <br>";
 	echo "<br><a href = '/forms.php'> Click here to return back! </a></h1> ";

 	die();
 }
// attempt insert query execution
$sql = "INSERT INTO notifs ( toper, title,sender,datee,comm) VALUES ('$toper', '$title', '$sender', NOW(),'$comm')";
if(mysqli_query($conn, $sql)){
    echo "<a href = '/index.php'> Click here to return back! </a> ";

    header('Location: ./index.php');
exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
?>