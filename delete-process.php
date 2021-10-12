<?php
include_once 'conn.php';
$sql = "DELETE FROM proddb WHERE id='" . $_GET['id'] . "'";
if (mysqli_query($db, $sql)) {
    header('Refresh: 1; url=table.php');   
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
?>

