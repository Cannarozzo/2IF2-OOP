<meta charset="utf-8">
<h1><center>Excluir Cliente</center></h1>

<?php

$codigoCliente = $_GET['id'];
//chamar biblioteca conexao.php ou inserir codigos abaixo

include "conexao.php";

$rs = $conexao->query("Select * From tb_cliente WHERE cd_cliente = '".$codigoCliente."'");
		 

while($row = $rs->fetch(PDO::FETCH_OBJ))
{
?>

Código:<input type="text" name="codigo" 
              value = "<?php print $row->cd_cliente;?>" disabled ><br>
Nome:  <input type="text" name="nome" 
              value = "<?php print $row->nm_cliente;?>"disabled><br>
CPF:  <input type="text" name="cpf" 
              value = "<?php print $row->cpf_cliente;?>"disabled><br>

<br><br>

Confirma Exclusão? 
<input type="submit" value="SIM" onclick="javascript: location.href='confirma_excluir_cliente.php?id=<?php echo$row->cd_cliente;?>'">
<input type="button" value="Não" onclick="javascript: location.href='index.php'">

<?php
}
?>
