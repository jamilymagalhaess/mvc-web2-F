<?php
class Conexao
{
    private static $instancia;

    private function __construct()
    {
    }

    public static function getConexao()
    {
        if (!isset(self::$instancia)) {
            $dbname = 'pawi2';
            $host = 'localhost';
            $user = 'root';
            $senha = '';
            try {
                self::$instancia = new PDO('mysql:dbname=' . $dbname . ';host=' . $host, $user, $senha);
            } catch (Exception $e) {
                echo 'Erro na conexão com banco de dados: ' . $e;
            }
        }
        return self::$instancia;
    }
}
