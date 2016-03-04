<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Administração - Negociação de Mercadoria</title>
		<meta charset="utf-8">
		  
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<script src="scripts/libs/jquery-1.11.3.min.js"></script>
		<script src="scripts/libs/bootstrap.min.js"></script>
		  
	</head>
	<body>
	<?php require('templates/header.php'); ?>
		<div class="container">
			<div class="page-header">
		  		<h2>Dashboard</h2>
			</div>
		  	<div class="jumbotron">
			    <div class="row init">
				  	<div class="col-md-4" ><a href="../negociacaoMercadoria/produto/index.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-list dash"></span></br>Negócios Realizados</a></div>
				  	<div class="col-md-4"><a href="../negociacaoMercadoria/produto/venda.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-barcode dash"></span></br>Compra/Venda</a></div>
				</div>   
		  	</div>
		</div>
	</body>
</html>
