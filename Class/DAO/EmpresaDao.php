<?php

require_once 'Conexao.php';

class EmpresaDao 
{

    private $conn;

    public function __construct() 
    {
        $pdo = new Conexao();
        $this->conn = $pdo->conectar();
    }

    public function Cadastrar(Empresa $emp) 
    {
        
        try {
            $stmt = $this->conn->prepare("INSERT INTO empresas VALUES (:codigo,nome,:tel,:resp,:telResp,:emailResp)");
            
            $parametros = [
                ":codigo"   => null,
                ":nome"  => $emp->getEmp_nome(),
                ":tel"    => $emp->getEmp_tel(),
                ":resp"   => $emp->getEmp_responsavel(),
                ":emailResp"   => $emp->getEmp_emailResp(),
                ":telResp"   => $emp->getEmp_telEmp()

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
    } */

    public function SelecionarTodos() {
        
    }

}
