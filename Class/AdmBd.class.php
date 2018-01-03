<?php 

  require_once 'Class/Conexao.class.php'; 

 
   
class AdmBd {
    
        protected $table = 'adm';
        private $nomeAdm;
        private  $cpf;
        private $senhaAdm;
        private $permissao;


        public function setNome($nome) {

            $this->nome= $nome;
        }

        public function setCpf($cpf) {

            $this->cpf= $cpf;
        }

        public function setSenha($senha) {

            $this->senha= $senha;
        }

        public function setPermissao($permissao) {

            $this->permissao= $permissao;
        }


        public function insert() {

           $conn = new Conexao();
           $link = $conn->Conecta();

            $sql=mysqli_query($link,"INSERT INTO adm (cpf,usuario,senha) VALUES ('$this->cpf','$this->nome','$this->senha')") or die("Não foi possivel inserir os dados no banco de dados: ".mysql_error()."<br>");



        }

        public function update($cpf) {
            
        $conn = new conexao();
        $link = $conn->Conecta();    

        $sql=mysqli_query($link,"UPDATE adm SET senha='$this->senha' WHERE cpf='$cpf'")or die("Não foi possivel atualizar os dados no banco de dados: ".mysql_error()."<br>");
        

        }

        public function Verificacao(){ //

            $conn = new conexao();
            $link = $conn->Conecta();
	

           $result_adm = "SELECT * FROM adm WHERE usuario= '$nomeAdm' AND senha= '$senhaAdm' LIMIT 1";
           $resultado_adm = mysqli_query($link, $result_adm) or die (mysqli_error($link));
           $row_adm = mysqli_fetch_assoc($resultado_adm);
           
           

           if(($this->nome ==$row_adm['usuario'])&&($this->senha==$row_adm['senha'])){
               
               $verificacao = $this->nomeAdm;

           }else{

              $verificacao = "nenhum";
				}				


          return $verificacao;  

    }

    public function VerificacaoCpf(){

        $conn = new conexao();
        $link = $conn->Conecta();

           $result_adm = "SELECT cpf FROM adm ";
           $resultado_adm = mysqli_query($link, $result_adm);
           $row_adm = mysqli_fetch_assoc($resultado_adm);

           if($this->cpf ==$row_adm['cpf']){


               $vericacao = 1;

           }else{

               $vericacao = 0;
           }


          return $vericacao;

    }

}