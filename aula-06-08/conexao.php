<?php 



define('HOST', 'localhost');  
define('USUARIO', 'root');    
define('SENHA', '');    
define('DBNAME', 'sistemaaluno'); 
 

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.

/////////   não modificar codigo abaixo  //////////
try {

    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' .
                                     DBNAME, USUARIO, SENHA);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
     Erro gerado " . $e->getMessage();
}


?>