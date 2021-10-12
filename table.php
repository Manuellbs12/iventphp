

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="dist/jquery.tabledit.js"></script>
    <script type="text/javascript" src="custom_table_edit.js"></script>
     
</body>
</head>
<body>

    <script>
        $(document).ready(function() {
    $('#productos').DataTable();
} );
    </script>

    <section>
        <div class="container">
        <table id="productos" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>SKU</th>
            <th>Cantidad</th>
            <th>Categoría</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>

        <?php

include "conn.php"; // Using database connection file here


$records = mysqli_query($db,"select * from proddb"); // fetch data from database
$i=0;
while($data = mysqli_fetch_array($records))
{   $id = $data['id'];
    $nombre = $data['nombre'];
    $precio = $data['precio'];
    $sku = $data['sku'];
    $cantidad = $data['cantidad'];
    $categoria = $data['categoria'];
?>
            <tr>
        <td><?php echo $data['id']; ?></td>
        <td><a href="delete-process.php?id=<?php echo $data['id']; ?>"><?= $nombre ?></a></td>
        <td>$<?= $precio ?></td>
        <td><?= $sku ?></td>
        <td><?= $cantidad ?></td>
        <td><?= $categoria?></td>
        <td><a href="delete-process.php?id=<?php echo $data['id']; ?>" onclick="return confirm('¿Estas seguro de borrar el producto?');">Delete</a></td>
            </tr>
            <?php
            
}
?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
    
    <?php mysqli_close($db); // Close connection ?>
        </div>

    </section>
    <div class="container">
     <div class="row">
        <div class="col-12">
            <a class="btn btn-success  btn-xs" href="add-new.php" >Añadir Nuevo</button></a> 
        </div>
      </div>
    </div>
</html>