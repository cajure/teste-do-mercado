<?php
  include_once('../functions/conecta_db.php');
  require('../templates/header.php');

  $query = "SELECT * FROM Produto";
  $result = dbConsultar($query);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Negociação de Mercadoria</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="../styles/libs/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/libs/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../styles/tables.css" type="text/css" rel="stylesheet" >
  </head>
  <body>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div id="main" class="container-fluid" >
            <div id="top" class="row">
              <div class="col-sm-5">
                <h1><i class="glyphicon glyphicon-barcode" style="font-size: 0.9em"></i>Negócios Realizados</h1>
              </div>
              <!-- /#top -->
              <div class="col-sm-6">
              </div> 
              <div class="row text-right" style="margin: 20px 2px">
                <a class="btn btn-success btn-lg" href="venda.php" data-toggle="modal" data-target="#insere-modal"><i class="glyphicon glyphicon-barcode"></i> Novo Produto</a>
              </div>
              <div id="list" class="row">
                <div class="table-responsive col-md-12">
                  <table id="myTable" class="table dataTable table-striped" cellspacing="0" cellpadding="0">
                    <thead class="table-header">
                      <tr class="t-header">
                        <th>Código da Mercadoria</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Tipo de Mercadoria</th>
                        <th>Tipo de Negócio</th>
                      </tr>
                    </thead>
                    <tbody class="table-body">
                      <?php while ($row = odbc_fetch_array($result)) { ?>
                      <tr>
                        <td><?php echo $row['codMercadoria'] ?></td>
                        <td><?php echo utf8_encode($row['nome']) ?></td>
                        <td><?php echo utf8_encode($row['preco']) ?></td>
                        <td><?php echo utf8_encode($row['quantidade']) ?></td>
                        <td><?php echo utf8_encode($row['tipoMerc']) ?></td>
                        <td><?php echo utf8_encode($row['tipoNeg']) ?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="../scripts/libs/jquery-1.11.3.min.js"></script>
    <script src="../scripts/libs/bootstrap.min.js"></script>
    <script src="../scripts/libs/jquery.dataTables.min.js"></script>
    <script src="../scripts/main.js"></script>
  </body>
</html>
