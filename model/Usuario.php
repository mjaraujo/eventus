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
use config;

require_once 'crudPessoa.php';

class Pessoa extends crudPessoa {

    private $nome = "";
    private $tipo = '1';
    private $cpf ="";
    private $identificacao ="";
    
    
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

    public function insert() {
        $sql = "INSERT INTO $this->tabela (pesNome, pesTipo, pesIdentificacao, pesCPF) 
            values(:pesNome, :pesTipo, :pesIdentificacao, :pesCPF)";
        $stm = config\DB::prepare($sql);
        $stm->bindParam(':pesNome', $this->nome);
        $stm->bindParam(':pesTipo', $this->tipo);
        $stm->bindParam(':pesCPF', $this->cpf);
        $stm->bindParam(':pesIdentificacao', $this->identificacao);
        return $stm->execute();
    }
    
    

    //put your code here
}
