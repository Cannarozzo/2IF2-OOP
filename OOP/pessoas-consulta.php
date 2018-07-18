<?php
	include_once "src/modelo/PessoaDAO.php";
	
	$pessoaDAO = new PessoaDAO();
	$rs = $pessoaDAO->listarPessoas();
	
	while($row = $rs->fetch(PDO::FETCH_OBJ))
	{
		echo $row->cd_pessoa."<br>";
		echo $row->nm_pessoa."<br>";
		echo $row->cpf_pessoa."<br>";
		?>
	<br>
	<input type="button" name="Alterar" value="Alterar" onclick="javascript: location.href='alterar_cliente.php?id=<?php echo$row->cd_cliente;?>'" />
	<input type="button" name="Excluir" value="Excluir" onclick="javascript: location.href='excluir_cliente.php?id=<?php echo$row->cd_cliente;?>'" />
	<input type="button" name="Voltar" value="Voltar" onclick="javascript: location.href='menuPrincipal.php'">
	<br><hr><br>
<?php
	}
?>