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
  <form method="POST" action="crudprofessor.php">
    <label for="">nome professor</label>
     <input type="text" name="nomeprofessor">
     <label for="">curso</label>
     <input type="text" name="curso">
     <label for="">senha</label>
     <input type="password" name="senha">

     <input type="submit" name="cadastrar" value="cadastrar">
     </form>
</body>
</html>