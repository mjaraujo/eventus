<?php
//    use model;
include_once ('../model/Usuario.php');

function __autoload($class) {
    //   echo 'classes/' . $class . '.php <br><br>';
    // require_once  $class . '.php';
}
?>


<?php


// Cadastro de Usuario
if (isset($_POST['cadastrarUsuario'])):

    $userName = $_POST['userName'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];
    $pessoa = $_POST['pessoa'];

    $usuario = new model\Usuario($userName, $senha, $nivel, $pessoa);
    
    if ($usuario->insert()) {
        echo 'pessoa cadastrada!';
    }
endif;


//exclusao de Usuario
if (isset($_POST['excluir_ui'])) {

    $id = $_POST['id_ui'];

    $usuario->delete($id);
}

// Alterar Usuario
if (isset($_POST['alterar'])) {
    $id = $_POST['id_uii'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $usuario->setNome($nome);
    $usuario->setEmail($email);

    $usuario->update($id);
}
?>


