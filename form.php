<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charser="utf-8">
        <title> Variaveis SuperGlobais do PHP</title>
    </head>	
    <body>
        <form method="GET" action="">
            <label> Nome <input type="text" name="nome"></label><br>
            <br><label> Idade <input type="text" name="idade"></label>

            <br>
            <fieldset>
                <legend> Escolha as opções que mais agradam: </legend>
                <input type="checkbox" name="hobby[]" value="bicicleta">Bicicleta
                <input type="checkbox" name="hobby[]" value="carro">Carro
                <input type="checkbox" name="hobby[]" value="futebol">Futebol

            </fieldset>

            <fieldset>
                <legend> Sexo/Genero </legend>
                <input type="radio" name="genero" value="Feminino">Feminino
                <input type="radio" name="genero" value="Masculino">Masculino
                <input type="radio" name="genero" value="Outros">Outros

            </fieldset>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php
    echo'POST';
    echo 'POST<pre>';
    print_r($_POST);
    echo '</pre>';
    
    echo'GET';
    echo 'GET<pre>';
    print_r($_GET);
    echo '</pre>';

    echo'REQUEST';
    echo 'REQUEST<pre>';
    print_r($_REQUEST);
    echo '</pre>';

    
?>