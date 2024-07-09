<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário get</title>
</head>
<body>

<form action="listaprod.php" method="get">

<h2>Cadastro de Produtos</h2>

 <p> Produto: <input type="text" name="produto" /> </p>
 
 <label for="marca">Marca</label>
    <select id="marca" name="marca">
      <option value="levi’s">Levi’s</option>
      <option value="calvin klein">Calvin Klein</option>
      <option value="giorgio armani">Giorgio Armani</option>
      <option value="gucci">Gucci</option>
      <option value="miller">Miller</option>  
    </select>


    <label for="tamanho">Tamanho</label>
    <select id="tamanho" name="tamanho">
      <option value="PP">PP</option>
      <option value="P">P</option>
      <option value="M">M</option>
      <option value="G">G</option>
      <option value="GG">GG</option>
      <option value="XGG">XGG</option>
    </select>


 <p> Cor: <input type="text" name="cor" /> </p>

 <label for="genero">Gênero</label>
    <select id="genero" name="genero">
      <option value="F">Feminino</option>
      <option value="M">Masculino</option>
    </select>

 <label for="modelo">Modelo</label>
    <select id="modelo" name="modelo">
      <option value="wideleg">Wide leg </option>
      <option value="alfaiataria">Alfaitaria</option>
      <option value="skinny">Skinny  </option>
      <option value="pantalona">Pantalona </option>
      <option value="flare">Flare</option>  
      <option value="mom">Mom</option>  
    </select>


 <p> Data da Venda: <input type="date" name="datav" /> </p>

 <p> Preço de Venda: <input type="int" name="precov" min="100" max="1000"  /> </p>

 <p> Preço de Compra: <input type="int" name="precoc" min="50" max="800" /> </p>

 <p> <input type="submit" value="Enviar"> </p>
 </form>



</body>
</html>