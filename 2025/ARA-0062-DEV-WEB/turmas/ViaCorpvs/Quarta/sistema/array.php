<?php

$aluno1 = 'Maria';
$aluno2 = 'Jose';
$aluno3 = 'Madeiusa';
$aluno4 = 'Shaolim';

// vetor/lista (array)
$alunos = [
    'Maria',
    'Joaquim',
    'Cezar',
    'Filomena',
];

$alunos[] = 'Yago';
$alunos[8] = 'Ernando';
$alunos[] = 'Italo'; 
$alunos[] = 'Douglas'; 
$alunos[5] = 'Isaac'; 
$alunos[] = 'Moises';
$alunos[] = 'Railson';  
$alunos[9] = 'Icaro';
$alunos['nine'] = 'Italo';
$alunos['nove'] = 'Ale';


// for ($i = 0; $i <= 8; $i++) {
//     echo $alunos[$i];
// }


echo '<pre>';
print_r($alunos);