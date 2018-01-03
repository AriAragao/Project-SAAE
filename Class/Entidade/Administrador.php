<?php

class Administrador {

    private $adm_codigo;
    private $adm_usuario;
    private $adm_senha;
    private $adm_mestre;
    
    public function __construct($usuario = "", $senha = "", $mestre = "N")
    {
        $this->setAdm_codigo(NULL);
        $this->setAdm_usuario($usuario);
        $this->setAdm_senha($senha);
        $this->setAdm_mestre($mestre);
    }
    
    public function getAdm_codigo() {
        return $this->adm_codigo;
    }

    public function getAdm_usuario() {
        return $this->adm_usuario;
    }

    public function getAdm_senha() {
        return $this->adm_senha;
    }

    public function setAdm_codigo($adm_codigo) {
        $this->adm_codigo = $adm_codigo;
    }

    public function setAdm_usuario($adm_usuario) {
        $this->adm_usuario = $adm_usuario;
    }

    public function setAdm_senha($adm_senha) {
        $this->adm_senha = $adm_senha;
    }    
    
    public function getAdm_mestre() {
        return $this->adm_mestre;
    }

    public function setAdm_mestre($adm_mestre) {
        $this->adm_mestre = $adm_mestre;
    }

}
