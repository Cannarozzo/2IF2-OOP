<?php
	
	include_once 'conexao.php';

	$rs = $conexao->query("Select * from tb_cliente");
	
	while($row = $rs->fetch(PDO::FETCH_OBJ))
	{
		echo $row->cd_cliente."<br>";
		echo $row->nm_cliente."<br>";
		echo $row->cpf_cliente."<br>";
		echo "<br><hr><br>";
	}
?>