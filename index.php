<?php

require __DIR__ . '/vendor/autoload.php';

echo "<pre>"; print_r($_POST); echo "<pre>"; exit;

include __DIR__ . '/vagas/includes/header.php';
include __DIR__ . '/vagas/includes/listagem.php';
include __DIR__ . '/vagas/includes/footer.php';

