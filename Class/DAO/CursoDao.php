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

    

    public function SelecionarTodos() {

        $result_curso = "SELECT * FROM cursos ";
        $resultado_curso = $this->conn->prepare($result_curso);
        $resultado_curso-> execute();

        return $resultado_curso->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function Selecionar($idC) {

        $result_curso = "SELECT * FROM cursos WHERE curso_codigo = $idC";
        $resultado_curso = $this->conn->prepare($result_curso);
        $resultado_curso-> execute();

        return $resultado_curso->fetchAll(PDO::FETCH_ASSOC);
        
    }

}
