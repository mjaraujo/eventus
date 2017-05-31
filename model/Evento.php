<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;

use config;

require_once 'crudUsuario.php';
class Evento {
     private $eveNome;
     private $EveDataIni;
     private $EveDataFim;
     
     function __construct($eveNome, $EveDataIni, $EveDataFim) {
         $this->eveNome = $eveNome;
         $this->EveDataIni = $EveDataIni;
         $this->EveDataFim = $EveDataFim;
     }
     
     function getEveNome() {
         return $this->eveNome;
     }

     function getEveDataIni() {
         return $this->EveDataIni;
     }

     function getEveDataFim() {
         return $this->EveDataFim;
     }

     function setEveNome($eveNome) {
         $this->eveNome = $eveNome;
     }

     function setEveDataIni($EveDataIni) {
         $this->EveDataIni = $EveDataIni;
     }

     function setEveDataFim($EveDataFim) {
         $this->EveDataFim = $EveDataFim;
     }

}
