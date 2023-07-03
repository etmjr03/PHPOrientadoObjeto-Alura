<?php

// fopen lê um arquivo, o parâmetro 'r' significa que a ação será ler.
//$arquivo = fopen('README.md', 'r');

// feof verifica se estou no final do arquivo
/* while(!feof($arquivo)) {
    // fgets informa que irá ler o arquivo do parâmetro até o final da linha
    $linha = fgets($arquivo);

    echo $linha;
} */

/* $tamanhoDoArquivo = filesize('README.md');
$arquivoLido = fread($arquivo, $tamanhoDoArquivo);

echo $arquivoLido;
fclose($arquivo); */

// Função que faz tudo o que precisa, esperando as ações como parametros

$arquivoNovo = file_get_contents('README.md');

echo $arquivoNovo;