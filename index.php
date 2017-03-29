<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_COOKIE['restrito'])){
            echo 'Valor armazenado:' . $_COOKIE['restrito'];
        }
        else {
                echo 'não existe o cookie restrito';
        }
        echo '<br>';
        if(isset($_COOKIE['aula'])){
            echo 'Valor armazenado:' . $_COOKIE['aula'];
            
        }
        
        else{
                echo 'não existe o cookie aula';
        }
        
        print_r($_COOKIE['aula']);
        
        ?>
    </body>
</html>
