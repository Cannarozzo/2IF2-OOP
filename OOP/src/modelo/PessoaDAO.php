<?php
//include_once "../conexao.php"; // transformá-lo em uma classe
//include_once "conexao.php";
include_once __DIR__."/../controlador/FabricaConexao.php";

class PessoaDAO{
    
    public function inserirObjeto(Pessoa $objeto){
        print_r($objeto);
        $conexao = FabricaConexao::pegarConexao();
        $nom = $objeto->getNome();
        $cp = $objeto->getCPF();
        $stmt = $conexao->prepare("INSERT INTO tb_Pessoa(nm_pessoa,cpf_pessoa) 
                                                        VALUES('$nom','$cp')");
        $stmt->execute();
    }
    
    public function listarPessoas(){
        $conexao = FabricaConexao::pegarConexao();
        $rs = $conexao->query("Select * from tb_Pessoa");
	
    	while($row = $rs->fetch(PDO::FETCH_OBJ))
    	{
    		echo $row->cd_pessoa."<br>";
    		echo $row->nm_pessoa."<br>";
    		echo $row->cpf_pessoa."<br>";
    		echo "<br><hr><br>";
    	}
    }
}



?>