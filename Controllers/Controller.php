<?php

class Controller
{

    public function __construct()
    {
    }

    public function carregarTemplate($nomeView, $dadosModel)
    {
        require 'Views/template.php';
    }

    public function carregarViewNoTemplate($nomeView, $dadosModel)
    {
        require 'Views/' . $nomeView . '.php';
    }
}
