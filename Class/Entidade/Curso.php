<?php

class Curso {

    private $curso_codigo;
    private $curso_nome;
    private $curso_modalidade;
    
    public function __construct( $nome = "", $modalidade = "")
    {
        $this->setCurso_codigo(NULL);
        $this->setCurso_nome($nome);
        $this->setCurso_modalidade($modalidade);
        
    }

    
    public function getCurso_codigo() {
        return $this->curso_codigo;
    }

    public function getCurso_nome() {
        return $this->curso_nome;
    }

    public function getCurso_modalidade() {
        return $this->curso_modalidade;
    }

    public function setCurso_codigo($curso_codigo) {
        $this->curso_codigo = $curso_codigo;
    }

    public function setCurso_nome($curso_nome) {
        $this->curso_nome = $curso_nome;
    }

    public function setCurso_modalidade($curso_modalidade) {
        $this->curso_modalidade = $curso_modalidade;
    }    
    

}
