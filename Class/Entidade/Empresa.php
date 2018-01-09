<?php

class Empresa {

    private $emp_codigo;
    private $emp_nome;
    private $emp_tel;
    private $emp_responsavel;
    private $emp_tel_responsavel;
    private $emp_email_responsavel;

    
    public function __construct($nome = "", $tel = "", $resp = "", $telEmp = "", $emailEmp = "")
    {
        $this->setEmp_codigo(NULL);
        $this->setEmp_nome($nome);
        $this->setEmp_tel($tel);
        $this->setEmp_responsavel($resp);
        $this->setEmp_telEmp($telEmp);
        $this->setEmp_emailResp($emailEmp);
        
    }
    
    public function getEmp_codigo() {
        return $this->emp_codigo;
    }

    public function getEmp_nome() {
        return $this->emp_nome;
    }

    public function getEmp_tel(){
        return $this->emp_tel;

    }

    public function getEmp_telEmp() {
        return $this->emp_tel_responsavel;
    }

    public function getEmp_responsavel() {
        return $this->emp_responsavel;
    }

    public function getEmp_emailResp() {
        return $this->emp_email_responsavel;
    }



    public function setEmp_codigo($emp_codigo) {
        $this->emp_codigo = $emp_codigo;
    }

    public function setEmp_nome($emp_nome) {
        $this->emp_nome = $emp_nome;
    }

     public function setEmp_tel($emp_tel){
         $this->emp_tel = $emp_tel;

    }

    public function setEmp_telEmp($emp_tel_responsavel) {
        $this->emp_tel_responsavel = $emp_tel_responsavel;
    }    
    
    public function setEmp_responsavel($emp_responsavel) {
         $this->emp_responsavel = $emp_responsavel;
    }

    public function setEmp_emailResp($emp_email_responsavel) {
         $this->emp_email_responsavel = $emp_email_responsavel;
    }

}
