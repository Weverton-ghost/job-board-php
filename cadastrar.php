<?php

require __DIR__ . '/vendor/autoload.php';

//Utilização da vaga
use \App\Entity\Vaga;

//Validação do post
if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){

    $obVaga = new Vaga; 
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo = $_POST['ativo'];
    $obVaga->cadastrar
    
}

include __DIR__ . '/vagas/includes/header.php';
include __DIR__ . '/vagas/includes/formulario.php';
include __DIR__ . '/vagas/includes/footer.php';

