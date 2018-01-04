<?php

require_once 'Conexao.php';

class ProfessorDao 
{

    private $conn;

    public function __construct() 
    {
        $pdo = new Conexao();
        $this->conn = $pdo->conectar();
    }

    public function Cadastrar(Professor $prof) 
    {
        
        try {
            $stmt = $this->conn->prepare("INSERT INTO professores VALUES (:codigo,:nome,:cpf,:tel,:email,:area)");
            
            $parametros = [
                ":codigo"   => null,
                ":nome"  => $prof->getProf_nome(),
                ":cpf"   => $prof->getProf_cpf(),
                ":tel"   => $prof->getProf_tel(),
                ":email"   => $prof->getProf_email(),
                ":area"   => $prof->getProf_area()

            ];

            return $stmt->execute($parametros);
            
        } catch (PDOException $e) 
        {
            echo "ERRO: " . $e->getMessage();
        }
    }

    public function Alterar() {
        
    }

    public function Deletar() {
        
    }

   /* public function Selecionar(Administrador $adm) {
        
        try {
            $stmt = $this->conn->prepare("SELECT * FROM Administrador WHERE adm_usuario = :usuario AND adm_senha = :senha");
            
            $parametros = [
                ":usuario"  => $adm->getAdm_usuario(),
                ":senha"    => $adm->getAdm_senha(),
            ];
            $stmt->execute($parametros);                       
            $rs = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            foreach ($rs as $value)
            {
                if ($value->adm_mestre === "S") 
                {
                    return "S";
                } else 
                {
                    return "N";
                }
            }
            
        } catch (PDOException $e) 
        {
            echo "ERRO: " . $e->getMessage();
        }
    }*/

    public function SelecionarTodos() {
        
    }

}
