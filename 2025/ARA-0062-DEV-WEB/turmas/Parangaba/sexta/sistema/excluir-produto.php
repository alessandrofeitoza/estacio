<?php 
//pegou o id que tava na URL
$id = $_GET['id'];

//preparou o comando SQL
$sql = "DELETE FROM tb_produto WHERE id='{$id}'";

$conexao = include 'utils/conexao.php';
//executou no banco
$conexao->query($sql);

include 'partes/head.php';
include 'partes/menu.php';
?>

<div class="alert alert-success">
    <strong>Pronto</strong>
    Produto excluido com sucesso!
</div>



