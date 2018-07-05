<?php
//include_once "../conexao.php"; // transformá-lo em uma classe
//include_once "conexao.php";
class PessoaDAO{
    
    public function inserirObjeto(Pessoa $objeto){
        print_r($objeto);
        $conexao = new PDO("mysql:host=localhost:3306;dbname=sistema2018","meusaco","");
        $nom = $objeto->getNome();
        $cp = $objeto->getCPF();
        $stmt = $conexao->prepare("INSERT INTO tb_Pessoa(nm_pessoa,cpf_pessoa) 
                                                        VALUES('$nom','$cp')");
        $stmt->execute();
    }
    
}



?>