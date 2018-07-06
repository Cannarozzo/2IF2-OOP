<?php 
// Conectando-se com BD MYSQL com a classe PDO
class FabricaConexao{

    public static function pegarConexao(){
        return new PDO("mysql:host=localhost:3306;dbname=sistema2018","meusaco","");
    }
//$conexao = new PDO("mysql:host=localhost:3306;dbname=sistema2018","meusaco","");

}
?>