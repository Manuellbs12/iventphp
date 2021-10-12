<?php
include_once 'conn.php';
if(isset($_POST['save']))
{	 
	 $nombre = $_POST['nombre'];
	 $precio = $_POST['precio'];
	 $sku = $_POST['sku'];
	 $cantidad = $_POST['cantidad'];
	 $categoria = $_POST['categoria'];
	 $sql = "INSERT INTO proddb (nombre,precio,sku,cantidad, categoria)
	 VALUES ('$nombre','$precio','$sku','$cantidad', '$categoria')";
	 if (mysqli_query($db, $sql)) {
		header('Refresh: 1; url=table.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 mysqli_close($db);
}
?>