<?php
include "/config.php";
$ajde = $_REQUEST["id"];
if (!$ajde){
    echo "<a href = '/index.php'> Click here to return back! </a> ";

    header('Location: ./index.php');
}else{

$sql = "DELETE FROM notifs WHERE id=$ajde";
if(mysqli_query($conn, $sql)){
    echo "<a href = '/index.php'> Click here to return back! </a> ";

    header('Location: ./index.php');
exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}




}
