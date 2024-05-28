<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>


<h1> Exercício </h1>


<h2> 1 - Array com alunos e notas </h2>
<pre>
<?php

$alunos_notas = array(
    array("nome" => "Isa", "nota" => 9.5),
    array("nome" => "Lucas", "nota" => 3.3),
    array("nome" => "Yago", "nota" => 1.5),
    array("nome" => "Yngrid", "nota" => 8.9),
    array("nome" => "Livia", "nota" => 7.5),
    array("nome" => "Duda ", "nota" => 2.1),
   
);

print_r($alunos_notas);

?> </pre>




<h2> 2 - Imprimir apenas o aluno aprovado (nota maior que 7) </h2>
<pre>
<?php
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] > 7) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}
?> </pre>




<h2> 3 - Imprimir apenas alunos reprovados (notas menor que 3) </h2>
<pre>
<?php
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] < 3) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}
?> </pre>




<h2> 4 - Imprimir apenas os alunos na final (notas maior que 3) </h2>
<pre>
<?php
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] > 3 && $aluno['nota'] <= 10) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}
?> </pre>





</body>
</html>
