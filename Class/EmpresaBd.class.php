<?php 


require_once '../classes/conexao.class.php';

class EmpresaBd {
 
    
    protected $table = 'empresa';
    private $id;
    private  $nomeEmp;//dados da tabela
    private $respEmp;
    private $telEmpr;
    
    public function setNome($nomeE) {
        
        $this->nomeEmp= $nomeE;
    }
    
    public function setResponsavel($respE) {
        
        $this->respEmp= $respE;
    }
    public function setTel($telE) {
        
        $this->telEmpr= $telE;
    }
    
    public function setId($id) {
        
        $this->id= $id;
    }
    
    
    public function insert() {
        
        $conn = new conexao();
        $link = $conn->Conecta();
       
        $sql=mysqli_query($link,"INSERT INTO empresa (telEmpr,nomeEmp,respEmp) VALUES ('$this->telEmpr','$this->nomeEmp','$this->respEmp')") or die("Não foi possivel inserir os dados no banco de dados: ".mysql_error()."<br>");
    
        
    }
    
    public function update($id) {
        
        $conn = new conexao();
        $link = $conn->Conecta();    

        $sql=mysqli_query($link,"UPDATE empresa SET telEmpr='$this->telEmpr', nomeEmp='$this->nomeEmp', respEmp='$this->respEmp'  WHERE id='$id'")or die("Não foi possivel atualizar os dados no banco de dados: ".mysql_error()."<br>");;
        
       
    }
}

