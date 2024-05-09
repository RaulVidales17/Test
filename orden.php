
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>CLIENTES</title>
</head>
<body>
    <div class="container mt-5">
      <div class="row">

          <div class="col-md-3">
            <h1>Ingrese Datos</h1>
            <form action="">
                  <input type="text" class="form-control mb-3" name="codigo_id" placeholder="Código ID">
                  <input type="text" class="form-control mb-3" name="fecha_orden" placeholder="Fecha de orden">
                  <input type="text" class="form-control mb-3" name="id_cte" placeholder="ID de cliente">
                  <input type="text" class="form-control mb-3" name="id_pdto" placeholder="ID de producto">
                  <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad">
                  <input type="text" class="form-control mb-3" name="creado" placeholder="Creación">
            </form>
          </div>

          <div class="col-md-8">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Código</th>
                        <th>Fecha de orden</th>
                        <th>ID de cliente</th>
                        <th>ID de producto</th>
                        <th>Cantidad</th>
                        <th>Creacion</th>
                        <th></th>
                        <th></th>
                     </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['codigo_id'] ?></th>
                                <th><?php echo $row['fecha_orden'] ?></th>
                                <th><?php echo $row['id_cte'] ?></th>
                                <th><?php echo $row['id_pdto'] ?></th>
                                <th><?php echo $row['cantidad'] ?></th>
                                <th><?php echo $row['creado'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['codigo_id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['codigo_id'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
            </table>
          </div>
      </div>
    </div>
</body>
</html> 