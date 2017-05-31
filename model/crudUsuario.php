<?php


/**
 * Description of Pessoa
 *
 * @author marcio
 */

namespace model;
use config;
require_once '../config/DB.php';

abstract class crudUsuario extends config\DB {

    protected $tabela = 'usuarios';

    public function insert($userName, $senha, $nivel, $pessoa) {
        $sql = "INSERT INTO $this->tabela (usuUsername, usuSenha, usuNivel, usuPessoa) 
            values(:usuUsername, :usuSenha, :usuNivel, :usuPessoa)";
        $stm = config\DB::prepare($sql);
        $stm->bindParam(':usuUsername', $userName);
        $stm->bindParam(':usuSenha', $senha);
        $stm->bindParam(':usuNivel', $nivel);
        $stm->bindParam(':usuPessoa', $pessoa);
        return $stm->execute();
    }

}
