<?php

require_once '../classes/conexao.class.php';


class CursoBd {

    
    protected $table = 'curso';
    private $id;
    private  $nomeC;//dados da tabela
    private $modalidadeC;
    
    public function setNome($nome) {
        
        $this->nomeC= $nome;
    }
    
    public function setModalidade($modalidade) {
        
        $this->modalidadeC= $modalidade;
    }
    
    public function setId($id){
        
        $this->id=$id;
    }


    public function insert() {
        
        $conn = new conexao();
        $link = $conn->Conecta();
        
        $sql=mysqli_query($link,"INSERT INTO curso (nomeC,modalidadeC) VALUES ('$this->nomeC','$this->modalidadeC')") or die("Não foi possivel inserir os dados no banco de dados: ".mysql_error()."<br>");
      
    }
   
    public function update($id) {
        
       $conn = new conexao();
       $link = $conn->Conecta();    

        $sql=mysqli_query($link,"UPDATE curso SET nomeC='$this->nomeC', modalidadeC='$this->modalidadeC'  WHERE id='$id'")or die("Não foi possivel atualizar os dados no banco de dados: ".mysql_error()."<br>");;
        //$sql=mysqli_query($link,"UPDATE empresa SET nomeC='$this->nomeC', modalidadeC='$this->modalidadeC'  WHERE id='$id'");
    }
}

