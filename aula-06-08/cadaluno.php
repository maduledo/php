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
  <form method="POST" action="crudaluno.php">
    <label for="">nome aluno</label>
     <input type="text" name="nomealuno">
     <label for="">senha</label>
     <input type="password" name="senha">
     <label for="">cidade</label>
     <input type="text" name="cidade">
     <label for="">estado</label>
     <input type="text" name="estado">
     

     <input type="submit" name="cadastrar" value="cadastrar">
     </form>
</body>
</html>