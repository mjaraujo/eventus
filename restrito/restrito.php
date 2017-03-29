<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
     if(isset($_COOKIE['restrito'])){
            echo 'Valor armazenado:' . $_COOKIE['restrito'];
        } else {
            echo 'Cookie restrito criado!';
            setcookie('restrito', 'cookie restrito',0, 'restrito/');
        }
?>