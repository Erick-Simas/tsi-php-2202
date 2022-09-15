<?php
//$diaSemana= [0 => 'domingo', 1 => 'segunda', 2 => 'terça', 3 => 'quarta', 4 => 'quinta', 5 => 'sexta', 6 => 'sabado'];
//utilizamos o var_dump() para mostrar o que é aquela variavel que está dentro de parenteses

//$hoje = date('w');

//echo "hoje é {$diaSemana[$hoje]} ";

$aluno = [0 =>['matricula' => 41217, 'nome' => 'João', 'semestre' => 2],
    1 =>['matricula' => 41217, 'nome' => 'Paulo', 'semestre' => 3],
    2 =>['matricula' => 41217, 'nome' => 'Roberta', 'semestre' => 2]];

///var_dump($aluno);

    echo "<table border = 1>
            <tr>
            <td>matricula</td><td>nome</td><td>semestre</td>
            </tr>";

for($i = 0; $i < count($aluno); $i++ ) {
    echo "<tr>
    <td>{$aluno[$i]['matricula']}</td>
    <td>{$aluno[$i]['nome']}</td>
    <td>{$aluno[$i]['semestre']}</td>   
    </tr>";
}

foreach($aluno as $ind => $val){
    echo "<tr>
            <td>{$val['matricula']}</td>
            <td>{$val['nome']}</td>
            <td>{$val['semestre']}</td>
           </tr> ";
}
    echo "</table>";