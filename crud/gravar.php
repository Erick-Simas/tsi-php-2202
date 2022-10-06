<?php
//require_once requere aquilo que você pediu, somente uma vez. Estamos utilizando para buscar o código e conectar ao SGBD
require_once '../bancoDeDados/conecta.php';

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];


$consulta = $bd -> prepare('INSERT INTO alunos
                    (nome, turno, inicio)
                    VALUE (:nome, :turno, :inicio)');
/*Estamos adicionando com os valores o nome, turno e inicio. INSERT INTO serve para inserir na tabelaa que colocarmos o nome após ela, VALUES para adicionar o valor na inserção(os dados), porém neste momento, utilizamos para colocarmos rótulos para utilizarmos a funcionalidade abaixo */

$consulta -> bindParam('nome', $nome);
$consulta -> bindParam ('turno', $turno);
$consulta -> bindParam('inicio', $inicio);
/*
    A função $consulta->bimdParam() substitui os rótulos (ex.: ":nome") pelos dados inseguros
*/

if($consulta->execute()){
    echo "Gravou com sucesso";
}
else{
    echo "Erro ao gravar no banco de dados";
}
//executa a consulta no banco de dados

//Isso tudo fará com que grave a informação do formuário entre no banco de dados

                