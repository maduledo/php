<?php

// fazer 3 alunos e 1 professor

$aluno1 ["nome"] =  "Eduarda";
$aluno1 ["idade"] = "17";
$aluno1 ["end"] = "Rua L";
$aluno1 ["cidade"] = "Guanambi";
$aluno1 ["estado"] = "Bahia";
$aluno1 ["cpf"] = "000.111.222-34";


$aluno2 ["nome"] =  "Isa";
$aluno2 ["idade"] = "15";
$aluno2 ["end"] = "Rua C";
$aluno2 ["cidade"] = "Guanambi";
$aluno2 ["estado"] = "Bahia";
$aluno2 ["cpf"] = "156.745.659-99";

$aluno3 ["nome"] =  "Pablo";
$aluno3 ["idade"] = "16";
$aluno3 ["end"] = "Rua G";
$aluno3 ["cidade"] = "Guanambi";
$aluno3 ["estado"] = "Bahia";
$aluno3 ["cpf"] = "546.867.243-46";

echo " Aluno 1: <br>";
foreach ($aluno1 as $x) {
    echo  key($aluno1) . ": $x  <br>";
    next($aluno1);
}


echo "<br> Aluno 2: <br>";
foreach ($aluno2 as $x) {
    echo  key($aluno2) . ": $x  <br>";
    next($aluno2);
}

echo "<br> Aluno 3: <br>";
foreach ($aluno3 as $x) {
    echo  key($aluno3) . ": $x  <br>";
    next($aluno3);
}


$professor ["nome"] =  "Fabio";
$professor ["idade"] = "30";
$professor ["end"] = "Rua Y";
$professor ["cidade"] = "Guanambi";
$professor ["estado"] = "Bahia";
$professor ["cpf"] = "555.666.222-12";

echo "<br>Professor: <br>";
foreach ($professor as $x) {
    echo  key($professor) . ": $x  <br>";
    next($professor);
}

?>