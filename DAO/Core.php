<?php
class Core
{
    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        $parametros = array();

        if (isset($_GET['pag'])) {
            $url = $_GET['pag'];
        }
        //possui informação apos dominio
        if (!empty($url)) {

            $url = explode('/', $url); //explode separa a array a partir da /
            $controller = $url[0] . 'Controller'; //
            array_shift($url);         // isso tira a posição 0 e a 1 se torna a 0
            //se mandou funçao

            if (isset($url[0]) && !empty($url[0])) {

                $metodo = $url[0];
                array_shift($url);   //tirar o primeiro elemento do vetor, para que fique só o proximo
            } else //mandou somente classe
            {
                $metodo = 'index';
            }

            if (isset($url[0])) {
                $parametros = $url;
            }
        } else //sem nada após dominio
        {
            $controller = 'homeController';
            $metodo = 'index';
        }

        $caminho = 'mvc-web2-F/Controllers/' . $controller . '.php';

        if (!file_exists($caminho) && !method_exists($controller, $metodo)) {
            $controller = 'homeController';
            $metodo = 'index';
        }

        //cria um novo objeto
        $c = new $controller;
        //chama a funçao/metodo a partir de uma array
        call_user_func_array(array($c, $metodo), $parametros);
    }
}
