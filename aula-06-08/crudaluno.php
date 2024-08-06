<?php

require_once('conexao.php');

{
    
    $nome = $_POST['nomealuno'];
    $senha = $_POST['senha'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO aluno(nome, senha, cidade, estado) VALUES ('$nome', '$senha', '$cidade', '$estado')";
    $sqlcombanco = $conexao->prepare($sql);
    
    if($sqlcombanco->execute())
    {
        echo "<strong>OK!</strong> o aluno
        $nome foi incluido com sucesso!!!";
    }
}