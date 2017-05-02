<?php
function __autoload($class) {
    require_once $class . '.php';
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SETAC²</title>

    </head>
    <body>

        <legend class="h3">Formulário de inscrição</legend>
    <form method="post" action="controller/cadUsuario.php" target="new" name="frmInsc" id="frmInsc">
        <input name="userName" class="col-lg-6 leftradius" size="50" type="text" id="userName"  placeholder="Usuário">
        <input name="senha" type="password" class="form-control" placeholder="senha">
        <div>
            <fieldset style="width: 500px">
                <p><select name="nivel" id="tipo"  class="col-lg-6 leftradius">
                        <option value=0>Administrador</option>
                        <option value=1>Colaborador</option>
                        <option value=2>Organizador</option>
                    </select>
            </fieldset>
        </div>
  
        <input name="cadastrarUsuario" type="submit" class="btn btn-success" value="cadastrarUsuario">
    </form>

    </body>
</html>