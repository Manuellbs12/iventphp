<?php

$db = mysqli_connect("localhost","root","root","inventario");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
// delete records
if(isset($_POST['id']))
{
    $arr = $_POST['id'];
    foreach ($arr as $id) {
        @mysqli_query($con,"DELETE FROM proddb WHERE id = " . $id);
    }
    $msg = "Deleted Successfully!";
    header("Location: index.php?msg=$msg");
}

?>