<?php

require("src/Pessoa.php");
require("src/GenericDAO.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];

$pessoa = new Pessoa($nome,$cpf);
$gdao = new GenericDAO();

$gdao->inserirObjeto($pessoa);
//echo $pessoa->getNome();
//echo $pessoa->getCPF();
//print_r($pessoa);


?>