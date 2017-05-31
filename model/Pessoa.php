<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace model;

/**
 * Description of Pessoa
 *
 * @author marcio
 */
class Pessoa {

    protected $nome = "";
    protected $tipo = '1';
    protected $cpf = "";
    protected $identificacao = "";

    function getNome() {
        return $this->nome;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getIdentificacao() {
        return $this->identificacao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setIdentificacao($identificacao) {
        $this->identificacao = $identificacao;
    }

    function __construct() {
        
    }

    protected $tabela = 'pessoas';

    function getTabela() {
        return $this->tabela;
    }   

    function setTabela($tabela) {
        $this->tabela = $tabela;
    }

        
    //put your code here
}
