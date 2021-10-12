<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="process.php">
		Nombre del Producto:<br>
		<input type="text" name="nombre">
		<br>
		Precio:<br>
		<input type="number" name="precio">
		<br>
		SKU:<br>
		<input type="text" name="sku">
		<br>
		Cantidad:<br>
		<input type="number" name="cantidad">
        <br>
        Categoria:<br>
		<input type="text" name="categoria">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
</body>
</html>