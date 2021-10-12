<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>



<table class="table table-sm table-bordered table-hover">
  <tr bgcolor="grey" align="center" style="color:white!important">
    <th>#</th>
    <th>Producto</th>
    <th>Precio</th>
    <th>SKU</th>
    <th>Cantidad</th>
    <th>Categoría</th>
    <th>Fecha</th>
  </tr>

<?php

include "conn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from proddb"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr align="center ">
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['nombre']; ?></td>
    <td>$<?php echo $data['precio']; ?></td>
    <td><?php echo $data['sku']; ?></td>
    <td><?php echo $data['cantidad']; ?></td>
    <td><?php echo $data['categoria']; ?></td>
    <td><?php echo $data['fecha']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <a class="btn btn-success  btn-xs" data-toggle="modal" data-target="#modaladd">Añadir Nuevo</button></a> 
        </div>
    </div>
</div>

<section>
    <div class="container">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    </div>
</section>

          <!-- The Modal -->
<div class="modal" id="modaladd">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
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
    <br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
