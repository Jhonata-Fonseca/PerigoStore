<?php

class Cliente{
    
    public $idCliente;
    public $nomeCliente;
    public $emailCliente;
    public $senha;
    public $numero;
    public $cep;


    /*métodos set*/
    
    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    function setEmailCliente($emailCliente) {
        $this->emailCliente = $emailCliente;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }


    /*métodos get*/


    function getIdCliente() {
        return $this->idCliente;
    }

    function getNomeCliente() {
        return $this->nomeCliente;
    }

    function getEmailCliente() {
        return $this->emailCliente;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNumero() {
        return $this->numero;
    }

    function getCep() {
        return $this->cep;
    }

}

?>