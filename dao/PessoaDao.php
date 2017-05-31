<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PessoaDao
 *
 * @author marcio
 */
namespace dao;

use config;
use model;

require_once '../config/DB.php';
require_once '../model/Pessoa.php';

class PessoaDao extends config\DB {
    //put your code here
    
    
    public function inserir($pessoa) {
        
        
        $sql = 'INSERT INTO ' . $pessoa->getTabela()  . ' (pesNome, pesTipo, pesIdentificacao, pesCPF) '
                . 'values(:pesNome, :pesTipo, :pesIdentificacao, :pesCPF)';
        
        
        echo 'sssssssqqqqqqllll: '. $sql;
        
        $nome = $pessoa->getNome();
        $tipo = $pessoa->getTipo();
        $cpf = $pessoa->getcpf();
        $identificacao = $pessoa->getIdentificacao();

        $stm = config\DB::prepare($sql);
        $stm->bindParam(':pesNome', $nome);
        $stm->bindParam(':pesTipo', $tipo);
        $stm->bindParam(':pesCPF', $cpf);
        $stm->bindParam(':pesIdentificacao', $identificacao);
        return $stm->execute();
    }
    
}
