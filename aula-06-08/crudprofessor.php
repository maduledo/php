<?php

require_once('conexao.php');

{
    
    $nome = $_POST['nomeprofessor'];
    $curso = $_POST['curso'];
    $senha = $_POST['senha'];
    
    $sql = "INSERT INTO professor (nome, curso, senha) VALUES ('$nome', '$curso', '$senha')";
    $sqlcombanco = $conexao->prepare($sql);
    
    if($sqlcombanco->execute())
    {
        echo "<strong>OK!</strong professor 
        $nome foi incluido com sucesso!!!";
    }
}