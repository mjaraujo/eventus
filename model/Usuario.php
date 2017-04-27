<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace model;

/**
 * Description of Usuario
 *
 * @author marcio
 */
use config;

require_once 'crudUsuario.php';

class Usuario extends crudUsuario {

    private $userName = "";
    private $senha = "";
    private $nivel = 0;
    private $pessoa = 0;

    function getUserName() {
        return $this->userName;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNivel() {
        return $this->nivel;
    }

    function getPessoa() {
        return $this->pessoa;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    function __construct($userName, $senha, $nivel, $pessoa) {
        $this->userName = $userName;
        $this->senha = $senha;
        $this->nivel = $nivel;
        $this->pessoa = $pessoa;
    }

    public function inserirUsuario() {
        parent::insert($this->userName, $this->senha, $this->nivel, $this->pessoa);
    }

}
