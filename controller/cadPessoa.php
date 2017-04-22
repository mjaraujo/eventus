<?php
//    use model;
include_once ('../model/Pessoa.php');

function __autoload($class) {
    //   echo 'classes/' . $class . '.php <br><br>';
    // require_once  $class . '.php';
}
?>


<?php
$pessoa = new model\Pessoa();

// Cadastro de Usuario
if (isset($_POST['cadastrar'])):

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $documento = $_POST['documento'];
    $tipo = $_POST['tipo'];

    $pessoa->setNome($nome);
    $pessoa->setCpf($cpf);
    $pessoa->setIdentificacao($documento);
    $pessoa->setTipo($tipo);

    if ($pessoa->insert()) {
        echo 'pessoa cadastrada!';
    }
endif;


//exclusao de Usuario
if (isset($_POST['excluir_ui'])) {

    $id = $_POST['id_ui'];

    $pessoa->delete($id);
}

// Alterar Usuario
if (isset($_POST['alterar'])) {
    $id = $_POST['id_uii'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $pessoa->setNome($nome);
    $pessoa->setEmail($email);

    $pessoa->update($id);
}
?>


