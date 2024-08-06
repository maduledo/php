<?php

require_once('conexao.php');

{
    
    $nome = $_POST['nomedisciplina'];
    $professor = $_POST['professor'];
    $cargahoraria = $_POST['cargahoraria'];
    
    $sql = "INSERT INTO disciplina (nome, professor, cargahoraria) VALUES ('$nome', '$professor' , '$cargahoraria')";
    $sqlcombanco = $conexao->prepare($sql);
    
    if($sqlcombanco->execute())
    {
        echo "<strong>OK!</strong disciplina 
        $nome foi incluido com sucesso!!!";
    }
}