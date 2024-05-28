<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<h1> Arrays </h1>


<h2> Array multidimencional </h2>
<?php
$array = [
    'alunos' => [
        [
        'id' => 1,
        'nome' => 'Duda',
        'idade' => 17,
        'cidade' => 'Guanambi',
        'endereco' => 'rua L'
        ],

        ['id' => 2,
        'nome' => 'Yngrid',
        'idade' => 16,
        'cidade' => 'Barreiras',
        'endereco' => 'rua J'
        ],

        ['id' => 3,
        'nome' => 'livia',
        'idade' => 18,
        'cidade' => 'Salvador',
        'endereco' => 'rua C' ]
    ]       
]
?>


<!-- Crie um array com os dados dos alunos dentro -->

<pre>
    <?php
    print_r($array);
    ?>
</pre>


<pre>
    <?php
    print_r($array['alunos'][0]['nome']);
    ?>
</pre>


<!-- TABELA -->

<h1> Tabela</h1>


<table id="customers">
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Cidade</th>
    <th>Endereço</th>
 </tr>
  

    <td> <?php print_r($array['alunos'][0]['id'])?> </td>
    <td> <?php print_r($array['alunos'][0]['nome'])?> </td>
    <td> <?php print_r($array['alunos'][0]['idade'])?> </td>
    <td> <?php print_r($array['alunos'][0]['cidade'])?> </td>
    <td> <?php print_r($array['alunos'][0]['endereco'])?> </td>
    </tr>
    
    <td> <?php print_r($array['alunos'][1]['id'])?> </td>
    <td> <?php print_r($array['alunos'][1]['nome'])?> </td>
    <td> <?php print_r($array['alunos'][1]['idade'])?> </td>
    <td> <?php print_r($array['alunos'][1]['cidade'])?> </td>
    <td> <?php print_r($array['alunos'][1]['endereco'])?> </td>
    </tr>
    
    <td> <?php print_r($array['alunos'][2]['id'])?> </td>
    <td> <?php print_r($array['alunos'][2]['nome'])?> </td>
    <td> <?php print_r($array['alunos'][2]['idade'])?> </td>
    <td> <?php print_r($array['alunos'][2]['cidade'])?> </td>
    <td> <?php print_r($array['alunos'][2]['endereco'])?> </td>
    
</table>



<!-- TABELA -->


<h2> Impressão com for</h2>
<table id="customers">
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Cidade</th>
    <th>Endereço</th>
 </tr>

 
    <?php
    for($i=0; $i<count($array['alunos']); $i++) { ?>
    <tr>
    <td> <?php print_r($array['alunos'][$i]['id'])?> </td>
    <td> <?php print_r($array['alunos'][$i]['nome'])?> </td>
    <td> <?php print_r($array['alunos'][$i]['idade'])?> </td>
    <td> <?php print_r($array['alunos'][$i]['cidade'])?> </td>
    <td> <?php print_r($array['alunos'][$i]['endereco'])?> </td>
    </tr>
      
    <?php } 
    ?>

 </table>


</body>
</html>

