<?php
include_once __DIR__."/../modelo/PessoaDAO.php";

$pessoaDAO = new PessoaDAO();

$pessoaDAO->listarPessoas();

?>