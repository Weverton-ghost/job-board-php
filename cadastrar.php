<?php

require __DIR__ . '/vendor/autoload.php';

//Validação do post
if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){
    die('Cadastrar');
}

include __DIR__ . '/vagas/includes/header.php';
include __DIR__ . '/vagas/includes/formulario.php';
include __DIR__ . '/vagas/includes/footer.php';

