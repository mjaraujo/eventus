<?php

/**
 * Description of Pessoa
 *
 * @author marcio
 */

namespace model;
use config;
require_once './config/DB.php';


abstract class crudPessoa extends config\DB {
    private $tabela;
    private $nome;
    private $tipo;
    private $identificacao;
    private $cpf;
    private $dtNasc;


    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getCpf(){
        return $this->cpf;
    }
    
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    
    public function getDtNasc(){
        return $this->dtNasc;
    }
    
    public function setDtNasc($dtNasc){
        $this->dtNascc = $dtNasc;
    }
    
    public function getIdentificacao(){
        return $this->identificacao;
    }
    
    public function setIdentificacao($identificacao){
        $this->identificacao= $identificacao;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    function __construct() {
        
    }

}
