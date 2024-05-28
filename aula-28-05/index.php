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


<h2> 4.6 - Constantes </h2>

<?php
 define("PI", 6.32865);
echo PI; ?>


<h2> 4.6.1 - Constantes Pré-definidas </h2>
<?php
 function funcConsts() {
echo "DIRETÓRIO: ".__DIR__."<br>";
 echo "ARQUIVO: ".__FILE__."<br>";
 echo "LINHA: ".__LINE__."<br>";
 echo "FUNÇÃO: ".__FUNCTION__."<br>";
}
 funcConsts();
?>

<br>

<?php
class veiculo {
 private $marca;
 function __construct() {
 echo "CLASSE: ".__CLASS__."<br>";
 }
function setMarca($marca) { $this->marca = $marca;
 echo "MÉTODO: ".__METHOD__."<br>";
} }
$obj = new veiculo();
 $obj->setMarca("Wolksvagem");
?>



<h2> 4.7 - Variaveis Superglobais (pré-definidas) </h2>
<?php
 $vars_pre = get_defined_vars();
 print_r($vars_pre);
?> 





<h2> 4.8 - Funções - PHP  </h2>
<?php
 function nome_funcao($par_1 = 0, $par_2 = "vazio") {
 echo "Código da Função <br>";
 return "Dado de Retorno: ".$par_1."/".$par_2;
 }

 $retorno = nome_funcao();
 echo $retorno."<br><br>";
 $retorno = nome_funcao(12, "Bill Gates");
 echo $retorno."<br><br>";

?>


<h2> 4.8.1 - Função soma </h2>
<?php
 function soma ($nro_1 = 20, $nro_2 = 40) {
 echo $nro_1 + $nro_2;
}
soma ();
?>

<h2> 4.8.1.1 - Soma com parametro </h2>
<?php
function soma_parametro  ($P1, $P2) {
echo $P1 + $P2;   
}
soma_parametro(5, 10) ;
echo "<br>";
soma_parametro (20, 10);
?>


<h2> 4.8.1.2 - Soma e multiplicação com parametro </h2>
<?php
function soma_multiplica ($P1, $P2, $P3){
    $soma = $P1 + $P2;
    $resultado = $soma * $P3;
    echo "O resultado da soma é $resultado";
}
soma_multiplica (10, 10, 2);
?>


<h2> 4.8.1.3 - Soma, multiplicação, divisão e subtração com parametro </h2>
<?php
    function SMDS ($val1, $val2) {
         $soma= $val1 + $val2;
         $mul= $soma * $val1;
         $sub= $mul - $val2;
         $div= $sub/ $val1;

        return ($div);

        }
            echo(SMDS(4,6));
            echo "<br>";

            echo(SMDS(2,8));
            echo "<br>";

        ?>



<h2> 4.8.1.4 - Elevando um número ao quadrado </h2>
<?php
function  quadrado ($P1) {
    $resultado = $P1 * $P1; 
    return $resultado;     
}
echo quadrado (5);
?>







</body>
</html>