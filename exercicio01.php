<?php

//comentário de linha
/*comentario
de 
bloco */

$nome = 'Erick <br>';

echo "Olá $nome";
for ( $i = 0 ; $i < 10 ; $i++ )
{
echo "número da linha $i <br>";
}
$i=10;
while($i < 21)
{
    echo "Numero da linha $i <br>";
    $i++;
}

do{
    echo "Olá Erick <br>";
    $i++;
}while( $i < 10 );
$a=5;
$b=10;
if($a > $b)
    echo "5 é maior que 10";
else
    echo "5 não é maior que 10";

    $diaSemana= 0;

    switch($i){
        case 0 :
            echo "domingo";
        break;
        case 1 : 
            echo"segunda";
        break;
        case 2 : 
            echo "terça";
        break;
        case 3 :
            echo "quarta";
        break;
        case 4 : 
            echo "quinta";
        break;
        case 5 :
            echo "sexta";
        break;
        case 6 :
            echo "sabado";
        break;
        default:
        echo "Número invalido";
    }
//comentário de linha
/*comentario
de 
bloco */
