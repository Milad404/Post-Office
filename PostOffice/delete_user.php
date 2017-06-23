<?php
include "/config.php";
$ajde = $_REQUEST["id"];
if (!$ajde){
    echo "<a href = '/liststudents.php'> Click here to return back! </a> ";

    header('Location: ./liststudents.php');
}else{

$sql = "DELETE FROM users WHERE id=$ajde";
if(mysqli_query($conn, $sql)){
    echo "<a href = '/liststudents.php'> Click here to return back! </a> ";

    header('Location: ./liststudents.php');
exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}




}
