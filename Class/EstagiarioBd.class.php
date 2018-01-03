<?php


class EstagiarioBd {
    
    protected $table = 'estagiario';
    private $nomeEst;
    private $idCursoE; //chave estrangeira
    private $emailEst;
    private $enderecoEst;
    private $inicio;
    private $cpfEst;
    private $modalidade;
    private $idProE; //fk
    private $termino;
    private $nascimento;
    private $matricula;
    private $estado;
    private $relatorio;
    private $pis;
    private $telefone;
    private $idEmpresaE;//fk
    private $ano;
    private $cidade;


    public function setNome($nomeEst) {
        
        $this->nomeEst= $nome;
    }
    
    public function setAno($ano) {
        
        $this->ano= $ano;
    }
    
    public function setIdCursoE($idCursoE) {
        
        $this->idCursoE= $idCursoE;
    }
    
     public function setEmailEst($emailEst) {
        
        $this->emailEst= $emailEst;
    }
    
     public function setEnderecoEst($enderecoEst) {
        
        $this->enderecoEst= $enderecoEst;
    }
    
     public function setInicio($inicio) {
        
        $this->inicio= $inicio;
    }
    
     public function setCpfEst($cpfEst) {
        
        $this->cpfEst= $cpfEst;
    }
    
     public function setModalidade($modalidade) {
        
        $this->modalidade= $modalidade;
    }
    
     public function setIdProE($idProE) {
        
        $this->idProE= $idProE;
    }
    
    public function setTermino($termino) {
        
        $this->termino= $termino;
    }
    
    public function setNascimento($nascimento) {
        
        $this->nascimento= $nascimento;
    }
    
    public function setMatricula($matricula) {
        
        $this->matricula= $matricula;
    }
    
    public function setEstado($estado) {
        
        $this->estado= $estado;
    }
    
    public function setRelatorio($relatorio) {
        
        $this->relatorio= $relatorio;
    }
    
    public function setPis($pis) {
        
        $this->pis= $pis;
    }
    
    public function setTelefone($telefone) {
        
        $this->telefone= $telefone;
    }
    
    public function setIdEmpresaE($idEmpresaE) {
        
        $this->idEmpresaE= $idEmpresaE;
    }
    
    public function setCidade($cidade) {
        
        $this->cidade= $cidade;
    }
    
    public function selectIdC($nomeC){ // METODO PARA ENCONTRAR ID DE CURSO
        
       $conn = new conexao();
       $link = $conn->Conecta();
       
       $sql = mysqli_query($link,"SELECT id FROM curso WHERE nomeC = '$nomeC'  ")or die("Erro select curso".mysql_error()."<br>");
       $row_idC = mysqli_fetch_assoc($sql);
       return $row_idC;
    }
    // Métodos que fiz como intuito de pegar o id que são chaves estrangeiras
     public function selectIdP($nomeP){ 
        
       $conn = new conexao();
       $link = $conn->Conecta();
       
       $sql = mysqli_query($link,"SELECT id FROM professor WHERE nomeProf= '$nomeP'  ")or die("Erro select professor".mysql_error()."<br>");
       $row_idC =  mysqli_query($sql);
       return $row_idC;
        
    }
    
    public function selectIdE($nomeE){
        
       $conn = new conexao();
       $link = $conn->Conecta();
       
       $sql = mysqli_query($link,"SELECT id FROM empresa WHERE nomeEmp= '$nomeE'  ")or die("Erro select empresa".mysql_error()."<br>");
       $row_idC =  mysqli_query($sql);
       return $row_idC;
       
    }
    
    

        public function insert() {
          
        $conn = new Conexao();
        $conn->Conecta();
        
        $sql=mysqli_query($link,"INSERT INTO estagiario (nomeEst,idCursoE,emailEst,enderecoEst,inicio,cpfEst,modalidade,idProE,termino,nascimento,matricula,estado,relatorio,pis,telefone,idEmpresaE,ano,cidade) VALUES "
        . "('$this->nomeEst','$this->idCursoE','$this->emailEst','$this->enderecoEst','$this->inicio','$this->cpfEst','$this->modalidade','$this->idProE','$this->termino','$this->nascimento','$this->matricula','$this->estado','$this->relatorio','$this->pis','$this->telefone','$this->idEmpresaE','$this->ano','$this->cidade')") or die("Deu pt ".mysql_error()."<br>");
       
 
        
    }
    
    public function update($id) {
        
        $sql="UPDATE $this->table SET nome= :nome,email= :email WHERE id= :id";
        $stmt= DB::prepare($sql);
        $stmt-> bindParam(':nome',$this->nome);
        $stmt-> bindParam(':modalidade',$this->modalidade);
        $stmt-> bindParam(':id',$id);
        
        return $stmt->execute();
    }
    
    
    
    
}
