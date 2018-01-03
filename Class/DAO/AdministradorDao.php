<?php

require_once 'Conexao.php';

class AdministradorDao 
{

    private $conn;

    public function __construct() 
    {
        $pdo = new Conexao();
        $this->conn = $pdo->conectar();
    }

    public function Cadastrar(Administrador $adm) 
    {
        
        try {
            $stmt = $this->conn->prepare("INSERT INTO Administrador VALUES (:codigo,:usuario,:senha,:mestre)");
            
            $parametros = [
                ":codigo"   => null,
                ":usuario"  => $adm->getAdm_usuario(),
                ":senha"    => $adm->getAdm_senha(),
                ":mestre"   => $adm->getAdm_mestre()
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
