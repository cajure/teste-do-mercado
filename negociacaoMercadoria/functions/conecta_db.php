<?php

//Conexao do banco de dados
define('DB_HOST','localhost');
define('DB_NOME','');
define('DB_USUARIO','');
define('DB_SENHA','');
define('DB_DSN','Driver={SQL Server};Server='.DB_HOST.';Port=1433;Database='.DB_NOME.';');

                   
function dbConectar() {
    return odbc_connect(DB_DSN,DB_USUARIO,DB_SENHA);
}

function dbConsultar($consulta_sql){
    return odbc_exec(dbConectar(), $consulta_sql);
}

function dbPrepare($consulta_sql){
    return odbc_prepare(dbConectar(), $consulta_sql);
}

function dbResultado($qResultado){
    //odbc_longreadlen($qResultado, 0);
    return odbc_fetch_array($qResultado);
}

function db_execute($stmt_resource, $array_parametros){
    return odbc_execute($stmt_resource, $array_parametros);
}

function dbResultados($qResultado){
    $rows = array();
    while($myRow = odbc_fetch_array( $qResultado )){ 
        $rows[] = $myRow;
    }
    return $rows;
}

function dbErro(){
    $erro = odbc_errormsg(dbConectar());
    if(!empty($erro)){
        echo 'ERRO: '.$erro;
    }
}

function fechaDb(){
    odbc_close_all();
}
?>