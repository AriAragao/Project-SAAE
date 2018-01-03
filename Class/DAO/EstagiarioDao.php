<?php

require_once 'Conexao.php';

class EstagiarioDao 
{

    private $conn;

    public function __construct() 
    {
        $pdo = new Conexao();
        $this->conn = $pdo->conectar();
    }

    public function Cadastrar(Estagiario $est) 
    {
        
        try {
            $stmt = $this->conn->prepare("INSERT INTO estagiarios VALUES (:matricula,:nome,:nascimento,:cpf,:pis,:email,:tel,:endereco )");
            
            $parametros = [
                ":matricula"   => $est->getEst_matricula(),
                ":cpf"  => $est->getEst_cpf(),
                ":nome"    => $est->getEst_nome(),
                ":nascimento"   => $est->getEst_nasc(),
                ":cpf"   => $est->getEst_cpf(),
                ":pis"   => $est->getEst_pis(),
                ":email"   => $est->getEst_email(),
                ":tel"   => $est->getEst_tel(),
                ":endereco" =>$est->getEst_end()


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

    public function Selecionar(Administrador $adm) {
        
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
    }

    public function SelecionarTodos() {
        
    }

}
