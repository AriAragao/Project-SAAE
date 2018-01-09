<?php

require_once 'Conexao.php';

class CursoDao 
{

    private $conn;

    public function __construct() 
    {
        $pdo = new Conexao();
        $this->conn = $pdo->conectar();
    }

    public function Cadastrar(Curso $curso) 
    {
        
        try {
            $stmt = $this->conn->prepare("INSERT INTO cursos VALUES (:codigo,:nome,:modalidade)");
            
            $parametros = [
                ":codigo"   => null,
                ":nome"  => $curso->getCurso_nome(),
                ":modalidade"    => $curso->getCurso_modalidade()
               
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

    /*public function Selecionar(Administrador $adm) {
        
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

        $result_curso = "SELECT * FROM cursos ";
        $resultado_curso = $this->conn->prepare($result_curso);
        $resultado_curso-> execute();

        return $resultado_curso->fetchAll(PDO::FETCH_ASSOC);
        
    }

}
