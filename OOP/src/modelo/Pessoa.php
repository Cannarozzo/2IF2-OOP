<!--
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
    </body>
</html>
-->
<?php

class Pessoa{
    private $id;
    private $nome;
    private $cpf;
    
    public function __construct($name,$cpf){
        //echo "Construtor invocado";
        $this->nome = $name;
        $this->cpf = $cpf;
    }
    
    
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
      public function getCPF(){
        return $this->cpf;
    }
    
    public function setCPF($nome){
        $this->cpf = $cpf;
    }
 
 
}

/* Teste!
$p = new Pessoa('tomar');
echo $p->getNome();
echo "</br>";
$p->setNome('meu saco');
echo $p->getNome();
*/

?>