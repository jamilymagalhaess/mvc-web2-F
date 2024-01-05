<?php
spl_autoload_register(function ($nome_arquivo) {
    if (file_exists('Controllers/' . $nome_arquivo . '.php')) {
        require 'Controllers/' . $nome_arquivo . '.php';
    } elseif (file_exists('DAO/' . $nome_arquivo . '.php')) {
        require 'DAO/' . $nome_arquivo . '.php';
    } elseif (file_exists('Models/' . $nome_arquivo . '.php')) {
        require 'Models/' . $nome_arquivo . '.php';
    }
});
