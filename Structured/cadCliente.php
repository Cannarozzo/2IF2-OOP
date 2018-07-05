<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];

include_once "conexao.php";

$stmt = $conexao->prepare("INSERT INTO tb_cliente(nm_cliente,
											      cpf_cliente
												  ) 
										   VALUES('$nome',
										          '$cpf')");
$stmt->execute();
?>