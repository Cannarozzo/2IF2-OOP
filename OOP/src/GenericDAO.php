<?php
//include_once "../conexao.php"; // transformá-lo em uma classe
//include_once "conexao.php";
class GenericDAO{
    
    public function inserirObjeto(Pessoa $objeto){
        print_r($objeto);
        $conexao = new PDO("mysql:host=localhost:3306;dbname=sistema2018","meusaco","");
        $nom = $objeto->getNome();
        $cp = $objecto->getCPF();
        $stmt = $conexao->prepare("INSERT INTO tb_cliente(nm_cliente,
											      cpf_cliente
												  ) 
										   VALUES('$nom',
										          '$cp')");
        $stmt->execute();
    }
    
}



?>