<?php

class Conexao 

{
    private $conn;
    
    const DSN = "mysql:host=localhost;dbname=saae";
    const USUARIO = "root";
    const SENHA = "root";
        
    public function conectar()
    {
        try {
            
            $this->conn = new PDO(self::DSN, self::USUARIO, self::SENHA);
            #$this->conn = new PDO("mysql:host=localhost;dbname=saae", "root", "root");
            
            if (! $this->conn)
            {
                echo "Erro na conexão";
            }
                       
            return $this->conn;
            
        } catch (PDOException $e) {
            echo "Erro no sistema {$e->getMessage()}";
        }
    }
}

