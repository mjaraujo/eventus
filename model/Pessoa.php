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

    function __construct() {
        
    }

    protected $tabela = 'pessoas';

    public function insert() {
        $sql = "INSERT INTO $this->tabela (pesNome, pesTipo, pesIdentificacao, pesCPF) 
            values(:pesNome, :pesTipo, :pesIdentificacao, :pesCPF)";
        $stm = config\DB::prepare($sql);
        $stm->bindParam(':pesNome', $this->getNome());
        $stm->bindParam(':pesTipo', $this->getTipo());
        $stm->bindParam(':pesCPF', $this->getCpf());
        $stm->bindParam(':pesIdentificacao', $this->getIdentificacao());
        return $stm->execute();
    }

    //put your code here
}
