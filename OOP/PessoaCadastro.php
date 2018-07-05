<?php
require("src/Pessoa.php"); // importa a classe Pessoa.php
require("src/PessoaDAO.php"); // importa a classe PessoaDAO.php para operações no banco de dados relacionadas a esta classe.

$nome = $_POST["nome"]; // Extrai o valor do parâmetro da querystring de nome "nome";
$cpf = $_POST["cpf"]; // Extrai o valor do parâmetro de requisição(query String) de nome "cpf";

$pessoa = new Pessoa($nome,$cpf); // instância um objeto do tipo Pessoa e passa como parâmtro para a função construtora da classe
// os valores dos atributos de requisição atráves do método post (nome e cpf).

$pessoaDAO = new PessoaDAO(); // Instância uma classe do tipo PessoaDAO. Esta classe executa todas as operações no banco de dados
// relacionadas a esta entidade, isto significa que ela possui uma tabela no banco de dados de mesmo nome. 
// É usada toda vez que for necessário salvar,deletar,buscar,alterar uma pessoa no banco de dados. 

$pessoaDAO->inserirObjeto($pessoa); // é invocado a função "inserirPessoa que recebe um objeto do tipo Pessoa como parâmetro".
// Esté método é responsável por desmanchar o objeto e monstar o comando SQL para inserção no banco de dados.

//echo $pessoa->getNome();
//echo $pessoa->getCPF();
//print_r($pessoa);


?>