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

$arquivoNovoAlterado = fopen('teste.md', 'w');

$novaFrase = "Adicionei uma frase aqui!";

fwrite($arquivoNovoAlterado, $novaFrase);

fclose($arquivoNovoAlterado);

/* $arquivoNovoREADME = fopen('README.md', 'a');

fwrite($arquivoNovoREADME, $novaFrase);

fclose($arquivoNovoREADME); */

// ADICIONANDO FRASE A UM ARQUIVO
$frase = "\nNova frase adicionada!";

file_put_contents('teste.md', $frase, FILE_APPEND);

// REQUISIÇÃO DE UMA API POR HTTP
$api = file_get_contents('http://pokeapi.co/api/v2/pokemon/pikachu/');

// LENDO ARQUIVO DENTRO DE UM ZIP
echo file_get_contents('teste.zip#teste-zip.md');

// APLICANDO FILTRO EM ARQUIVOS
$arquivoModificado = fopen('texto-maiusculo.md', 'r');

stream_filter_append($arquivoModificado, 'string.toupper');

$conteudo = fread($arquivoModificado, filesize('texto-maiusculo.md'));

echo $conteudo;