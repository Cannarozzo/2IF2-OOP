<?php
	
	include_once 'conexao.php';

	$rs = $conexao->query("Select * from tb_Pessoa");
	
	while($row = $rs->fetch(PDO::FETCH_OBJ))
	{
		echo $row->cd_pessoa."<br>";
		echo $row->nm_pessoa."<br>";
		echo $row->cpf_pessoa."<br>";
		echo "<br><hr><br>";
	}
?>