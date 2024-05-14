<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>


<h1> Array-laços </h1>


<h2> Exemplo 01 </h2>
<pre>
<?php
    $A1 = array ("Antonio ", "Luis ", "Jose ", "Joao ");
    echo $A1[0] . "<br>"; 
    echo $A1[1] . "<br>";
    echo $A1[2] . "<br>";
    echo $A1[3] . "<br>";
?>
</pre>


<h2> Array com for </h2>
<pre>
<?php
$A2 = array(10,9,8,7);
echo$A2[0];
?>
</pre>


<h2> Impressão com for </h2>
<pre>
<?php
    for($a = 0; $a<4; $a++) {
        echo "posição $a o valor é $A1[$a]";
     }  
?>
</pre>


 <h2> Impressão com foreach </h2> 
 <pre>
    <?php
    foreach($A1 as $dados)
    echo"<p>$dados</p>"
    ?>
 </pre>


 <h2> Array definição explícita com chave </h2>
 <pre>
    <?php
    $var = array("Maria" => 25, 
                 "João" => 44,
                 "José" => 12,
                 "Neusa" => 73
           );
        foreach($var as $dados) 
        echo "<p>$dados</p>"
    ?>
 </pre>

 

 <h2> Array definição explícita com chave valor</h2>
 <pre>
    <?php
    $var = array("Maria" => 25, 
                 "João" => 44,
                 "José" => 12,
                 "Neusa" => 73
           );
        foreach($var as $chave => $valor) 
        echo "<p>$chave: tem $valor anos <br></p>"
    ?>
 </pre>


 <h2> Exemplo print_r </h2>
 <pre>
    <?php
    print_r($var);
    //  print_r -> mostra o que tem armazenado no array 
    ?>
 </pre>



 <h2>Array multidimensional: definição explícita</h2>
 <pre>
    <?php
 $alunos = array("Maria" =>
                         array("endereco" => "Rua Chile 1046",
                               "bairro" => "Rebouças",
                               "cidade" => "Guanambi"),
                "João" => 
                         array("endereco" => "Rua Iapó 234",
                                "bairro" => "Prado Velho",
                                "cidade" => "Vitória da Conquista"),
                "Zeca" => 
                        array("endereco" => "Rua L 469",
                              "bairro" => "Centro",
                              "cidade" => "Salvador")
                );
                print_r($alunos);
                print_r($alunos["Maria"] ["endereco"]);
                echo"    ";
                print_r($alunos["Maria"] ["bairro"]);
                echo"    ";
                print_r($alunos["Maria"] ["cidade"]);
                echo"   ";
                print_r($alunos["João"] ["endereco"]);
                echo"    ";
                print_r($alunos["João"] ["bairro"]); 
                echo"    ";
                print_r($alunos["João"] ["cidade"]);
                echo"   ";    
                print_r($alunos["Zeca"] ["endereco"]);
                echo"    ";
                print_r($alunos["Zeca"] ["bairro"]); 
                echo"    ";
                print_r($alunos["Zeca"] ["cidade"]);                              
    ?>
</pre>



<h2>Impressão com foreach - com array dentro do array</h2>
<pre>
    <?php
          foreach($alunos as $chave => $valor2) {
            echo $chave.": <br>";
            foreach($valor2 as $chave => $valor) {
                echo " -$valor<br>";
            }
            echo "<br>";
          }
    ?>
</pre>
 
 





</body>
</html>

