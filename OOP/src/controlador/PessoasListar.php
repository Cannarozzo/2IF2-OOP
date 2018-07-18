<?php
include_once __DIR__."/../modelo/PessoaDAO.php";

$pessoaDAO = new PessoaDAO();

$rs = $pessoaDAO->listarPessoas();

while($row = $rs->fetch(PDO::FETCH_OBJ))
    	{
    		echo $row->cd_pessoa."<br>";
    		echo $row->nm_pessoa."<br>";
    		echo $row->cpf_pessoa."<br>";
    		echo "<br><hr><br>";
    	}

?>