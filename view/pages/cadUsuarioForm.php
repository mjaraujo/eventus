<?php

function __autoload($class) {
    require_once $class . '.php';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head></head>
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