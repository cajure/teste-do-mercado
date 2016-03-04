<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Negociação de Mercadoria</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link href="../styles/libs/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/main.css" rel="stylesheet">

  </head>
  <body onLoad="initialComponent()">
    <?php
      include_once('../functions/conecta_db.php');
      require('../templates/header.php');
      if (isset($_GET['id'])) {
      $result = dbResultado( dbConsultar("SELECT * FROM Produto WHERE codMercadoria = ". $_GET['id']) );
    }
    ?>
      <div id="main" class="container-fluid" style="margin-top: 20px">
      <div class="col-sm-6">
        <h1> <i class="glyphicon glyphicon-barcode" style="font-size: 0.9em"></i>Mercadorias para Compra e Venda</h1>
      </div>
      <div class="row">
        <form action="../functions/service_product.php" id="form1" method="post" class="form-horizontal" style="margin-top: 80px" enctype="multipart/form-data">
          <?php if (isset($result['codMercadoria'])): ?>
          <input type="text" name="codMercadoria" value="<?php echo $result['codMercadoria']; ?>">
          <?php endif;  ?>
          
          <!-- Text input-->
          <div class="jumbotron">
          <h2>Cadastro de Produtos</h2><br>
            <div class="form-group" id="nomeGroup">
              <label class="col-md-4 control-label" for="textinput">Nome da Mercadoria</label>
              <div class="col-md-5">
                <input id="nome" name="nome" placeholder="Nome da Mercadoria"
                value="<?php echo isset($result)? $result['nome'] : ''; ?>" class="form-control input-md" type="text" >
                  <span id="nomeIconStatus" class="" aria-hidden="true"></span>
                  <span id="nomeStatus" class="sr-only"></span>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group" id="codMercadoriaGroup">
              <label class="col-md-4 control-label" for="textinput">Código da Mercadoria</label>
              <div class="col-md-5">
                <input id="codMercadoria" name="codMercadoria" placeholder="Código da Mercadoria"
                value="<?php echo isset($result)? $result['codMercadoria'] : ''; ?>" class="form-control input-md" type="text" >
                  <span id="codMercadoriaIconStatus" class="" aria-hidden="true"></span>
                  <span id="codMercadoriaStatus" class="sr-only"></span>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group" id="precoGroup">
              <label class="col-md-4 control-label" for="textinput">Preço</label>
              <div class="col-sm-3">
                <input id="preco" name="preco" placeholder="R$ 0,00"
                value="<?php echo isset($result)? $result['preco'] : ''; ?>" class="form-control input-md" type="text" >
                  <span id="precoIconStatus" class="" aria-hidden="true"></span>
                  <span id="precoStatus" class="sr-only"></span>
              </div>
            </div>
            <div class="form-group" id="quantidadeGroup">
              <!-- Text input-->
              <label class="col-md-4 control-label" for="textinput">Quantidade</label>
              <div class="col-sm-3">
                <input id="quantidade" name="quantidade" placeholder="Quantidade" 
                value="<?php echo isset($result)? $result['quantidade'] : ''; ?>" class="form-control input-md" type="text" >
                  <span id="quantidadeIconStatus" class="" aria-hidden="true"></span>
                  <span id="quantidadeStatus" class="sr-only"></span>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group" id="tipoMercGroup">
              <label class="col-md-4 control-label" for="textinput">Tipo de Mercadoria</label>
              <div class="col-md-5">
                <input id="tipoMerc" name="tipoMerc" placeholder="Tipo de Mercadoria"
                value="<?php echo isset($result)? $result['tipoMerc'] : ''; ?>" class="form-control input-md" type="text" >
                  <span id="tipoMercIconStatus" class="" aria-hidden="true"></span>
                  <span id="tipoMercStatus" class="sr-only"></span>
              </div>
            </div>
            <!-- Select -->
            <div class="form-group">
              <label class="col-md-4 control-label">Tipo de Negócio</label>
              <div class="col-md-5">
                <select name="tipoNeg" id="tipoNeg" class="form-control">
                  <option value="">Selecione uma opção</option>
                  <option value="V">Venda</option>
                  <option value="C">Compra</option>
                </select>
              </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-8">
                  <button id="salvarBtn" name="salvarBtn" type="button" class="btn btn-primary" onclick="formValidate()">Enviar</button>
                  <button id="resetBtn" type="reset" class="btn btn-inverse">Limpar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="../scripts/libs/jquery-1.11.3.min.js"></script>
    <script src="../scripts/libs/bootstrap.min.js"></script>
    <script src="../scripts/main.js"></script>
  </body>
</html>