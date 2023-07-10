<?php

$diretorioAtual = dir('.');

while($arquvio = $diretorioAtual->read()) {
    echo $arquvio. '<br>';
}