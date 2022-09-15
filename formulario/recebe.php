<?php
 echo 'Bem vindo '. $_POST['NomeUsuario']. '. Sua Idade é ' . $_POST['IdadeUsuario']. ', seu cpf é '. $_POST['CPFUsuario']. ' e seu período é '. $_POST['periodoUsuario']. '';

$nome = $_POST['NomeUsuario'];
$idade = $_POST['IdadeUsuario'];
$cpf = $_POST['CPFUsuario'];
$periodo = $_POST['periodoUsuario'];

 $arquivo = fopen('alunos.csv', 'a');//abro o arquivo para append

 fwrite($arquivo, "$nome;$idade;$cpf;$periodo\r\n");//para fazer quebra de linhas
fclose($arquivo);