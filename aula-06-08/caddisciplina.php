<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
     <!-- FORMULÁRIO PARA ENVIAR DADOS PARA FORMULARIO CRUDALUNO.PHP USANDO METODO POST  -->
  <form method="POST" action="cruddisciplina.php">
    <label for="">nome disciplina</label>
     <input type="text" name="nomedisciplina">
     <label for="">professor</label>
     <input type="text" name="professor">
     <label for="">carga horária</label>
     <input type="text" name="cargahoraria">

     <input type="submit" name="cadastrar" value="cadastrar">
     </form>
</body>
</html>