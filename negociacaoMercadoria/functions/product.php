<?php
  include_once('../functions/conecta_db.php');

  ///Obtem todos os Produtos cadastrados
  function GetAllProducts(){
    return dbResultados(dbConsultar("SELECT * FROM Produto") );  
  }
  
  ///Insere o usuário
  function InsertProduct($nome,$codMercadoria,$preco,$quantidade,$tipoMerc,$tipoNeg){
    dbConsultar("INSERT INTO Produto (nome,
                                      codMercadoria,
                                      preco,
                                      quantidade,
                                      tipoMerc,
                                      tipoNeg) 
                 VALUES ('". $nome ."','". $codMercadoria ."',". $preco .",". $quantidade .",'". $tipoMerc ."','". $tipoNeg ."')");
    return  ($nome.' inserido com sucesso!');
  }  
?>