<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    p{background-color:#90EE90};
</style>



<?php
$aluno = array( "nome" => "Pablo", 
"idade" => 30, 
"end" => "rua l", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-20");

echo "<p> Aluno 1 </p>" ;
echo $aluno["nome"] ."<br>";
echo $aluno["idade"] ."<br>";
echo $aluno["end"] . "<br>";
echo $aluno["cidade"] . "<br>";
echo $aluno["estado"] . "<br>";
echo $aluno["cpf"] . "<br>";

echo "<br>";

$aluno1 = array( "nome" => "Yngrid", 
"idade" => 17, 
"end" => "rua a", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-10");

echo "<p> Aluno 2 </p>" ;

echo $aluno1["nome"] ."<br>";
echo $aluno1["idade"] ."<br>";
echo $aluno1["end"] . "<br>";
echo $aluno1["cidade"] . "<br>";
echo $aluno1["estado"] . "<br>";
echo $aluno1["cpf"] . "<br>";

echo "<br>";


$aluno2 = array( "nome" => "Eduarda", 
"idade" => 17, 
"end" => "rua b", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-22");

echo "<p> Aluno 3 </p>" ;

echo $aluno2["nome"] ."<br>";
echo $aluno2["idade"] ."<br>";
echo $aluno2["end"] . "<br>";
echo $aluno2["cidade"] . "<br>";
echo $aluno2["estado"] . "<br>";
echo $aluno2["cpf"] . "<br>";

echo "<br>";


$professor = array( "nome" => "Fabio", 
"idade" => 29, 
"end" => "rua y", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.001-20");

echo "<p> Professor </p>" ;

echo $professor["nome"] ."<br>";
echo $professor["idade"] ."<br>";
echo $professor["end"] . "<br>";
echo $professor["cidade"] . "<br>";
echo $professor["estado"] . "<br>";
echo $professor["cpf"] . "<br>";

?>
    
</body>
</html>



