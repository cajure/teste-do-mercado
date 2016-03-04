<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="../styles/sweetalert.css">
	    <title>Mensagem</title>
	<?php
		session_start();
		include_once('../functions/product.php');
			if ($_SERVER['REQUEST_METHOD'] != 'POST') {
	    	die();
		}

		//Verifica a ação do botão - condição de inserção
		if(isset($_POST['salvarBtn'])){
			//Obem o id informado do usuário 
			$nome = $_POST['nome'];
			$codMercadoria = $_POST['codMercadoria'];
			$preco = $_POST['preco'];
			$quantidade = $_POST['quantidade'];
			$tipoMerc = $_POST['tipoMerc'];
			$tipoNeg = $_POST['tipoNeg'];
			
			$retorno = InsertProduct($nome,$codMercadoria,$preco,$quantidade,$tipoMerc,$tipoNeg);
	    }
	?>
	</head>
	<body>
	<?php
		header('Location:../dashboard.php'); 	
	?>
	</body>
</html>