<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//Apenas para ficar mais facil trabalhar com o dado enviado pelo usuario
//?? quando não xiste valor naquela primeira informação, neste caso o $_POST
$id = $_POST['id'] ?? 0;

//evito que seja recebido e, $id qualquer coisa que seja diferemte de múmeros
$id = preg_replace( '/\D/', '', $id);

if($bd ->exec("DELETE FROM alunos WHERE id = $id")){

    $apagado = true;
}
else{
    $apagado = false;
}

include 'index.php';