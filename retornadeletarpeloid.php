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

<title>Deletar</title> 
 </head> 

 <body> 
<form method="post" action="deletarregistro.php"> 
 
<input name="id" value="<?php echo $id_ok ?>" hidden/>
Nome: <?php echo $nome ?><br/> 
Idade:<?php echo $idade ?><br/> 
Cidade:<?php echo $cidade ?><br/> 
<input type="submit"/> 

</form> 
<a href="deletar.html">Voltar</a>  
</body>     
</html>
