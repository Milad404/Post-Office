<?php

include "/config.php";
   ob_start();
   session_start();
// Escape user inputs for security
$fname = mysqli_real_escape_string($conn, $_POST['firstName']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

 if ( !$fname || !$password ){

 	include "header.php";
 	echo ' <div id="page-wrapper">

            <div class="container-fluid">
             <h1 class="page-header">';
 	echo  " Title, sender or reciever is empty. <br>";
 	echo "<br><a href = '/login.php'> Click here to return back! </a></h1> ";

 	die();
 }


      

$sql = mysqli_query($conn, "SELECT fullname FROM admin WHERE pass='$password' AND name='$fname'");

   $count = mysqli_num_rows($sql);

if ($count==1){

	 $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] =$fname;

    header('Location: ./index.php');
}else{

	echo "<br><a href = '/login.php'> Click here to return back! </a></h1> ";

}




// close connection
mysqli_close($conn);
?>