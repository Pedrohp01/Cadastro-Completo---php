<?php
require "bancodedados.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];

$alterar = mysqli_query($conexao, "UPDATE tblcadastro SET
nome ='$nome', idade = '$idade', cidade = '$cidade' WHERE id = '$id'");

echo "<script>alert('Registro Alterado com Sucesso');</script>";
echo "<script>document.location.href='alterar.html';</script>";
?>