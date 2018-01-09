<?php

class Estagiario {

    private $est_matricula;
    private $est_nome;
    private $est_dtnascimento;
    private $est_cpf;
    private $est_pis;
    private $est_email;
    private $est_tel;
    private $est_end;
    
    public function __construct($matricula = "", $nome = "", $dtnascimento = "", $cpf = "", $pis = "", $email = "", $tel = "", $endereco = "")
    {
        $this->setEst_matricula($matricula);
        $this->setEst_nome($nome);
        $this->setEst_nasc($dtnascimento);
        $this->setEst_cpf($cpf);
        $this->setEst_pis($pis);
        $this->setEst_email($email);
        $this->setEst_tel($tel);
        $this->setEst_end($endereco);
    }
    
    public function getEst_matricula() {
        return $this->est_matricula;
    }

    public function getEst_nome() {
        return $this->est_nome;
    }

    public function getEst_nasc() {
        return $this->est_dtnascimento;
    }

    public function getEst_cpf() {
        return $this->est_cpf;
    }

    public function getEst_pis() {
        return $this->est_pis;
    }

    public function getEst_email() {
        return $this->est_email;
    }

    public function getEst_tel() {
        return $this->est_tel;
    }

    public function getEst_end() {
        return $this->est_end;
    }


    public function setEst_matricula($est_matricula) {
        return $this->est_matricula=$est_matricula;
    }

    public function setEst_nome($est_nome) {
        $this->est_nome = $est_nome;
    }

    public function setEst_nasc($est_dtnascimento) {
        $this->est_dtnascimento = $est_dtnascimento;
    }

    public function setEst_cpf($est_cpf) {
        $this->est_cpf = $est_cpf;
    }


    public function setEst_pis($est_pis) {
        $this->est_pis = $est_pis;
    }

    public function setEst_email($est_email) {
        $this->est_email = $est_email;
    }

    public function setEst_tel($est_tel) {
        $this->est_tel = $est_tel;
    }

    public function setEst_end($est_end) {
        $this->est_end = $est_end;
    }

}
