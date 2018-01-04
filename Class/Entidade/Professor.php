<?php

class Professor {

    private $prof_codigo;
    private $prof_nome;
    private $prof_cpf;
    private $prof_tel;
    private $prof_email;
    private $prof_area;


    public function __construct($nome = "", $cpf = "", $tel = "", $email = "", $area = "")
    {
        $this->setProf_codigo(NULL);
        $this->setProf_nome($nome);
        $this->setProf_cpf($cpf);
        $this->setProf_tel($tel);
        $this->setProf_email($email);
        $this->setProf_area($area);
    }
    
    public function getProf_codigo() {
        return $this->prof_codigo;
    }

    public function getProf_nome() {
        return $this->prof_nome;
    }

    public function getProf_cpf() {
        return $this->prof_cpf;
    }

    public function getProf_tel() {
        return $this->prof_tel;
    }

    public function getProf_email() {
        return $this->prof_email;
    }

    public function getProf_area() {
        return $this->prof_area;
    }

    public function setProf_codigo($prof_codigo) {
        $this->prof_codigo = $prof_codigo;
    }

    public function setProf_nome($prof_nome) {
        $this->prof_nome = $prof_nome;
    }

    public function setProf_cpf($prof_cpf) {
        $this->prof_cpf = $prof_cpf;
    }    
    
    public function setProf_tel($prof_tel) {
        return $this->prof_tel = $prof_tel;
    }

    public function setProf_email($prof_email) {
        $this->prof_email = $prof_email;
    }
    
    public function setProf_area($prof_area) {
        $this-> prof_area = $prof_area;
    }

}
