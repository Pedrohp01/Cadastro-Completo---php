<?php

require"bancodedados.php";

$nome =$_POST['nome'];
$idade =$_POST['idade'];
$cidade = $_POST['cidade'];

$inserir = mysqli_query($conexao,"INSERT INTO tblcadastro
(nome, idade, cidade) VALUES ('$nome','$idade','$cidade')");

echo "<script>alert('Cadastro realizado com sucesso!');</script>";
echo "<script>document.location.href='cadastrar.html';</script>";

?>