<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    p{background-color:#90EE90;
    }
</style>

    
<?php

echo "<p>Professor </p> <br>";
$professor = array( "Fábio Lima", 
"30", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

for($a=0; $a<count($professor);$a++){
    echo "$professor[$a] <br>";
}



echo "<br> <p> Aluno 1 </p> <br>";
$aluno1 = array( "Pablo", 
 "30", 
 "rua L", 
 "Guanambi",
"BA", 
"000.000.000-20");

for($a=0; $a<count($aluno1);$a++){
    echo "$aluno1[$a] <br>";
}


echo "<br> <p>Aluno 2  </p> <br>";
$aluno2 = array("Maria Eduarda",
"17", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

for($a=0; $a<count($aluno2);$a++){
    echo "$aluno2[$a] <br>";
}

echo "<br> <p>Aluno 3 </p> <br>";
$aluno3 = array("Julia",
"16", 
"rua C", 
"Guanambi",
"BA", 
"000.000.000-20");

for($a=0; $a<count($aluno3);$a++){
    echo "$aluno3[$a] <br>";
}

?>


</body>
</html>

