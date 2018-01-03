<?php


require_once '../classes/conexao.class.php';


class ProfessorBd {
    
    
    protected $table = 'professor';
    private $nomeProf;
    private $cpfProf;
    private $id;
    private $emailProf;
    private $telProf;
    private $areaProf;
    
    public function setNomeProf($nomeP) {
        
        $this->nomeProf = $nomeP;
        
    }
    
    public function setCpfProf($cpfP) {
        
        $this->cpfProf= $cpfP;
        
    }
    
    public function setIdProf($id) {
        
        $this->id= $id;
        
    }
    
     public function setEmailProf($emailP) {
        
        $this->emailProf = $emailP;
        
    }
    
    public function setTelProf($telP) {
        
        $this->telProf = $telP;
        
    }
    
    public function setAreaProf($areaP) {
        
        $this->areaProf = $areaP;
        
    }
    
    public function insert(){

         $conn = new conexao();
        $link = $conn->Conecta();  
        
        $sql=mysqli_query($link,"INSERT INTO professor (nomeProf, cpfProf, emailProf, telProf, areaProf) VALUES ('$this->nomeProf','$this->cpfProf','$this->emailProf','$this->telProf','$this->areaProf')") or die("Não foi possivel inserir os dados no banco de dados: ".mysql_error()."<br>");
       
    }
    
     public function update($id) {

        $conn = new conexao();
        $link = $conn->Conecta();    

        $sql=mysqli_query($link,"UPDATE professor SET nomeProf='$this->nomeProf', cpfProf='$this->cpfProf', emailProf='$this->emailProf', telProf='$this->telProf',areaProf='$this->areaProf'  WHERE id='$id'")or die("Não foi possivel atualizar os dados no banco de dados: ".mysql_error()."<br>");;
        
    }
    
    
    
}
