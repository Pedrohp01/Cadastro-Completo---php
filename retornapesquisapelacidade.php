<?php

require "bancodedados.php";

$cidade = $_POST['cidade'];

$pesquisar = mysqli_query($conexao,"SELECT * FROM tblcadastro 
WHERE '$cidade' = cidade");

while($dados= mysqli_fetch_array($pesquisar)){
    echo $id = $dados['id']."</br>";
    echo $nome = $dados['nome']."</br>";
    echo $idade = $dados['idade']."</br>";
    echo $cidade = $dados['cidade']."</br>";
}

echo  "<a href ='pesquisar.html'>Voltar</a>";

if($id==""){
    echo "<script>alert('Nenhum Cadastro Encontrado');</script>";
    echo "<script>document.location.href='pesquisar.html';</script>";
}

?>
