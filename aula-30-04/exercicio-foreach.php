<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    p {
        background-color: #66CDAA ;
    }
</style>

<?php

$aluno = array( "nome" => "Maria Eduarda", 
"idade" => 17, 
"end" => "rua C", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-20");

echo "<p> Aluno 1: <br> </p>";
foreach($aluno as $chave => $valor){
echo " $valor" . "<br> ";
}


$aluno1 = array( "nome" => "Yngrid", 
"idade" => 17, 
"end" => "rua Z", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-10");

echo "<p> Aluno 2 <br> </p>" ;
foreach($aluno1 as $chave => $valor){
    echo " $valor" . "<br> ";
    }
echo "<br>";


$aluno2 = array( "nome" => "Pablo", 
"idade" => 18, 
"end" => "rua B", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-22");

echo "<p> Aluno 3 <br> </p>";
foreach($aluno2 as $chave => $valor){
    echo " $valor" . "<br> ";
    }


 $professor = array("nome" => "Fábio Lima", 
 "idade" => "30", 
 "end" =>"rua Y", 
 "cidade"=>"Guanambi",
 "estado"=>"BA", 
 "cpf"=> "000.000.000-90");

 echo "<p> Professor <br> </p>";
foreach($professor as $chave => $valor){
    echo " $valor" . "<br> ";
    }
?>