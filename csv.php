<?php

// TRANSFORMA O ARQUVIO EM UM ARRAY
$arquivo = file('frases.txt');

// CRIA UM ARQUIVO E ESCREVE NELE
$arquivoCSV = fopen('frases.csv', 'w');

foreach($arquivo as $frases){
    $linha = [trim($frases)];

    // ESCREVE NO ARQUIVO CSV, CADA POSIÇÃO DO ARRAY, DELIMITADOR
    fputcsv($arquivoCSV, $linha, ';');

    //fwrite($arquivoCSV, implode($linha));
}

echo "linha adicionada com sucesso ao arquivo CSV! <br>";

fclose($arquivoCSV);