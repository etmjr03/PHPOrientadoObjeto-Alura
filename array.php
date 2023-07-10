<?php 

$array = [
    1 => 'um',
    2 => 'dois',
    6 => 'seis',
    7 => 'sete',
    8 => 'oito',
    9 => 'nove',
    3 => 'três',
    4 => 'quatro',
    5 => 'cinco',
    10 => 'dez'
];

$notas = [
    1, 2, 3, 4, 5, 10, 9, 8, 7, 6
];

foreach($array as $chave => $valores) {
    echo "A chave de número $chave = $valores <br>";
}

$contaArray = count($array);
$organizaArray = $notas;
sort($organizaArray);

echo "O tamanaho do array é $contaArray";
echo '<pre>';
print_r($organizaArray);
echo '</pre>';

echo '<<<-------------------------------->>>';

$notasTurma = [
    [
        'nome' => 'juninho',
        'nota' => 8
    ],
    [
        'nome' => 'Ana',
        'nota' => 9
    ],
    [
        'nome' => 'Carla',
        'nota' => 10
    ]
];

function ordenaNotas($nota1, $nota2) {
    if($nota1['nota'] > $nota2['nota']) {
        return -1;
    } 
    
    if($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}

usort($notasTurma, 'ordenaNotas');

echo '<pre>';
var_dump($notasTurma);
echo '</pre>';