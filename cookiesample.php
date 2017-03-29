<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
            if(isset($_COOKIE['aula'])){
                echo 'Valor armazenado:' . $_COOKIE['aula'];
            }else {
                echo 'Cookie criado!';
                setcookie('aula', 'cookie',time()+120);
            }
            echo '<br><br>';
            
            $cookie = json_decode( $_COOKIE[ "aula" ] );
            $expiry = $cookie->expiry;
            echo $expiry;
          
?>
