<?php

$alunos = array ("julia", "pedro", "isa", "duda", "vitor", "luisa" );

   echo "exemplo com for <br>";
   for ($i=0; $i <= (count ($alunos)-1); $i++){
    if ($i == 4){
        echo $i;
        echo "$alunos[$i] <br>";
    }
 }


 
  echo "exemplo com foreach <br>";
  foreach ($alunos as $dados) {
    echo $dados;
  }

?>