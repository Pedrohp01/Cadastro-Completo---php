<?php

require "bancodedados.php"; 

$id = $_POST['id']; 


$pesquisar = mysqli_query($conexao, "SELECT * FROM tblcadastro
WHERE '$id' = id");

 while ($dados = mysqli_fetch_array($pesquisar)) 
 { 

$id_ok = $dados ['id']; 
$nome = $dados ['nome']; 
$idade = $dados ['idade']; 
$cidade = $dados ['cidade']; 
} 


if ($id_ok == "") 
{
    
    echo "<script>alert('Nenhum Registro Encontrado');</script>";
    echo "<scrip>document.location.href='alterar.html';</script>";

}
?>

<!DOCTYPE html> 
 <html lang="pt-BR"> 

 <head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<title>Alterar</title> 
 </head> 

 <body> 
<form method="post" action="alterarregistro.php"> 
 
ID: <input name="id" value="<?php echo $id_ok ?>" readonly/><br/> 
Nome: <input name="nome" value="<?php echo $nome ?>"/><br/> 
Idade: <input name="idade" value="<?php echo $idade ?>"/><br/> 
Cidade: <input name="cidade" value="<?php echo $cidade ?>"/><hr/> 
<input type="submit"/> 

</form> 
<a href="index.html">Voltar</a>  
</body>     
</html>
