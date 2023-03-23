<?php
include("anderson.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_post['nome'];
    $descricao = $_post['descricao'];
    $estoque = $_post['estoque'];
    $custo = $_post['custo'];
    $preco = $_post['preco'];
    $ativo = $_post['ativo'];
}
$bancodedados = "SELECT COUNT(pro_id) FROM produtos WHERE pro_nome = '$nome'";
$resultado_db =mysqli_query($link, $bancodedados);

while ($tbl - myqlis_fetch_array($resultado)){
$contagem = $tbl[0];

if($contagem == 0){
    echo("PRODUTO JÁ EXISTENTE");
    header("locations: produto.php");
    
}else{
        $bancodedados ="INSERT INTO proutos(pro_nome, pro_descricao, pro_preco, pro_custo, pro_ativo, pro_estoque) 
        VALUES('$nome', '$descricao', '$preco', '$custo', '$ativo')";
        mysqli_query($link, $bancodedados);
        
    }

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nwestilo.css">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <form action="produto.php" method="post">
        <label>Nome do Produto</label>
        <input type="text" name="nome">
        <br>
        <label>Descrição</label>
        <input type="text" name="descricao">

        <label>Estoque</label>
        <input type="decimal" name="estoque">

        <label>Custo</label>
        <input type="decimal" name="custo">

        <label>Preço</label>
        <input type="decimal" name="preco">

        <label>Descrição</label>
        <input type="text" name="nome">
    </form>

</body>
</html>