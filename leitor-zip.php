<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents('zip://texto-maiusculo.zip#texto-maiusculo.md', false, $contexto);