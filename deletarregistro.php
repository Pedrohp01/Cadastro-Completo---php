<?php

require "bancodedados.php";

$id =$_POST['id'];

$deletar =mysqli_query($conexao, "DELETE FROM tblcadastro WHERE id= '$id'");
echo "<script>alert('REGISTRO DELETADO COM SUCESSO');</script>";
echo "<script>document.location.href='deletar.html';</script>";

?>